@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <form action="/payment" method="POST">
  @csrf
  @method('PUT')
   <div class="form-group">
   <label>Channel</label>
   <input type="text" name="channel" class="form-control" value="{{$payment->channel}}">
   </div>
   <div class="form-group">
   <label>Date</label>
   <input type="text" name="date" class="form-control" value="{{$payment->date}}">
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