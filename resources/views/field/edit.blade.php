@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Field</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/field" method="POST">
  @csrf
  @method('PUT')
   <div class="form-group">
   <label>Name</label>
   <input type="text" name="contact" class="form-control" value="{{$contact->contact}}">
   </div>
   <div class="form-group">
   <label>Description</label>
   <textarea name="description" class="form-control" row="6">Description</textarea>
   </div>
   <div class="form-group">
    <label>Status</label>
   <select class="form-select" name="status" value="{{$field->status}}">
   <option value="Active">Active</option>
   <option value="Inactive">Inactive</option>
   </select>
   </div>
   <button type="submit" class="btn btn-sm btn-success">update</button>
</form>
</div>
</div>
@endsection