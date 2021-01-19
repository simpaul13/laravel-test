@extends('layouts.app')

@section('content')

    <h3>{{$post->title}}</h3>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written On {{$post->created_at}}</small>

@endsection
