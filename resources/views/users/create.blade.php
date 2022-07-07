@extends('layouts.app')
@section('content')
<main class="container">
<div class="card">
  <div class="card-header">Add a new User</div>
  <div class="card-body">
                        <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="title" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="subtitle" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="img" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
</div>
</main>
@stop
