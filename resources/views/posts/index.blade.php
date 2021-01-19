@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2 col-sm-2 text-center">
                            <img src="https://picsum.photos/80/80" alt="">
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by</small>
                        </div>
                    </div>
                </div>
            </div><br>
        @endforeach
        {{$posts->links()}}
    @else
    <div class="alert alert-success">
        <strong>No Posts Found!</strong>
    </div>
    @endif
@endsection
