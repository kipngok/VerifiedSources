@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/field/create" class="btn btn-sm btn-success">Create</a>
  <table class="table table-bordered">
   <thead>
    <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Status</th>
    
    </tr>
   </thead>
   <tbody>
   @foreach($fields as $field)
     <tr>
     <td>{{$field->name}}</td>
     <td>{{$field->description}}/td>
     <td>{{$field->status}}/td>
 

     <td><a href="/field/{{$field->id}}" class="btn btn-sm btn-success">View</a></td>
     </tr>
     @endforeach
   </tbody>
  </table>
 </div>
</div>
@endsection