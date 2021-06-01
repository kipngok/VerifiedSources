@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <a href="/payment/create" class="btn btn-sm btn-success">Create</a>
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

@endsection