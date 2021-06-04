@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Contact</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
  <tr><th>Contact</th><td>{{$contact->contact}}</td></tr>
  <tr><th>Type</th><td>{{$contact->type}}</td></tr>
  <tr><th>Source</th><td>{{$contact->source->name}}</td></tr>

  </table>
  <div class="btn btn-group">
  <a href="/contact/{{$contact->id}}/edit" class="btn btn-sm btn-success">Edit</a>
  <form action="/contact/{{$contact->id}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-success" type="submit">Delete</button>

  </form>
  </div>
 </div>
</div>
@endsection