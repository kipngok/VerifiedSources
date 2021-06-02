@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/field" method="POST">
  @csrf
   <div class="form-group">
   <label>Name</label>
   <input type="text" name="name" class="form-control">
   </div>
   <div class="form-group">
   <label>Description</label>
   <textarea name="description" class="form-control" row="6">Description</textarea>
   </div>
   <div class="form-group">
   <label>Status</label>
   <select class="form-select" name="status_id">
   <option value="Active">Active</option>
   <option value="Inactive">Inactive</option>
   </select>
   </div>
   <button type="submit" class="btn btn-sm btn-success">Save</button>
  </form>
 </div>
</div>
@endsection