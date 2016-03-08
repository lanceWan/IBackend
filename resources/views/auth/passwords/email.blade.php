@extends('layouts.app')

<!-- Main Content -->
@section('content')
<!-- BEGIN FORGOT PASSWORD FORM -->
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<form class="" action="{{ url('/password/email') }}" method="post">
    {!! csrf_field() !!}
    <h3>Forget Password ?</h3>
    <p> Enter your e-mail address below to reset your password. </p>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <button class="close" data-close="alert"></button>
        @foreach($errors->all() as $error)
            <span class="help-block"><strong>{{ $error }}</strong></span>
        @endforeach
    </div>
    @endif

    <div class="form-group">
        <div class="input-icon">
            <i class="fa fa-envelope"></i>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" value="{{ old('email') }}" name="email" /> 
        </div>
    </div>
    <div class="form-actions">
        <a href="{{url('/login')}}" id="back-btn" class="btn red btn-outline">Back </a>
        <button type="submit" class="btn green pull-right"> <i class="fa fa-btn fa-envelope"></i> Submit </button>
    </div>
</form>
<!-- END FORGOT PASSWORD FORM -->
@endsection
