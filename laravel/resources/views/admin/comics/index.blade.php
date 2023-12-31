@extends('layouts.app')
@section('title','admin comics list')

@section('main-content')
<h1>
    Admin comic list
</h1>

<div>
    @foreach($comicList as $comic)
    <div>
        {{$comic->title}}
    </div>
    <div>
        {{$comic->description}}
    </div>
    <div>
        {{$comic->thumb}}
    </div>
    <div>
        {{$comic->price}}
    </div>
    <div>
        {{$comic->series}}
    </div>
    <div>
        {{$comic->sale_date}}
    </div>
    <div>
        {{$comic->type}}
    </div>
    <div>
        {{$comic->artists}}
    </div>
    <div>
        {{$comic->writers}}
    </div>

    <a href="{{route('admin.comics.show', $comic->id)}}">Link</a>
</div>
@endforeach


@endsection