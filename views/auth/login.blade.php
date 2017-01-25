@extends('admin::layouts.public_layout')

@section('content')

    <div class="auth">
        <div class="auth-container">
            <div class="card">
                <header class="auth-header">
                    <h1 class="auth-title">
                        {{--<div class="logo">--}}
                            {{--<span class="l l1"></span>--}}
                            {{--<span class="l l2"></span>--}}
                            {{--<span class="l l3"></span>--}}
                            {{--<span class="l l4"></span>--}}
                            {{--<span class="l l5"></span>--}}
                        {{--</div>--}}
                        GNAdmin
                    </h1>
                </header>
                <div class="auth-content">
                    <p class="text-xs-center">LOGIN TO CONTINUE</p>
                    {!! Form::open(['url' => url('login'), 'novalidate', 'id' => 'login-form']) !!}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        {!! Form::label('email', 'E-Mail Address') !!}
                        {!! Form::text('email', old('email'), ['class' => 'form-control underlined', 'placeholder' => 'Your email address']) !!}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                {!! $errors->first('email') !!}
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        {!! Form::label('password') !!}
                        {!! Form::password('password', ['class' => 'form-control underlined', 'placeholder' => 'Your password']) !!}

                        @if ($errors->has('password'))
                            <span class="help-block">
                                {!! $errors->first('password') !!}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="remember">
                            {!! Form::checkbox('remember', 1, false, ['id' => 'remember', 'class' => 'checkbox']) !!}
                            <span>Remember me</span>
                        </label>
{{--                        {!! Html::tag('a', 'Forgot password?', ['href' => url('/password/reset'), 'class' => 'forgot-btn pull-right']) !!}--}}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Login', ['class' => 'btn btn-block btn-primary']) !!}
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-xs-center">Do not have an account? {!! Html::tag('a', 'Sign Up!', ['href' => url('register')]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
