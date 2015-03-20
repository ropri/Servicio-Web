<p>
			{{ Form::label('rol', 'Rol') }}
			{{ Form::text('rol') }}
		</p>

		<p>
			{{ Form::label('username', 'Matricula de usuario') }}
			{{ Form::text('username') }}
		</p>
		<p>
			{{ Form::label('password', 'Contraseña') }}
			{{ Form::password('password', null) }}
		</p>
		<p> {{ Form::submit('Guardar', array('class' => 'Button')) }}</p>