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
                    <p class="text-xs-center">SIGNUP TO GET INSTANT ACCESS</p>
                    {!! Form::open(['url' => url('register'), 'novalidate', 'id' => 'signup-form']) !!}

                    <div class="form-group{{ $errors->has('firstname') || $errors->has('lastname') ? ' has-error' : '' }}">
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('firstname') !!}
                                {!! Form::text('firstname', old('firstname'), ['class' => 'form-control underlined', 'placeholder' => 'Your firstname']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::label('lastname') !!}
                                {!! Form::text('lastname', old('lastname'), ['class' => 'form-control underlined', 'placeholder' => 'Your lastname']) !!}
                            </div>
                            <div class="col-md-12">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        {!! $errors->first('firstname') !!}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
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
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::label('password') !!}
                                {!! Form::password('password', ['class' => 'form-control underlined', 'placeholder' => 'Your password']) !!}
                            </div>
                            <div class="col-md-6">
                                {!! Form::label('password_confirmation', 'Confirm Password') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control underlined', 'placeholder' => 'Confirm your password']) !!}
                            </div>
                            <div class="col-md-12">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        {!! $errors->first('password') !!}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agree">
                            {!! Form::checkbox('agree', 1, false, ['id' => 'agree', 'class' => 'checkbox']) !!}
                            <span>Agree the terms and policy</span>
                        </label>
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Sign Up', ['class' => 'btn btn-block btn-primary']) !!}
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-xs-center">Already have an account? {!! Html::tag('a', 'Sign In!', ['href' => url('login')]) !!}</p>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
