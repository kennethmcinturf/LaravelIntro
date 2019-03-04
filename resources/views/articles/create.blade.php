@extends('app')
@section('content')

<h1>Create An Article</h1>

<hr>


{!! Form::model($article = new \App\Article, ['url' => 'articles']) !!}

        @include('articles.form', ['submitButton' => 'Create Article'])

{!! Form::close() !!}

@include('errors.list')


@stop