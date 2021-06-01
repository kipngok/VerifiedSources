@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<table class="table table-bordered">
			<tbody>
				<tr><th>Name</th><td>{{$package->name}}</td></tr>
				<tr><th>Description</th><td>{{$package->description}}</td></tr>
				<tr><th>Amount</th><td>{{$package->amount}}</td></tr>
				<tr><th>Duration</th><td>{{$package->time}}</td></tr>
			</tbody>
		</table>
		<div class="btn btn-group">
			<a href="/package/{{$package->id}}/edit" class="btn btn-sm btn-success">Edit</a>
			<form action="/package/{{$package->id}}" method="POST">
				@csrf
			<input type="hidden" name="_method" value="DELETE">	
			<button class="btn btn-sm btn-success" type="submit">Delete</button>
			</form>
		</div>
	</div>
</div>
@endsection
