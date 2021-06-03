@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Field</h2>
  </div>
</div>
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
  <tbody>
  <tr><th></th><td>{{$field->name}}</td></tr>
  <tr><th></th><td>{{$field->description}}</td></tr>
  <tr><th></th><td>{{$field->status}}</td></tr>
  </tbody>
  </table>
  <div class="btn btn-group">
  <a href="/field/{{$field->id}}/edit" class="btn btn-sm btn-success">Edit</a>
  <form action="/field/{{$field->id}}" method="POST">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-success" type="submit">Delete</button>

  </form>
  </div>
 </div>
</div>
@endsection