@extends('layouts.app-login')

@section('content')

    <div id="signup-box" class="signup-box visible widget-box no-border">
        <div class="widget-body">
            <div class="widget-main">
                <h4 class="header green lighter bigger">
                    <i class="ace-icon fa fa-users blue"></i>
                    New User Registration
                </h4>

                <div class="space-6"></div>
                <p> Enter your details to begin: </p>

                 <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <fieldset>
                        
                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                <i class="ace-icon fa fa-user"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

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
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <i class="ace-icon fa fa-lock"></i>
                            </span>
                        </label>

                        <label class="block clearfix">
                            <span class="block input-icon input-icon-right">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                <i class="ace-icon fa fa-retweet"></i>
                            </span>
                        </label>

                        
                        <div class="space-24"></div>

                        <div class="clearfix">
                            <button type="reset" class="width-30 pull-left btn btn-sm">
                                <i class="ace-icon fa fa-refresh"></i>
                                <span class="bigger-110">Reset</span>
                            </button>

                            <button type="submit" class="width-65 pull-right btn btn-sm btn-success">
                                <span class="bigger-110">Register</span>

                                <i class="ace-icon fa fa-arrow-right icon-on-right"></i>
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>

            <div class="toolbar center">
                <a href="{{ route('login') }}" class="back-to-login-link">
                    <i class="ace-icon fa fa-arrow-left"></i>
                    Back to login
                </a>
            </div>
        </div><!-- /.widget-body -->
    </div><!-- /.signup-box -->

@endsection
