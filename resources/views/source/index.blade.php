@extends('layouts.app')
@section('content')
<div class="row page-header">
  <div class="col-sm-12">
    <h2>Source</h2>
  </div>
</div>
<div class="container">
@foreach ($sources->chunk(4) as $chunk)
    <div class="row g-3">
        @foreach ($chunk as $source)
        <div class="col-sm-3">
            <x-source-card-slim :source=$source class="card h-100"></x-source-card-slim>
        </div>
        @endforeach
    </div>
@endforeach
<div class="row">
  <div class="col-sm-12">
    {{$sources->links()}}
  </div>
</div>
</div>
@endsection