@section('main')
<h1>Registrar Cuenta de Usuario</h1>
{{Form::model(new User, ['route'=>['user.store']])}}
@include('users/Partials/login',['submit_text'=>'Registrar Usuario'])
{{Form::close()}}
@stop