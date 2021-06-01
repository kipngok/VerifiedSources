@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
	<div class="col-sm-6">
<form action="/source/{{$source->id}}" method="POST">
@method('PUT')
@csrf
 <div class="form-group">
 <label>Name</label>
 <input type="text" name="name" class="form-control" value="{{$source->name}}">
</div>
 <div class="form-group">
 <label>Bio</label>
 <input type="text" name="bio" class="form-control" value="{{$source->name}}">
</div>
 <div class="form-group">
 <label>Status</label>
 <input type="text" name="status" class="form-control" value="{{$source->name}}">
</div>
 <div class="form-group">
 <label>Title</label>
 <input type="text" name="title" class="form-control" value="{{$source->name}}">
</div>
<div class="form-group">
 <label>Company</label>
 <input type="text" name="company" class="form-control" value="{{$source->name}}">
</div>
</form>
</div>
</div>
@endsection