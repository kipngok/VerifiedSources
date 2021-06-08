@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
  <h2>Subscription</h2>
  </div>
</div>
<!-- user_id','package','date','expiry_date','status','amount' -->
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/subscription" method="POST">
  @csrf
   <div class="form-group">
   <label>Package</label>
   <input type="text" name=" package" class="form-control">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="date" name="date" class="form-control">
   </div>
   <div class="form-group">
   <label>Expiry Date</label>
   <input type="date" name="expiry_date" class="form-control">
   </div>
   <div class="form-group">
   <label>Status</label>
   <select class="form-select" name="status">
   <option value="Active">Active</option>
   <option value="Inactive">Inactive</option>
   </select>
   </div>
   <div class="form-group">
   <label>Amount</label>
   <input type="text" name="amount" class="form-control">
   </div>
   <div class="form-group">
   <label>User</label>
   <select class="form-select" name="user_id">
    @foreach($users as $user)
   <option value="{{$user->id}}">{{$user->name}}</option>
   @endforeach
   </select>
   </div>
   <button type="submit" class="btn btn-sm btn-success">Save</button>

   
  </form>
 </div>
</div>
@endsection