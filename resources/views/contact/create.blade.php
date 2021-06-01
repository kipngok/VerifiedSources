@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/subscription" method="POST">
  @csrf
   <div class="form-group">
   <label>Contact</label>
   <input type="text" name="contact" class="form-control">
   </div>
   <div class="form-group">
   <label>Type</label>
   <select name="type" class="form-select">
   <option>Phone</option>
   <option>Email</option>
   <option>Linked-In</option>
   <option>Other</option>
   </select>
   </div>
   <div class="form-group">
   <label>Source</label>
   <select class="form-select" name="source_id">
   <option value="{{$source->id}}">{{$source->name}}</option>
   </select> 
   </div>
  </form>
 </div>
</div>
@endsection