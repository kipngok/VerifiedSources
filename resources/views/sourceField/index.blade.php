@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/sourceField/create" class="btn btn-sm btn-success">Create</a>
  <table class="table table-bordered">
   <thead>
    <tr>
    <th>Source</th>
    <th>Field</th>
    
    </tr>
   </thead>
   <tbody>
   @foreach($sourceFields as $sourceField)
     <tr>
     <td>{{$sourceField->source->name}}</td>
     <td>{{$sourceField->field->name}}</td> 

     <td><a href="/sourceField/{{$sourceField->id}}" class="btn btn-sm btn-success">View</a></td>
     </tr>
     @endforeach
   </tbody>
  </table>
 </div>
</div>

@endsection