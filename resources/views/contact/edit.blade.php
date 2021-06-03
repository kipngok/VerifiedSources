@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Contact</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/contact" method="POST">
  @csrf
  @method('PUT')
   <div class="form-group">
   <label>Contact</label>
   <input type="text" name="contact" class="form-control" value="{{$contact->contact}}">
   </div>
   <div class="form-group">
   <label>Type</label>
   <select name="type" class="form-select" value="{{$contact->type}}">
   <option>Phone</option>
   <option>Email</option>
   <option>Linked-In</option>
   <option>Other</option>
   </select>
   </div>

   <div class="form-group">
   <label>Source</label>
   <select class="form-select" name="user_id">
   @foreach($source as $source)
   @if($source->id==$contact->source_id)
   <option value="{{$source->id}}" selected="selected">{{$source->name}}</option>
   @else
   <option value="{{$source->id}}">{{$source->name}}</option>
   @endif
   @endforeach
   </select>
   </div>
   </form>
</div>
</div>
@endsection