@extends('_layouts.app')
@section('title', 'Обо мне')
@section('content')
<h1>Обо мне</h1>
<p>Я классный малый</p>		
@stop

@section('leftMenu')@endsection

@section('breadcrumbs')
<ul class="path">
	<li class="item"><a href="/" class="page">Главная</a></li>
	<li class="item"><span>Обо мне</span></li>
</ul>
@endsection