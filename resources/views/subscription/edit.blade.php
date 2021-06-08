@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Subscription</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/subscription/{{$subscription->id}}" method="POST">
    <!-- user_id','package','date','expiry_date','status','amount' -->
  @method('PUT')
  @csrf
   <div class="form-group">
   <label>Package</label>
   <input type="text" name="channel" class="form-control" value="{{$subscription->package}}">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="text" name="date" class="form-control" value="{{$subscription->date}}">
   </div>
     <label>Date</label>
   <input type="text" name="expiry_date" class="form-control" value="{{$subscription->expiry_date}}">
   </div>
    <div class="form-group">
    <label>Status</label>
   <select class="form-select" name="status" value="{{$subscription->status}}">
   <option value="Active">Active</option>
   <option value="Inactive">Inactive</option>
   </select>
   </div>
   <div class="form-group">
   <label>Amount</label>
   <input type="text" name="date" class="form-control" value="{{$subscription->amount}}">
   </div>
   <div class="form-group">
   <label>User</label>
   <select class="form-select" name="user_id">
   @foreach($user as $user)
   @if($user->id==$subscription->user_id)
   <option value="{{$user->id}}" selected="selected">{{$user->name}}</option>
   @else
   <option value="{{$user->id}}">{{$user->name}}</option>
   @endif
   @endforeach
   </select>
   </div>
  <button type="submit" class="btn btn-sm btn-success">update</button>

</form>
</div>
</div>
@endsection
