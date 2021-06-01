@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
  <table class="table table-bordered">
  <tr><th></th><td>{{$contact->contact}}</td></tr>
  <tr><th></th><td>{{$contact->type}}</td></tr>
  <tr><th></th><td>{{$contact->source}}</td></tr>

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