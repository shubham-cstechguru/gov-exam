<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    {{ HTML::style('assets/css/app.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/pages/extra_pages.css') }}
</head>

<body class="login-page">
    <div class="limiter">
        <div class="container-login100 page-background">
            <div class="wrap-login100">
                {!! Form::open(['url' => route('account.resetpassword.post'), 'method' => 'post', 'class' => 'login100-form validate-form']) !!}

                {!! Form::token(); !!}
                {{ \Session::forget('success') }}
                @if(\Session::get('error'))
                <div class="text-white" role="alert">
                    {{ \Session::get('error') }}
                </div>
                @endif
                <span class="login100-form-title p-b-34 p-t-27">
                    Reset Password
                </span>
                <input type="hidden" name="token" value="{{ $token }}">

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    {{ Form::password($name = 'password', array_merge(['class' => 'input100', 'placeholder' => 'Password'])) }}
                    @if($errors->has('password'))
                    <div class="text-white">
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                    <i class="material-icons focus-input1001">lock</i>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    {{ Form::password($name = 'password_confirmation', array_merge(['class' => 'input100', 'placeholder' => 'Confirm Password'])) }}
                    @if($errors->has('password'))
                    <div class="text-white">
                        {{ $errors->first('password') }}
                    </div>
                    @endif
                    <i class="material-icons focus-input1001">lock</i>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" value="Login">
                        Reset Password
                    </button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>

    {{ HTML::script('assets/js/app.min.js') }}
    {{ HTML::script('assets/js/pages/examples/pages.js') }}

</body>

</html>