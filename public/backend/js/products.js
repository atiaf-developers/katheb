var Products_grid;

var Products = function () {

    var init = function () {
        $.extend(lang, new_lang);
        $.extend(config, new_config);
        handleRecords();
        handleSubmit();
        My.readImageMulti('image');
    };


    var handleRecords = function () {
        Products_grid = $('.dataTable').dataTable({
            //"processing": true,
            "serverSide": true,
            "ajax": {
                "url": config.admin_url + "/products/data",
                "type": "POST",
                data: {_token: $('input[name="_token"]').val()},
            },
            "columns": [
                {"data": "title","name":"products_translations.title"},
                {"data": "active","name":"products.active", orderable: false, searchable: false},
                {"data": "this_order","name":"products.this_order"},
                {"data": "image","name":"products.image"},
                {"data": "options", orderable: false, searchable: false}
            ],
            "order": [
                [2, "asc"]
            ],
            "oLanguage": {"sUrl": config.url + '/datatable-lang-' + config.lang_code + '.json'}

        });
    }


    var handleSubmit = function () {
        $('#addEditProductsForm').validate({
            rules: {
                 this_order: {
                     required: true,
                 },
                 active:{
                     required : true,
                 },

            },
            //messages: lang.messages,
            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');

            },
            unhighlight: function (element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(element).closest('.form-group').find('.help-block').html('').css('opacity', 0);

            },
            errorPlacement: function (error, element) {
                $(element).closest('.form-group').find('.help-block').html($(error).html()).css('opacity', 1);
            }
        });
        
        
          var langs = JSON.parse(config.languages);
        for (var x = 0; x < langs.length; x++) {
             var ele = "textarea[name='description[" + langs[x] + "]']";
             var ele2 = "input[name='title[" + langs[x] + "]']";
             $(ele).rules('add', {
                 required: true
             });
             $(ele2).rules('add', {
                 required: true
             });
         }

        $('#addEditProductsForm .submit-form').click(function () {

            if ($('#addEditProductsForm').validate().form()) {
                $('#addEditProductsForm .submit-form').prop('disabled', true);
                $('#addEditProductsForm .submit-form').html('<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i><span class="sr-only">Loading...</span>');
                setTimeout(function () {
                    $('#addEditProductsForm').submit();
                }, 1000);
            }
            return false;
        });
        $('#addEditProductsForm input').keypress(function (e) {
            if (e.which == 13) {
                if ($('#addEditProductsForm').validate().form()) {
                    $('#addEditProductsForm .submit-form').prop('disabled', true);
                    $('#addEditProductsForm .submit-form').html('<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i><span class="sr-only">Loading...</span>');
                    setTimeout(function () {
                        $('#addEditProductsForm').submit();
                    }, 1000);
                }
                return false;
            }
        });



        $('#addEditProductsForm').submit(function () {
            var id = $('#id').val();
            var action = config.admin_url + '/products';
            var formData = new FormData($(this)[0]);
            if (id != 0) {
                formData.append('_method', 'PATCH');
                action = config.admin_url + '/products/' + id;
            }
            $.ajax({
                url: action,
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                success: function (data) {
                    $('#addEditProductsForm .submit-form').prop('disabled', false);
                    $('#addEditProductsForm .submit-form').html(lang.save);

                    if (data.type == 'success')
                    {
                        My.toast(data.message);
                        if (id == 0) {
                            Products.empty();
                        }


                    } else {
                        if (typeof data.errors !== 'undefined') {
                            for (i in data.errors)
                            {
                                var message=data.errors[i];
                                 if (i.startsWith('title')) {
                                    var key_arr = i.split('.');
                                    var key_text = key_arr[0] + '[' + key_arr[1] + ']';
                                    i = key_text;
                                }
                                 
                                $('[name="' + i + '"]')
                                        .closest('.form-group').addClass('has-error');
                                $('[name="' + i + '"]').closest('.form-group').find(".help-block").html(message).css('opacity', 1);
                            }
                        } 
                    }
                },
                error: function (xhr, textStatus, errorThrown) {
                    $('#addEditProductsForm .submit-form').prop('disabled', false);
                    $('#addEditProductsForm .submit-form').html(lang.save);
                    My.ajax_error_message(xhr);
                },
                dataType: "json",
                type: "POST"
            });


            return false;

        })




    }

    return {
        init: function () {
            init();
        },
       
        delete: function (t) {

            var id = $(t).attr("data-id");
            My.deleteForm({
                element: t,
                url: config.admin_url + '/products/' + id,
                data: {_method: 'DELETE', _token: $('input[name="_token"]').val()},
                success: function (data)
                {
                    Products_grid.api().ajax.reload();
                }
            });

        },
        add: function () {
            Products.empty();
            if (parent_id > 0) {
                $('.for-country').hide();
                $('.for-city').show();
            } else {
                $('.for-country').show();
                $('.for-city').hide();
            }

            My.setModalTitle('#addEditProductsForm', lang.add_location);
            $('#addEditProductsForm').modal('show');
        },

        error_message: function (message) {
            $.alert({
                title: lang.error,
                content: message,
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: lang.try_again,
                        btnClass: 'btn-red',
                        action: function () {
                        }
                    }
                }
            });
        },
        empty: function () {
            $('#id').val(0);
            $('#category_icon').val('');
            $('#active').find('option').eq(0).prop('selected', true);
            $('input[type="checkbox"]').prop('checked', false);
            $('.image_box').html('<img src="' + config.url + '/no-image.png" class="image" width="150" height="80" />');
            $('.has-error').removeClass('has-error');
            $('.has-success').removeClass('has-success');
            $('.help-block').html('');
            My.emptyForm();
        }
    };

}();
jQuery(document).ready(function () {
    Products.init();
});

