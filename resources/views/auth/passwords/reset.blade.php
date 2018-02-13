@extends('layouts.app-login')

@section('content')
    <div id="login-box" class="login-box visible widget-box no-border">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
        @endif
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header blue lighter bigger">
                    <i class="ace-icon fa fa-lock green"></i>
                    Reset Password
                </h4>

                <div class="space-6"></div>

                <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                    <fieldset>
                        <label for="email" class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Your Email" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <i class="ace-icon fa fa-envelope"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="password" type="password" class="form-control" name="password" placeholder="New Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <div class="space"></div>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm New Password" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                                <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <div class="space-4"></div>

                        <div class="clearfix">
                           
                            <button type="submit" class="pull-right btn btn-sm btn-danger">
                                <i class="ace-icon fa fa-lock"></i>
                                <span class="bigger-110">Reset Password</span>
                            </button>
                        </div>

                        <div class="space-4"></div>
                    </fieldset>
                </form>

                
            </div><!-- /.widget-main -->

            <div class="toolbar clearfix">
                <div>
                    <a href="{{ route('login') }}" class="forgot-password-link">
                        <i class="ace-icon fa fa-arrow-left"></i>
                        Back to Login Page
                    </a>
                </div>

                <div>
                    <a href="{{ route('register') }}" class="user-signup-link">
                        I want to register
                        <i class="ace-icon fa fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div><!-- /.widget-body -->
    </div><!-- /.login-box -->

@endsection
