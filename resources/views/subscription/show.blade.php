@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Subscription</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
  <tr><th>Package</th><td>{{$subscription->package}}</td></tr>
  <tr><th>Date</th><td>{{$subscription->date}}</td></tr>
  <tr><th>Status</th><td>{{$subscription->status}}</td></tr>
  <tr><th>Amount</th><td>{{$subscription->amount}}</td></tr>
  <tr><th>USer</th><td>{{$subscription->user->name}}</td></tr>

  </table>
  <div class="btn btn-group">
  <a href="/subscription/{{$subscription->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
  <form action="/subscription/{{$subscription->id}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-danger" type="submit">Delete</button>

  </form>
  </div>
 </div>
</div>

@endsection