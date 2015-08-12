@extends('layouts.master')

@section('title')
    This is my blog
@stop

@section('content')

<section ng-app="blog-app" ng-controller="blogCtrl">
    @if (count($blogs)) 
        @foreach($blogs as $i => $blog)
        <section class="post" ng-init="blog = blogs[{{$i}}]">
            <pre>{{ $blog; }}</pre>
            <h3>{{ $blog->title }}</h3>
            <p class="overview">
                {{ $blog->excerpt }}
            </p>
            <div class="author"><div>Written by @{{ blog.author.first_name + ' ' +  blog.author.last_name | lowercase }} </div></div>
            <div class="tags">@foreach($blog->tags as $tag)<span>{{ ucwords(strtolower($tag->text)) }}</span> @endforeach</div>
        </section>
        @endforeach
    @else
    <p>We DON'T have any content</p>
    @endif
</section>
<script type="text/javascript">
    var blogApp = angular.module('blog-app', []).controller('blogCtrl', function($scope) {
        $scope.blogs = {{ $blogs->toJson(); }}
        console.log($scope.blogs);
    });
</script>
@stop