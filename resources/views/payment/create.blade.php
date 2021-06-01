@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/payment" method="POST">
  @csrf
   <div class="form-group">
   <label>Channel</label>
   <input type="text" name="channel" class="form-control">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="text" name="date" class="form-control">
   </div>
   <div class="form-group">
   <label>User</label>
   <select class="form-select" name="user_id">
   <option value="{{$user->id}}">{{$user->name}}</option>
   </select>
   </div>
   
  </form>
 </div>
</div>
@endsection