@extends('layout')

@section('title')
	Página oculta
@stop

@section('content')
	<h2>Hola {{ Auth::user()->nick; }} (<a href="{{ URL::to('/logout') }}">Salir</a>)</h2>
	<h2>Estás en una página sólo para personas importantes como tú :P</h2>
@stop
