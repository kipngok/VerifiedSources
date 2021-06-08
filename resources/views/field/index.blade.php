@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Field</h2>
  </div>
</div>
<div class="container">
<div class="row content-justify-center">
 <div class="col">
  <table class="table table-bordered">
   <thead>
    <tr>
    <th>Name</th>
    <th>Description</th>
    <th>Status</th>
     <th>Action</th>
    
    </tr>
   </thead>
   <tbody>
   @foreach($fields as $field)
     <tr>
     <td>{{$field->name}}</td>
     <td>{{$field->description}}</td>
     <td>{{$field->status}}</td>
 

     <td><a href="/field/{{$field->id}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> View</a></td>
     </tr>
     @endforeach
   </tbody>
  </table>
 </div>
</div>
</div>
@endsection