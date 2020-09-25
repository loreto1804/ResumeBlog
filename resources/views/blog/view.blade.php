@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="blogpost" class="inner-content">
        @if (isset($blog))
        <section id="page-title" class="inner-section" data-animation-origin="right" data-animation-duration="500"
            data-animation-delay="300" data-animation-distance="50px">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold">{{$blog->title}}</h2>
                <div class="dividewhite2"></div>
                <div class="post-meta">
                    <span>by
                        <a href="#!">{{$blog->author}}</a>,
                    </span>
                    <span>{{$blog->created_at->format('F d, Y')}}</span>
                </div>
                <div class="post-tag pull-left">
                    @foreach(explode(' ', $blog->categories) as $category)
                    <span>
                        <a href="#{{$category}}" data-filter=".{{$category}}">
                            {{$category}}
                        </a>
                    </span>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Block -->
        <section class="inner-section">
            <div class="container-fluid nopadding">
                <img src="{{asset($blog->imageUrl)}}" class="img-responsive" data-animation-origin="top"
                    data-animation-duration="500" data-animation-delay="300" data-animation-distance="25px">
                <article class="post" data-animation-origin="top" data-animation-duration="500"
                    data-animation-delay="300" data-animation-distance="25px">
                    <div class="dividewhite6"></div>
                    <!-- Post Content -->
                    <div class="row">
                        <div class="col">
                            {!! nl2br($blog->content) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="text-right">
                                <small class="text-muted">
                                    <i>
                                        Last updated: {{$blog->updated_at->format('m/d/Y H:i A')}}
                                    </i>
                                </small>
                            </div>
                        </div>
                    </div>
                    <!-- /Post Content -->

                    <div class="dividewhite4"></div>
                </article>
            </div>
            <div class="dividewhite8"></div>
        </section>
        <!-- /Blog Block -->
        @else
        <section class="inner-section">
            <h2 class="font-accident-two-bold">Blog Post Not Found</h2>
        </section>
        @endif
    </div>
</div>
@endsection