@extends('layouts.admin')

@section('content')
    {!! Form::model($experience, ['route'=>'admin::resume::store', 'method' => 'put']) !!}

    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title', null, ['required'=>'required']) !!}

    {!! Form::label('company', 'Company') !!}
    {!! Form::text('company', null, ['required'=>'required']) !!}

    {!! Form::label('start', 'Start') !!}
    {!! Form::date('start', null, ['required'=>'required']) !!}

    {!! Form::label('end', 'End') !!}
    {!! Form::date('end', null) !!}

    {!! Form::label('type', 'Type') !!}
    {!! Form::select('type', experience_types(), null, ['required'=>'required']) !!}

    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['required'=>'required']) !!}

    {!! Form::label('file', 'Image') !!}
    {!! Form::file('file') !!}

    {!! Form::submit('Save') !!}

    {!! Form::close() !!}
@endsection
