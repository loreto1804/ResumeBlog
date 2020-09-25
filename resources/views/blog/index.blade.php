@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="blog" class="inner-content">
        <section id="page-title" class="inner-section ui-menu-yellow">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    Blog
                </h2>
                <h4 class="font-accident-two-light uppercase" data-animation-origin="right"
                    data-animation-duration="400" data-animation-delay="200" data-animation-distance="50px">
                    Thoughts on software engineering principles
                </h4>
                <p data-animation-origin="right" data-animation-duration="400" data-animation-delay="300"
                    data-animation-distance="50px">
                    There are disciplines that extend beyond any one programming language and I intend to discuss those
                    here. Mastering these concepts will not only make you a better programmer but will also help you
                    avoid pitfalls that myself and other developers have encountered in a professional environment. The
                    opinions expressed here are my own and should not reflect on others.
                </p>
            </div>
        </section>
        <!-- Blog Block -->
        <section class="inner-section" data-section="blog">
            <div class="dividewhite6"></div>
            <div id="isotope-filters" class="port-filter port-filter-light text-center" data-animation-origin="top"
                data-animation-duration="400" data-animation-delay="300" data-animation-distance="10px">
                <ul>
                    <li>
                        <a href="#all" data-filter="*">
                            All Categories
                        </a>
                    </li>
                    <li>
                        <a href="#SoftwareDevelopment" data-filter=".SoftwareDevelopment">
                            SoftwareDevelopment
                        </a>
                    </li>
                    <li>
                        <a href="#Scrum" data-filter=".Scrum">
                            Scrum
                        </a>
                    </li>
                </ul>
            </div>
            <div class="dividewhite6"></div>
            @if (isset($blogs))
            <div class="row masonry-row">
                <div class="grid container-fluid text-center">
                    <div id="posts" class="row popup-container">
                        @foreach($blogs as $post)
                        <div class="grid-item grid-sizer {{$post->categories}} col-md-6 col-sm-6">
                            <div class="item-wrap">
                                <figure data-animation-origin="right" data-animation-duration="500"
                                    data-animation-delay="300" data-animation-distance="0px">
                                    <div class="popup-call">
                                        <a href="{{asset($post->imageUrl)}}" class="gallery-item">
                                            <i class="flaticon-arrows-4"></i>
                                        </a>
                                    </div>
                                    <img src="{{asset($post->imageUrl)}}" class="img-responsive" alt="img11" />
                                    <figcaption>
                                        <div class="post-meta">
                                            <span>by
                                                <a href="#!">{{$post->author}}</a>,
                                            </span>
                                            <span>{{$post->created_at->format('F d, Y')}}</span>
                                        </div>
                                        <div class="post-header">
                                            <h5>
                                                <a href="{{route('blog.view', ['id' => $post->id])}}">
                                                    {{$post->title}}
                                                </a>
                                            </h5>
                                        </div>
                                        <div class="post-entry">
                                            <p>
                                                {{substr($post->content, 0, 200)}}...
                                            </p>
                                        </div>
                                        <div class="post-tag pull-left">
                                            @foreach(explode(' ', $post->categories) as $category)
                                            <span>
                                                <a href="#{{$category}}" data-filter=".{{$category}}">
                                                    {{$category}}
                                                </a>
                                            </span>
                                            @endforeach
                                        </div>
                                        <div class="post-more-link pull-right">
                                            <a href="{{route('blog.view', ['id' => $post->id])}}">
                                                More <i class="fa fa-long-arrow-right right"></i>
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="dividewhite8"></div>
        </section>
        <!-- /Blog Block -->
    </div>
</div>
@endsection