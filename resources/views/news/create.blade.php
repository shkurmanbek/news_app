@extends('layouts.app')
@section('content')
<main class="container">
<div class="card">
  <div class="card-header">Add new News</div>
  <div class="card-body">
      <form action="{{ url('admin/news') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Subtitle</label></br>
        <input type="text" name="subtitle" id="subtitle" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="img" id="img" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
</main>
@stop
