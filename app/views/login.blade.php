@extends('master')
<!-- The login page -->
@section('content')
<div id="content">
<legend>Sign In</legend>
<!-- Form to allow user to login, it will call the url 'login' with a POST method -->
{{ Form:: open(array('url'=>'login','method' => 'POST', 'class' => 'form-container')) }}

	<p id="sidWarning"></p>	
	<p>
		{{Form::text('id', '', array('placeholder'=>'username'))}}

	</p>
	<p id="passwordWarning"></p>
	<p>
		{{Form::password('password', array('placeholder' => 'Password'))}}
	</p>
	<p>
		{{Form::label("Remember Me")}}
		{{Form::checkbox('remember')}}
	</p>
	{{Form::submit('Login')}}
{{ Form::close()}}

</div>
@stop