<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\BackendController;
use App\Models\Service;
use App\Models\ServiceTranslation;
use Validator;
use DB;

class ServicesController extends BackendController {

    private $rules = array(
        'active' => 'required',
        'this_order' => 'required',
        'image' => 'required|image|mimes:gif,png,jpeg|max:1000',
    );

    public function __construct() {

        parent::__construct();
        $this->middleware('CheckPermission:services,open', ['only' => ['index']]);
        $this->middleware('CheckPermission:services,add', ['only' => ['store']]);
        $this->middleware('CheckPermission:services,edit', ['only' => ['show', 'update']]);
        $this->middleware('CheckPermission:services,delete', ['only' => ['delete']]);
    }

    public function index(Request $request) {
        return $this->_view('services/index', 'backend');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        return $this->_view('services/create', 'backend');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $columns_arr = array(
            'title' => 'required|unique:services_translations,title',
            'description' => 'required'
        );
        $lang_rules = $this->lang_rules($columns_arr);

        $this->rules = array_merge($this->rules, $lang_rules);

        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            return _json('error', $errors);
        }
        DB::beginTransaction();
        try {
            $service = new Service;
            $service->image = Service::upload($request->file('image'), 'services', true);
            $service->slug = str_slug($request->input('title')['en']);
            $service->active = $request->input('active');
            $service->this_order = $request->input('this_order');

            $service->save();

            $translations = array();
            $title = $request->input('title');
            $description= $request->input('description');
            foreach ($this->languages as $key => $value) {
                $translations[] = array(
                    'locale' => $key,
                    'title' => $title[$key],
                    'description' => $description[$key],
                    'service_id' => $service->id
                );
            }
            ServiceTranslation::insert($translations);
            DB::commit();
            return _json('success', _lang('app.added_successfully'));
        } catch (\Exception $ex) {
            DB::rollback();
            return _json('error', _lang('app.error_is_occured'), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $find = Service::find($id);

        if ($find) {
            return _json('success', $find);
        } else {
            return _json('error', _lang('app.error_is_occured'), 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $service = Service::find($id);

        if (!$service) {
            return _json('error', _lang('app.error_is_occured'), 404);
        }

        $this->data['translations'] = ServiceTranslation::where('service_id', $id)->get()->keyBy('locale');
        $this->data['product'] = $service;

        return $this->_view('services/edit', 'backend');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $service = Service::find($id);

        if (!$service) {
            return _json('error', _lang('app.error_is_occured'), 404);
        }
        $this->rules['image'] = 'image|mimes:gif,png,jpeg|max:1000';
        $columns_arr = array(
            'title' => 'required|unique:services_translations,title,' . $id . ',service_id',
            'description' => 'required'
        );
        $lang_rules = $this->lang_rules($columns_arr);
        $this->rules = array_merge($this->rules, $lang_rules);

        $validator = Validator::make($request->all(), $this->rules);

        if ($validator->fails()) {
            $errors = $validator->errors()->toArray();
            return _json('error', $errors);
        }

        DB::beginTransaction();
        try {
            if ($request->file('image')) {
                Service::deleteUploaded('services', $service->image);
                $service->image = Service::upload($request->file('image'), 'services', true);
            }
            $service->slug = str_slug($request->input('title')['en']);
            $service->active = $request->input('active');
            $service->this_order = $request->input('this_order');

            $service->save();

            $translations = array();

            ServiceTranslation::where('service_id', $service->id)->delete();

            $title = $request->input('title');
            $description= $request->input('description');

            foreach ($this->languages as $key => $value) {
                $translations[] = array(
                    'locale' => $key,
                    'title' => $title[$key],
                    'description' => $description[$key],
                    'service_id' => $service->id
                );
            }
            ServiceTranslation::insert($translations);

            DB::commit();
            return _json('success', _lang('app.updated_successfully'));
        } catch (\Exception $ex) {
            DB::rollback();
            return _json('error', _lang('app.error_is_occured'), 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $service = Service::find($id);
        if (!$service) {
            return _json('error', _lang('app.error_is_occured'), 404);
        }
        //dd($service);
        DB::beginTransaction();
        try {
            $service->delete();
            DB::commit();
            return _json('success', _lang('app.deleted_successfully'));
        } catch (\Exception $ex) {
            DB::rollback();
            if ($ex->getCode() == 23000) {
                return _json('error', _lang('app.this_record_can_not_be_deleted_for_linking_to_other_records'), 400);
            } else {
                return _json('error', _lang('app.error_is_occured'), 400);
            }
        }
    }

    public function data(Request $request) {

        $services = Service::Join('services_translations', 'services.id', '=', 'services_translations.service_id')
                ->where('services_translations.locale', $this->lang_code)
                ->select([
            'services.id', "services_translations.title", "services.this_order", 'services.active','services.image'
        ]);

        return \Datatables::eloquent($services)
                        ->addColumn('options', function ($item) {

                            $back = "";
                            if (\Permissions::check('services', 'edit') || \Permissions::check('services', 'delete') || \Permissions::check('album_images', 'open')) {
                                $back .= '<div class="btn-group">';
                                $back .= ' <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> ' . _lang('app.options');
                                $back .= '<i class="fa fa-angle-down"></i>';
                                $back .= '</button>';
                                $back .= '<ul class = "dropdown-menu" role = "menu">';
                                if (\Permissions::check('services', 'edit')) {
                                    $back .= '<li>';
                                    $back .= '<a href="' . route('services.edit', $item->id) . '">';
                                    $back .= '<i class = "icon-docs"></i>' . _lang('app.edit');
                                    $back .= '</a>';
                                    $back .= '</li>';
                                }

                                if (\Permissions::check('services', 'delete')) {
                                    $back .= '<li>';
                                    $back .= '<a href="" data-toggle="confirmation" onclick = "Services.delete(this);return false;" data-id = "' . $item->id . '">';
                                    $back .= '<i class = "icon-docs"></i>' . _lang('app.delete');
                                    $back .= '</a>';
                                    $back .= '</li>';
                                }


                                $back .= '</ul>';
                                $back .= ' </div>';
                            }
                            return $back;
                        })
                        ->editColumn('active', function ($item) {
                            if ($item->active == 1) {
                                $message = _lang('app.active');
                                $class = 'label-success';
                            } else {
                                $message = _lang('app.not_active');
                                $class = 'label-danger';
                            }
                            $back = '<span class="label label-sm ' . $class . '">' . $message . '</span>';
                            return $back;
                        })
                        ->editColumn('image', function ($item) {
                            $back = '<img src="' . url('public/uploads/services/' . $item->image) . '" style="height:64px;width:64px;"/>';
                            return $back;
                        })
                        ->escapeColumns([])
                        ->make(true);
    }

}
