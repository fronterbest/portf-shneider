<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<title>@yield('title')</title>
	<meta name="keywords" content="keywords">
	<meta name="description" content="description">	
	@include('_layouts.styles'){{-- Подключаем css стили --}}
</head>
<body>
	<div id="container">
		@include('_layouts.header'){{-- Подключаем шапку сайта --}}
		<section class="content">
			@if(Request::path() != '/'){{-- Если не главная, то вывод боковой рамки для sidebar --}}
			<div class="lineBlock">
				<div class="line"></div>
			</div>
			@endif
			<div class="wrapper">
				@if(Request::path() != '/'){{-- Если не главная, то вывод самого sidebar--}}
					@section('sidebar')
					<div class="layoutA">
						@section('leftMenu')
							@include("_layouts.sidebar.leftMenu")
						@show
						@section('search')
							@include("_layouts.sidebar.search")
						@show
					</div>
					@show
					<div class="layoutB">
						@include('_layouts/breadcrumbs'){{-- Вывод хлебных крошек --}}
						@yield('content'){{-- Вывод контента для вторичных страниц --}}
					</div>
				@endif
				@if(Request::path() == '/')
					@yield('content'){{-- Вывод контента для главной страницы --}}
				@endif
			</div>
		</section>
		@include('_layouts.footer')
	</div>
	<!--Скрипты js-->
	@include('_layouts.scripts')
</body>
</html>