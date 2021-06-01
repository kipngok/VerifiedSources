@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
		<form action="/package" method="POST">
			@method('PUT')
			<div class="form-group">
				<label>Package Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Description</label>
				<textarea name="description" class="form-control" rows="6">Description</textarea>
			</div>
			<div class="form-group">
				<label>Amount</label>
				<input type="text" name="amount" class="form-control">

			</div>
			<div class="form-group">
				<label>Duration</label>
				<input type="text" name="time" class="form-control">

			</div>
		</form>
	</div>
</div>
@endsection