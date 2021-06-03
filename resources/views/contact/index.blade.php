@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Contact</h2>
  </div>
</div>
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Contact</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
   <thead>
    <tr>
    <th>Contact</th>
    <th>Type</th>
    <th>Source</th>
    
    </tr>
   </thead>
   <tbody>
   @foreach($contacts as $contact)
     <tr>
     <td>{{$contact->contact}}</td>
     <td>{{$contact->type}}/td>
     <td>{{$contact->source}}/td>
 

     <td><a href="/contact/{{$contact->id}}" class="btn btn-sm btn-success">View</a></td>
     </tr>
     @endforeach
   </tbody>
  </table>
 </div>
</div>
@endsection