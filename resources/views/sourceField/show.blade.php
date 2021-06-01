@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
 <div class="col-sm-6">
 <tbody>
  <table class="table table-bordered">
  <tr><th></th><td>{{$sourceField->source}}</td></tr>
  <tr><th></th><td>{{$sourceField->field}}</td></tr>
 </tbody>
  </table>
  <div class="btn btn-group">
  <a href="/sourceField/{{$sourceField->id}}/edit" class="btn btn-sm btn-success">Edit</a>
  <form action="/sourceField/{{$sourceField->id}}" method="POST">
  <input type="hidden" name="_method" value="DELETE">
  <button class="btn btn-sm btn-success" type="submit">Delete</button>

  </form>
  </div>
 </div>
</div>
@endsection