@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Payment</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
  <tr><th></th><td>{{$payment->channel}}</td></tr>
  <tr><th></th><td>{{$payment->date}}</td></tr>
  <tr><th></th><td>{{$payment->user}}</td></tr>
  </table>
  <div class="btn btn-group">
  <a href="/payment/{{$payment->id}}/edit" class="btn btn-sm btn-success">Edit</a>
  <form action="/payment/{{$payment->id}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-success" type="submit">Delete</button>

  </form>
  </div>
 </div>
</div>

@endsection