@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
   <div class="col-sm-6">
<tbody>
<table class="table table-bordered">
 <tr><th>Name</th><td>{{$source->name}}</td></tr>
 <tr><th>Bio</th><td>{{$source->bio}}</td></tr>
 <tr><th>Status</th><td>{{$source->status}}</td></tr>
 <tr><th>Title</th><td>{{$source->title}}</td></tr>
 <tr><th>Company</th><td>{{$source->company}}</td></tr>
</table>
</tbody>
  <div class="btn btn-group">
   <a href="/source/{{$source->id}}/edit" class="btn btn-sm btn-info">Edit</a>
   <form action="/source/{{$source->id}}" method="POST">Delete</a>
   @csrf
   <input type="hidden" name="_method" value="DELETE">
   <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</div>
   </form>
</div>
</div>
@endsection