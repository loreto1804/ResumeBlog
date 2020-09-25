@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="blog-list" class="inner-content">
        <section id="page-title" class="inner-section ui-menu-yellow">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    Blogs
                </h2>
            </div>
        </section>
        <!-- Blog Block -->
        <section class="inner-section" data-section="blog">
            @if (isset($blogs) && count($blogs) > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Categories</th>
                            <th>Date</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>
                                {{$blog->title}}
                            </td>
                            <td>
                                {{$blog->author}}
                            </td>
                            <td>
                                {{$blog->categories}}
                            </td>
                            <td>
                                {{$blog->created_at->format('d/m/Y')}}
                            </td>
                            <td>
                                <input type="checkbox" disabled {{$blog->active ? 'checked=checked' : ''}} />
                            </td>
                            <td>
                                <a href="{{route('blog.edit', ['id' => $blog->id])}}">
                                    Edit
                                </a>
                                |
                                <a href="{{route('blog.view', ['id' => $blog->id])}}" target="_blank">
                                    View
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
            <div class="card">
                <div class="card-body text-center">
                    No Blogs to Display
                </div>
            </div>
            @endif
            <div class="dividewhite8"></div>
        </section>
        <!-- /Blog Block -->
    </div>
</div>
@endsection