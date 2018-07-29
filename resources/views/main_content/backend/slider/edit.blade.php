@extends('layouts.backend')

@section('pageTitle',_lang('app.slider'))

@section('breadcrumb')
<li><a href="{{url('admin')}}">{{_lang('app.dashboard')}}</a> <i class="fa fa-circle"></i></li>
<li><a href="{{route('slider.index')}}">{{_lang('app.slider')}}</a> <i class="fa fa-circle"></i></li>
<li><span> {{_lang('app.edit')}}</span></li>



@endsection

@section('js')
<script src="{{url('public/backend/js')}}/slider.js" type="text/javascript"></script>
@endsection
@section('content')
<form role="form"  id="addEditSliderForm" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="id" id="id" value="{{$slider->id}}">
   



    <div class="panel panel-default">
   
    <div class="panel-body">


        <div class="form-body">

            <div class="form-group col-md-2">
                <label class="control-label">{{_lang('app.image')}}</label>

                <div class="image_box">
                    <img src="{{url('public/uploads/slider/'.$slider->image)}}" width="100" height="80" class="image" />
                </div>
                <input type="file" name="image" id="image" style="display:none;">     
                <span class="help-block"></span>             
            </div>

            <div class="form-group form-md-line-input col-md-4">
                <input type="text" class="form-control" id="url" name="url" value="{{ $slider->url }}">
                <label for="url">{{_lang('app.url') }}</label>
                <span class="help-block"></span>
            </div>

            <div class="form-group form-md-line-input col-md-2">
                <input type="number" class="form-control" id="this_order" name="this_order" value="{{ $slider->this_order }}">
                <label for="this_order">{{_lang('app.this_order') }}</label>
                <span class="help-block"></span>
            </div>
            <div class="form-group form-md-line-input col-md-4">
                <select class="form-control edited" id="active" name="active">
                    <option {{ $slider->active == 1 ?'selected' : '' }} value="1">{{ _lang('app.active') }}</option>
                    <option {{ $slider->active == 0 ?'selected' : '' }} value="0">{{ _lang('app.not_active') }}</option>
                </select>
                <label for="status">{{_lang('app.status') }}</label>
                <span class="help-block"></span>
            </div> 
        </div>
    </div>

    <div class="panel-footer text-center">
        <button type="button" class="btn btn-info submit-form"
        >{{_lang('app.save') }}</button>
    </div>


</div>


</form>
<script>
    var new_lang = {

    };
    var new_config = {
    };

</script>
@endsection