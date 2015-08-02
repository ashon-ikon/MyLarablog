@extends('layouts.master')

@section('title')
    This is my blog
@stop

@section('content')

<section>
    @if (count($blogs)) 
        @foreach($blogs as $blog)
        <section class="post">
            <h3>{{ $blog->title }}</h3>
            <p class="overview">
                {{ $blog->excerpt }}
            </p>
            <div class="author"><div>Written by {{ ucwords(strtolower($blog->author[0]->username)) }}</div></div>
        </section>
        @endforeach
    @else
    <p>We DON'T have any content</p>
    @endif
</section>
@stop