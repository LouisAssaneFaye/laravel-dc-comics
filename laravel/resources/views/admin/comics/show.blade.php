@extends('layouts.app')
@section('title','singole comic page')

@section('main-content')
<h1>
    Admin comic list
</h1>

<div>
    
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
</div>


@endsection