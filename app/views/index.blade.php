@extends('layout')

@section('title')
	Identificación
@stop

@section('content')
	<h2>Identificarse</h2>

	@if(Session::get('msg'))
		<p>{{ Session::get('msg') }}</p>
	@endif

	{{ Form::open(array('url' => '/login', 'method' => 'POST')) }}
		E-mail <input type="text" name="email" /> <br />
		Contraseña <input type="password" name="password" /> <br />
		<input type="submit" value="Ingresar" />
	{{ Form::close() }}
@stop
