@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
<form action="/source/{{$source->id}}" method="POST" enctype="multipart/form-data">
@method('PUT')
@csrf
 <div class="form-group">
 <label>Name</label>
 <input type="text" name="name" class="form-control" value="{{$source->name}}">
</div>
 <div class="form-group">
 <label>Bio</label>
 <input type="text" name="bio" class="form-control" value="{{$source->bio}}">
</div>
 <div class="form-group">
 <label>Status</label>
 <input type="text" name="status" class="form-control" value="{{$source->status}}">
</div>
 <div class="form-group">
 <label>Title</label>
 <input type="text" name="title" class="form-control" value="{{$source->title}}">
</div>
<div class="form-group">
 <label>Company</label>
 <input type="text" name="company" class="form-control" value="{{$source->company}}">
</div>
<div class="form-group">
 <label>Profile Picture</label>
 <input type="file" name="profile_picture" class="form-control" value="{{$source->profile_picture}}">
</div>
<button type="submit" class="btn btn-sm btn-success">update</button>
</form>
</div>
</div>
@endsection