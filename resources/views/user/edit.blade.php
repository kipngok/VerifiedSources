@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/user" method="POST">
			@method('PUT')
			@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}">
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="{{$user->email}}">
		</div>
		
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password" class="form-control" value="{{$user->password}}">
		</div>
		<div class="form-group">
			<label>Is_admin</label>
			<input type="checkbox" name="is_admin" value="1" class="form-control" value="{{$user->is_admin}}">
		</div>
		<div class="form-group">
			<label>Phone</label>
			<input type="text" name="phone" class="form-control" value="{{$user->phone}}">
		</div>
		<div class="form-group">
			<label>Country</label>
			<input type="text" name="country" class="form-control" value="{{$user->country}}">
		</div>
		</form>
		
	</div>
</div>
@endsection