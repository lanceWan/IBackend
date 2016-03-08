@extends('layouts.app')

@section('content')
<!-- BEGIN REGISTRATION FORM -->
<form action="{{url('/register')}}" method="post">
    {!! csrf_field() !!}
    <h3>Register</h3>
    <p> Enter your personal details below: </p>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button class="close" data-close="alert"></button>
        @foreach($errors->all() as $error)
            <span class="help-block"><strong>{{ $error }}</strong></span>
        @endforeach
    </div>
    @endif
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">name</label>
        <div class="input-icon">
            <i class="fa fa-font"></i>
            <input class="form-control placeholder-no-fix" type="text" placeholder="name" name="name"  value="{{old('mame')}}" /> </div>
    </div>
    <div class="form-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" value="{{old('email')}}" /> </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
    </div>
    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
            <div class="input-icon">
                <i class="fa fa-check"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="password_confirmation" /> </div>
        </div>
    </div>
    <div class="form-actions">
        <a id="register-back-btn" href="{{url('/login')}}" class="btn red btn-outline"> Back </a>
        <button type="submit" id="register-submit-btn" class="btn green pull-right"><i class="fa fa-btn fa-user"></i> Sign Up </button>
    </div>
</form>
<!-- END REGISTRATION FORM -->
@endsection
