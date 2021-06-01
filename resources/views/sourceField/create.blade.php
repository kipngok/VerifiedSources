@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/sourceField" method="POST">
   <div class="form-group">
   <label>Source</label>
   <select class="form-select" name="source_id">
   @foreach($sources as $source)
   <option value="{{$source->id}}">{{$source->name}}</option>
   </select>
   </div>
  
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