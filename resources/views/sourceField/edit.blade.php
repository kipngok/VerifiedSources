@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/field" method="POST">
  @csrf
  @method('PUT')
   <div class="form-group">
   <label>Source</label>
   <select class="form-select" name="source_id" >
   @foreach($sourcefields as $sourcefield)
   @if($source->id==$sourcefield->source_id)
   <option value="{{$sourcefield->id}}" selected="selected">{{$sourcefield->source->name}}</option>
   @else
   <option value="{{$sourcefield->id}}">{{$sourcefield->field}}</option>
   @endif
   @endforeach
   </select>
   </div>

    <div class="col-sm-6">
    <label>Field</label>
   <select class="form-select" name="field_id" >
   @foreach($sourcefields as $sourcefield)
   @if($field->id==$sourcefield->field_id)
   <option value="{{$sourcefield->id}}" selected="selected">{{$sourcefield->field->name}}</option>
   @else
   <option value="{{$sourcefield->id}}">{{$sourcefield->field}}</option>
   @endif
   @endforeach
   </select>
   </div>
</form>
</div>
</div>

@endsection