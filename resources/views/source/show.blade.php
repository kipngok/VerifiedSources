@extends('layouts.app')
@section('content')
<div class="row page-header mb-3">
  <div class="col-sm-12">
    <h2>Source</h2>
  </div>
</div>
<div class="row content-justify-center">
   <div class="col-sm-4">
      <x-source-card :source=$source class="card"></x-source-card>
  </div>
<div class="col-sm-4">
  <h4>Fields</h4>
  <p>The source is actively involved in the following fields</p>
		@foreach($source->sourceFields as $sourceField)
    <div class="card source-field mb-2">
      <div class="card-body">
        <h4 class="source-field-heading"><i class="fa fa-briefcase"></i> {{$sourceField->field->name}} </h4>
        @if(Auth::user()->is_admin ==1)
        <form action="/sourceField/{{$sourceField->id}}" method="POST" class="field-delete-form">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm"><i class="fa fa-times"></i></button>
        </form>
        @endif
      </div>
    </div>
		@endforeach

<h4>Contacts</h4>
  <p>The source  has the following contacts</p>
    @foreach($source->contacts as $contact)
    <div class="card source-field mb-2">
      <div class="card-body">
        <h4 class="source-field-heading">

          @if($contact->type =='Phone')
          <i class="fa fa-phone"></i> 
          @elseif($contact->type =='Email')
          <i class="fa fa-envelope"></i> 
          @elseif($contact->type =='Linked-In')
          <i class="fa fa-linkedin"></i> 
          @elseif($contact->type =='Other')
          <i class="fa fa-id-card"></i> 
          @endif
           {{$contact->contact}} </h4>
           @if(Auth::user()->is_admin ==1)
        <form action="/contact/{{$contact->id}}" method="POST" class="field-delete-form">
          @csrf
          @method('DELETE')
          <button class="btn btn-sm"><i class="fa fa-times"></i></button>
        </form>
        @endif
      </div>
    </div>
    @endforeach
</div>
<div class="col-sm-4">
  @if(Auth::user()->is_admin ==1)
<div class="card mt-3 mb-3">
  <div class="card-header">
    <h5>Add a contact to the source</h5>
  </div>
  <div class="card-body">
  <form action="/contact" method="POST">
  @csrf
  <input type="hidden" name="source_id" value="{{$source->id}}">
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
   <button class="btn btn-sm btn-success" type="submit">Save</button>
  </form>
</div>
</div>

<div class="card mt-3 mb-3">
  <div class="card-header">
    <h5>Add a field to the source</h5>
  </div>
  <div class="card-body">
  <form action="/sourceField" method="POST">
    @csrf
    <input type="hidden" name="source_id" value="{{$source->id}}">
    <div class="form-group">
      <label>Select field</label>
      <select name="field_id" class="form-select">
        @foreach($fields as $field)
        <option value="{{$field->id}}">{{$field->name}}</option>
        @endforeach
      </select>
    </div>
    <button class="btn btn-sm btn-success">Add field to source</button>
  </form>
</div>
</div>
@endif

</div>
</div>
@endsection