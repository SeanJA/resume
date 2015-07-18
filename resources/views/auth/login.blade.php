@extends('layouts.admin')

@section('content')

    {!! Form::open(['method'=>'post']) !!}

        <div>
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['required'=>'required']) !!}
        </div>

        <div>
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', null, ['required'=>'required']) !!}
        </div>

        <div>
            {!! Form::label('remember', 'Remember Me') !!}
            {!! Form::checkbox('remember') !!}
        </div>

        <div>
            {!! Form::button('Login', ['type' => 'submit']) !!}
        </div>
    {!! Form::close() !!}

@endsection
