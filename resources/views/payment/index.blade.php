@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Payment</h2>
  </div>
</div>
<div class="container">
<div class="row content-justify-center">
 <div class="col">
  <table class="table table-bordered">
   <thead>
    <tr>
    <th>Channel</th>
    <th>Date</th>
    <th>User</th>
    </tr>
   </thead>
   <tbody>
   @foreach($payments as $payment)
     <tr>
     <td>{{$payment->channel}}</td>
     <td>{{$payment->date}}</td>
     <td>{{$payment->user}}</td>
     <td><a href="/payment/{{$payment->id}}" class="btn btn-sm btn-success">View</a></td>
     </tr>
    @endforeach 
   </tbody>
  </table>
 </div>
</div>
</div>

@endsection