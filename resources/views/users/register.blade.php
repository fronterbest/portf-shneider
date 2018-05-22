@extends('../_layouts.app')
@section('title', 'Регистрация пользователей')
@section('content')
<!--https://laravel.com/docs/5.1/authentication#included-views-->
	<h1>Регистрация</h1>

	<form method="POST" action="/users/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
	</form>	
	
@stop

@section('leftMenu')@endsection