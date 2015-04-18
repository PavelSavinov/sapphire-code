@extends('layouts.main')
@section('title') Login @stop
@section('content')
<div class="adm-login-wrapper">
<div class="row">
<div class=" large-9 columns adm-login-window">
	<div class="large-12 columns">
		@if($errors->has())
			@foreach ($errors->all() as $error)
				<div class="button alert">{{$error}}</div>
			@endforeach
		@endif	
		<h2>Авторизация</h2>
		{{Form::open(['role' => 'form'])}}
			<div class="row">
				{{Form::text('username', null, ['placeholder' => 'Имя'])}}
			</div>

		<div class="row">
			{{Form::text('password', null, ['placeholder' => 'Пароль'])}}
		</div>
		<div class="row">
		<ul class="button-group radius">
			{{Form::submit('Login', ['class' => 'small button success right'])}}
		</ul>
		</div>
		{{Form::close()}}
	</div>
</div>
</div>
</div>
@stop