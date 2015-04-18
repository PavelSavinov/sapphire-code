@extends('layouts.main')

@section('title') Создание пользователя @stop

@section('content')
	
<div>
	@if ($errors->has()) 
		@foreach ($errors->all() as $error)
		<div class="button alert">{{$error}}</div>
		@endforeach
	@endif
	
	<h1>Добавление пользователя</h1>
	{{ Form::open(['role' => 'form', 'url' => '/user']) }}

	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('first_name', 'Имя') }}
		{{ Form::text('first_name', null, ['placeholder' => 'Имя']) }}
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('last_name', 'Фамилия') }}
		{{ Form::text('last_name', null, ['placeholder' => 'Фамилия']) }}
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('username', 'Никнейм') }}
		{{ Form::text('username', null, ['placeholder' => 'Никнейм']) }}
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('password', 'Пароль') }}
		{{ Form::password('password', null, ['placeholder' => 'Пароль']) }}
		</div>
	</div>


	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('password_confirmation', 'Повторите пароль') }}
		{{ Form::password('password_confirmation', null, ['placeholder' => 'Повторите пароль']) }}
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
		{{ Form::label('email', 'E-mail') }}
		{{ Form::email('email', null, ['placeholder' => 'E-mail']) }}
		</div>
	</div>

	<div class="row">
		<ul class="button-group radius">
		{{Form::submit('Login', ['class' => 'small button success'])}}
		</ul>
	</div>

	{{ Form::close() }}		
</div> 