@extends ('layouts.main')

@section('title') Users @stop

@section('content')
<div class="container-fliud">
	<header class="header-adm">
		<h2>Sapphire-Code</h2>
	</header>
	<div class="no-indent">
	<nav class="nav-adm">
	<li><a class="fa fa-cog" href="#">Конфигурации</a></li>
	<li><a class="fa fa-user" href="#">Пользователи</a></li>
	<li><a class="fa fa-users" href="#">Группы</a></li>
	<li><a class="fa fa-list-alt" href="#">Статистика</a></li>
	<li><a class="fa fa-times" href="#">Выход</a></li>
	</nav>
</div>
	<div class="adm-container">
		<a href="/user/create" class="btn btn-primary pull-right fa fa-plus">Добавить пользователя</a>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Date/Time Added</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{$user->getFullName()}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at->format('F d , Y h:ia')}}</td>
						<td class="button-group">
							<a href="/user/{{$user->id}}/edit" class="tiny button" style="margin-right: 3px"><i class="fa fa-trash">Edit</i></a>
							{{ Form::open(['url' => '/user/'. $user->id, 'method' => 'DELETE', 'class' => 'inline-form']) }}
							{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
							{{ Form::close() }}
						</td>
					@endforeach
				</tbody>
			</table>
</div>
</div>
@stop