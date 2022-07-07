
@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                    <h5 class="card-title">Name : {{ $users->name }}</h5>
                    </div>
                        <div class="card-body">
                        <p class="card-text">Email : {{ $users->email }}</p>
                        </div>
                    </hr>
            </div>
        </div>
    </div>
</div>
@endsection
