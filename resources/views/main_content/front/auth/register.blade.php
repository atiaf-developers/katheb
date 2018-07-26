@extends('layouts.front')

@section('pageTitle',_lang('app.register'))

@section('js')
<script src=" {{ url('public/front/scripts') }}/login.js"></script>
@endsection

@section('content')

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="title">
                    <h2>{{ _lang('app.create_a_new_account') }}</h2>
                </div>
                <div class="login-area">
                    <form id="regForm">
                        {{ csrf_field() }}
                        <img class="user" src="{{ url('public/front/img') }}/signin1.png" alt="" >
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab form-group">
                            <h3>{{ _lang('app.enter_your_mobile_number_to_create_a_new_account') }}</h3>
                            <div class="tab-details">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="row">
                                                <p class="num-code">+966</p>
                                            </div>
                                        </div>
                                        <div class="col-md-10 form-group">
                                            <input type="hidden"  name="dial_code" value="966">
                                            <input type="text" class="form-control" name="mobile" id="mobile">
                                            <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                        <div class="tab dir form-group">
                            <h3>{{ _lang('app.complete_the_data') }}</h3>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <input type="text" class="form-control" name="name" placeholder="{{ _lang('app.name') }}">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <input type="text" class="form-control" name="username" placeholder="{{ _lang('app.username') }}">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <input type="text" class="form-control" name="email" placeholder="{{ _lang('app.email') }} - {{ _lang('app.optional') }}">
                                        <span class="help-block"></span>
                                    </div> 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <input type="password" class="form-control" name="password" placeholder="{{ _lang('app.password') }}">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="row">
                                        <input type="password" class="form-control" name="confirm_password" placeholder="{{ _lang('app.confirm_password') }}">
                                        <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab">
                            <div class="alert alert-success" style="display:{{Session('successMessage')?'block;':'none;'}}; " role="alert"><i class="fa fa-check" aria-hidden="true"></i> <span class="message">{{Session::get('successMessage')}}</span></div>
                            <div class="alert alert-danger" style="display:{{Session('errorMessage')?'block;':'none;'}}; " role="alert"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span class="message">{{Session::get('errorMessage')}}</span></div>
                        </div>
                        <div class="next2">
                            <button type="button" id="nextBtn" data-type="next" onclick="Login.nextPrev(this, 1)">{{ _lang('next') }}</button>
                            <button type="button" id="prevBtn" data-type="prev" onclick="Login.nextPrev(this, -1)">{{ _lang('app.back') }}</button>
                        </div>
                        <!-- Circles which indicates the steps of the form: -->
                        <div class="steps">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>





@endsection