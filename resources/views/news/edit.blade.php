@extends('layouts.app')
@section('content')
<main class="container">
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('news/' .$news->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$news->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$news->title}}" class="form-control"></br>
        <label>Subtitle</label></br>
        <input type="text" name="subtitle" id="subtitle" value="{{$news->subtitle}}" class="form-control"></br>
        <label>Image</label></br>
        <input type="text" name="img" id="img" value="{{$news->img}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
</main>

@stop
