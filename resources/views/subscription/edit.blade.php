@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/subscription" method="POST">
  @csrf
  @method('PUT')
   <div class="form-group">
   <label>Package</label>
   <input type="text" name="channel" class="form-control" value="{{$subscription->package}}">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="text" name="date" class="form-control" value="{{$subscription->date}}">
   </div>
   <div class="form-group">
   <label>Status</label>
   <input type="text" name="date" class="form-control" value="{{$subscription->status}}">
   </div>
   <div class="form-group">
   <label>Amount</label>
   <input type="text" name="date" class="form-control" value="{{$subscription->amount}}">
   </div>
   <div class="form-group">
   <label>User</label>
   <select class="form-select" name="user_id">
   @foreach($users as $user)
   @if($user->id==$source->user_id)
   <option value="{{$user->id}}" selected="selected">{{$user->name}}</option>
   @else
   <option value="{{$user->id}}">{{$user->name}}</option>
   @endif
   @endforeach
   </select>
   </div>
</form>
</div>
</div>
@endsection