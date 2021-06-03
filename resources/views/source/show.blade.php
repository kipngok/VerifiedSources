@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Source</h2>
  </div>
</div>
<div class="row content-justify-center">
   <div class="col-sm-6">

<table class="table table-bordered">
	<tbody>
 <tr><th>Name</th><td>{{$source->name}}</td></tr>
 <tr><th>Bio</th><td>{{$source->bio}}</td></tr>
 <tr><th>Status</th><td>{{$source->status}}</td></tr>
 <tr><th>Title</th><td>{{$source->title}}</td></tr>
 <tr><th>Company</th><td>{{$source->company}}</td></tr>
  <tr><th>Profile Picture</th><td>{{$source->profile_picture}}</td></tr>
 </tbody>
</table>

  
   <form action="/source/{{$source->id}}" method="POST">
   @csrf
   <div class="btn-group">
   <a href="/source/{{$source->id}}/edit" class="btn btn-sm btn-info">Edit</a>
   <input type="hidden" name="_method" value="DELETE">
   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
	</div>
   </form>
</div>
<div class="col-sm-6">
	<ul>
		@foreach($source->fields as $field)
		<li>{{$field->name}}</li>
		@endforeach
	</ul>

	@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/sourceField" method="POST">
  	@csrf
  	<input type="hidden" name="source_id" value="{{$source->id}}">
    <div class="form-group">
   <label>field</label>
   <select class="form-select" name="field_id">
   @foreach($fields as $field)
   <option value="{{$field->id}}">{{$field->name}}</option>
   </select>
   </div>
  
   
  </form>
 </div>
</div>
@endsection
</div>
</div>
@endsection