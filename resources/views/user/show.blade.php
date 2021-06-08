@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="col-sm-6">
				<table class="table table bordered table stripped">
					<tbody>
						<tr>
							<th>Name</th>
							<td>{{$user->name}}</td>
						</tr>
						<tr>
							<th>Email</th>
							<td>{{$user->email}}</td>
						</tr>
						<tr>
							<th>Phone</th>
							<td>{{$user->phone}}</td>
						</tr>
						<tr>
							<th>Country</th>
							<td>{{$user->country}}</td>
						</tr>
					</tbody>
				</table>
				<form action="/user" method="POST">
					<input type="hidden" name="_method" value="DELETE">
					<a href="/user" class="btn btn-sm btn-warning"><i class="fa fa-edit">Edit</i></a>
					 <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete </button>
  					 <a href="/user" class="btn btn-sm btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection