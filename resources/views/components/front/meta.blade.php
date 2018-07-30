<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('pageTitle')</title>

<!-- google fonts -->

<!-- Css link -->

<link rel="stylesheet" href="{{url('public/front/css')}}/bootstrap.min.css"/>
@if ($lang_code == 'ar')
<link rel="stylesheet" href="{{url('public/front/css')}}/style.css">
@else
<link rel="stylesheet" href="{{url('public/front/css')}}/style-en.css">
@endif
<link rel="stylesheet" type="{{url('public/front/css')}}/css" href="css/style.css" media="screen" data-name="skins">
<link rel="stylesheet" href="{{url('public/front/css')}}/layout/wide.css" data-name="layout">

<link rel="stylesheet" href="{{url('public/front/css')}}/fractionslider.css"/>
<link rel="stylesheet" href="{{url('public/front/css')}}/style-fraction.css"/>


<link rel="icon" type="image/png" sizes="32x32" href="{{url('public/front/images')}}/favicon.png">



<script>
    var config = {
        url: " {{ _url('') }}",
        base_url: " {{ url('') }}",
        customer_url: " {{ _url('customer') }}",
        lang: "{{ $lang_code }}",
        lang_code: "{{ $lang_code }}",
        isUser: "{{ $isUser }}",
        pusher_app_id: "{{env('PUSHER_APP_ID')}}",
        pusher_app_key: "{{env('PUSHER_APP_KEY')}}",
        pusher_cluster: "{{env('PUSHER_CLUSTER')}}",
        pusher_encrypted: true,
        user_id: '{{$User?$User->id:false}}',
    };


    var lang = {
        currency_sign: "{{ $currency_sign }}",
        sent_successfully: "{{ _lang('app.sent_successfully') }}",
        order_is_deleted: "{{ _lang('app.order_is_deleted') }}",
        save: "{{ _lang('app.save') }}",
        request_sent_successfully: "{{ _lang('app.request_sent_successfully') }}",
        you_must_login_first: "{{ _lang('app.you_must_login_first') }}",
        view_resturantes: "{{ _lang('app.view_resturantes') }}",
        region: "{{ _lang('app.region') }}",
        next: "{{ _lang('app.next') }}",
        confirm: "{{ _lang('app.confirm') }}",
        send_request: "{{ _lang('app.send_request') }}",
        choose: "{{ _lang('app.choose') }}",
        login: "{{ _lang('app.login') }}",
        register: "{{ _lang('app.register') }}",
        delete: "{{ _lang('app.delete')}}",
        view_message: "{{ _lang('app.view_message')}}",
        send: "{{ _lang('app.send')}}",
        no_results: "{{ _lang('app.no_results')}}",
        cancel_change_category: "{{ _lang('app.cancel_change_category')}}",
        change_category: "{{ _lang('app.change_category')}}",
        countries: "{{ _lang('app.countries')}}",
        no_category_selected: "{{ _lang('app.no_category_selected')}}",
        active: "{{ _lang('app.active')}}",
        not_active: "{{ _lang('app.not_active')}}",
        close: "{{ _lang('app.close')}}",
        no_item_selected: "{{ _lang('app.no_item_selected')}}",

        save: "{{ _lang('app.save')}}",
        updated_successfully: "{{ _lang('app.updated_successfully')}}",
        loading: "{{ _lang('app.loading')}}",
        deleting: "{{ _lang('app.deleting')}}",
        delete: "{{ _lang('app.delete')}}",
        uploading: "{{ _lang('app.uploading')}}",
        upload: "{{ _lang('app.upload')}}",
        required: "{{ _lang('app.this_field_is_required')}}",
        email_not_valid: "{{ _lang('app.email_is_not_valid')}}",
        alert_message: "{{ _lang('app.alert_message')}}",
        confirm_message_title: "{{ _lang('app.are you sure !?')}}",
        deleting_cancelled: "{{ _lang('app.deleting_cancelled')}}",
        yes: "{{ _lang('app.yes')}}",
        no: "{{ _lang('app.no')}}",
        error: "{{ _lang('app.error')}}",
        try_again: "{{ _lang('app.try_again')}}",
        choose_one: "{{ _lang('app.please_choose_one')}}",
        no_file_to_upload: "{{ _lang('app.no_file_to_upload')}}",
    };

    var errorElements1 = new Array;
    var errorElements2 = new Array;
    var errorElements = new Array;

</script>