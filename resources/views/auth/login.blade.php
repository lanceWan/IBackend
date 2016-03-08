@extends('layouts.app')

@section('content')
<!-- BEGIN LOGIN FORM -->
<form class="login-form" action="{{url('/login')}}" method="post">
    {!! csrf_field() !!}
    <h3 class="form-title">Login to your account</h3>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button class="close" data-close="alert"></button>
        @foreach($errors->all() as $error)
            <span class="help-block"><strong>{{ $error }}</strong></span>
        @endforeach
    </div>
    @endif
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">email</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="email" name="email" value="{{old('email')}}" /> 
        </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">验证码</label>
        <div class="input-group">
            <div class="input-icon">
                <i class="fa fa-lock fa-fw"></i>
                <input id="newpassword" class="form-control" type="text" name="captcha" placeholder="captcha">
            </div>
            <span class="input-group-btn">
                <a href="#"><img src="{{captcha_src()}}" onclick="this.src='{{captcha_src()}}'"></a>
            </span>
        </div>
    </div>
    <div class="form-actions">
        <label class="checkbox">
            <input type="checkbox" name="remember" value="1" /> Remember me </label>
        <button type="submit" class="btn green pull-right"> Login </button>
    </div>
    <div class="forget-password">
        <h4>Forgot your password ?</h4>
        <p> no worries, click
            <a href="{{ url('/password/reset') }}"> here </a> to reset your password. </p>
    </div>
    <div class="create-account">
        <p> Don't have an account yet ?&nbsp;
            <a href="javascript:;" id="register-btn"> Create an account </a>
        </p>
    </div>
</form>
<!-- END LOGIN FORM -->
@endsection
