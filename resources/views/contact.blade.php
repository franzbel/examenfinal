@extends('app')

@section('title', 'Hola mundo')

@section('content')
    <h1>TODOS LOS POSTS</h1>
    {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
    {{--@include('movies.partials.form')--}}

        {!! Form::hidden('user_id',  Auth::id()) !!}
        <div class="form-group">
            {!! Form::textarea('texto',null, ['class'=>'form-control']) !!}
        </div>

        <button type="submit" class="btn btn-info">Postear</button>
    {!! Form::close() !!}



	<div class="fondoguest">
		<p>{{$mensaje}}</p>
	</div>
    <p>comoe es </p>
@stop
