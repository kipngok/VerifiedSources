@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/payment/create" class="btn btn-sm btn-success">Create</a>
  <table class= "table table-bordered">
   <thead>
    <tr>
    <th>Package</th>
    <th>Date</th>
    <th>Expiry Date</th>
    <th>Status</th>
    <th>Amount</th>
    <th>User</th>

    </tr>
   </thead>
   <tbody>
   @foreach($subscriptions as $subscription)
     <tr>
     <td>{{$subscription->package}}</td>
     <td>{{$subscription->date}}/td>
     <td>{{$subscription->status}}/td>
     <td>{{$subscription->amount}}/td>
     <td>{{$subscription->user}}/td>


     <td><a href="/subscription/{{$subscription->id}}" class="btn btn-sm btn-success">View</a></td>
     </tr>
     @endforeach
   </tbody>
  </table>
 </div>
</div>
@endsection