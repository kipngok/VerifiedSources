@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/subscription" method="POST">
  @csrf
   <div class="form-group">
   <label>Package</label>
   <input type="text" name="channel" class="form-control">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="text" name="date" class="form-control">
   </div>
   <div class="form-group">
   <label>Expiry Date</label>
   <input type="text" name="expiry_date" class="form-control">
   </div>
   <div class="form-group">
   <label>Status</label>
   <input type="text" name="date" class="form-control">
   </div>
   <div class="form-group">
   <label>Amount</label>
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