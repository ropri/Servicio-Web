@section('main')
<h2>Editar Usuario </h2> 

{{ Form::model($users, array('route' => ['user.update', $users->id], 'method' => 'PATCH', 'role' => 'form') ) }}
		@include('users/Partials/login',['submit_text'=>'Actualizar Clientes'])
{{ Form::close()}}
@stop