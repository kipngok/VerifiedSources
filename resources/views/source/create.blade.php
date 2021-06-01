@extends('layouts.app')
@section('content')
<div class="row content-justify-center">
<div class="col-sm-6">
<form action="/source" method="POST">
@csrf
 <div class="form-group">
 <label>Name</label>
 <input type="text" name="source" class="form-control">
</div>
 <div class="form-group">
 <label>Bio</label>
 <input type="text" name="bio" class="form-control">
</div>
 <div class="form-group">
 <label>Status</label>
 <input type="text" name="status" class="form-control">
</div>
 <div class="form-group">
 <label>Title</label>
 <input type="text" name="title" class="form-control">
</div>
<div class="form-group">
 <label>Company</label>
 <input type="text" name="company" class="form-control">
</div>
</form>
</div>
</div>
@endsection