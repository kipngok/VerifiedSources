@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/source/create" class="btn btn-sm btn-success">CREATE</a>
  <table class="table table-bordered">
  <thead>
   <tr>
    <th>Name</th>
    <th>Bio</th>
    <th>Status</th>
    <th>Title</th>
    <th>Company</th>
   </tr>
  </thead>
  <tbody>
  @foreach($sources as $source)
  <tr>
  <td>{{$source->name}}</td>
  <td>{{$source->bio}}</td>
  <td>{{$source->status}}</td>
  <td>{{$source->title}}</td>
  <td>{{$source->company}}</td>
  <td>{{$source->profile_picture}}</td>
  <td><a href="/source/{{$source->id}}" class="btn btn-sm btn-success">VIEW</a>
  </tr>
  @endforeach
  </tbody>
  </table>

 </div>
</div>
@endsection