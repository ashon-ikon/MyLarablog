@extends('layouts.master')

@section('title')
Main
@stop

@section('content')

<div>
    This is my blog
    @if (count($blogs)) 
    <p>We have some content</p>
    @else
    <p>We DON'T have any content</p>
    @endif
</div>
@stop