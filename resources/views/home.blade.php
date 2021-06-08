@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <h1>Hi {{Auth::user()->name}}, welcome to verified sources</h1>
            <p>Your number one resource for sources accross africa</p>
        </div>

        @foreach ($fields->chunk(6) as $chunk)
            <div class="row g-3">
                @foreach ($chunk as $field)
                <div class="col-sm-2">
                    <a href="/source/field/{{$field->id}}" class="card">
                            <div class="card-body">
                                <i class="fa fa-briefcase"></i> {{$field->name}}
                            </div>
                        </a>
                </div>
                @endforeach
            </div>
        @endforeach

    </div>
</div>
@endsection
