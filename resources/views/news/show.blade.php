
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title">Title : {{ $news->title }}</h5>
                    </div>
                        <div class="card-body">
                        <h5 class="card-title">Title : {{ $news->title }}</h5>
                        <p class="card-text">Subtitle : {{ $news->subtitle }}</p>
                        <img src="{{ $news->img }}" alt="Image" width="650px">
                        </div>
                    </hr>
            </div>
        </div>
    </div>
</div>
@endsection
