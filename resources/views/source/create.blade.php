@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Source</h2>
  </div>
</div>
<div class="row content-justify-center">
<div class="col-sm-6">
<form action="/source" method="POST" enctype="multipart/form-data">
@csrf
 	<div class="form-group">
		 <label>Name</label>
 		 <input type="text" name="name" class="form-control">
	</div>
   <div class="form-group">
 	   <label>Bio</label>
 	   <textarea name="bio" class="form-control"></textarea>
    </div>

   <div class="form-group">
   	<label>Status</label>
   		<select class="form-select" name="status">
   		<option value="Active">Active</option>
   		<option value="Inactive">Inactive</option>
   		</select>
   </div>

 <div class="form-group">
 		<label>Title</label>
 		<input type="text" name="title" class="form-control">
</div>
 <div class="form-group">
 	<label>Profession</label>
 	<input type="text" name="profession" class="form-control">
</div>
<div class="form-group">
	 <label>Company</label>
	 <input type="text" name="company" class="form-control">
</div>
<div class="form-group">
 	<label>Profile Picture</label>
 	<input type="file" name="profile_picture" class="form-control">
</div>
	<button type="submit" class="btn btn-sm btn-success">Save</button>
</form>
</div>
</div>
@endsection