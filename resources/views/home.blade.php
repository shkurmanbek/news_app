@extends('layouts.app')
@section('content')
<!-- <style>
    div.imgborder
{
    width:450px;
    height:150px;
}

img.imgborder {
    background-color: black;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <!-- <a href="{{ url('/news/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a> -->

                        @foreach($news as $item)
                <div class="card-header">@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ $item->title }}
                    </div>
                                    <!-- {{ $loop->iteration }} -->
                    <!-- <div class="card-body"> -->
                        <div class="bg-light p-5 rounded">

                            <h1>{{ $item->title }}</h1>
                            <div class="imgborder"><img class="imgborder" src="{{ $item->img }}" alt="Image"></div>
                            <p class="lead">{{ $item->subtitle }}</p>
                            <!-- <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
                            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a>
                            <a class="btn btn-lg btn-primary" href="../components/navbar/" role="button">View navbar docs &raquo;</a> -->
                            <!-- <a href="{{ url('/news/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/news/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                            <form method="POST" action="{{ url('/news' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form> -->
                        </div>
                        <hr>
                    <!-- </div> -->
                    @endforeach
                    <div>
                        {{$news->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
