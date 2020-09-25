@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="blog" class="inner-content">
        <section id="page-title" class="inner-section ui-menu-yellow">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    New Blog Post
                </h2>
            </div>
        </section>
        <section class="inner-section">
            <form id="newBlog" action="{{route('blog.post')}}" method="post">
                @csrf

                <div class="form-errors small"></div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}" />
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control" value="{{old('author')}}" />
                </div>
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <input type="text" id="categories" name="categories" class="form-control"
                        value="{{old('categories')}}" />
                </div>
                <div class="form-group">
                    <label for="imageUrl">Image URL</label>
                    <input type="text" id="imageUrl" name="imageUrl" class="form-control" value="{{old('imageUrl')}}" />
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" class="form-control" rows="10">{{old('content')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-default">Submit</button>
                </div>
            </form>
        </section>
        @if (isset($blogPosts))
        <section class="inner-section">
            <h3 class="sub-header">
                Blog Posts
            </h3>
            <div class="row">
                @foreach($blogPosts as $post)
                <div class="col-sm-4">
                    <div class="card blog-post">
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="{{route('blog.edit', ['id' => $post->id])}}">
                                    {{$post->title}}
                                </a>
                            </h4>
                            <div class="small">
                                {{$post->author}}
                            </div>
                            <div class="small">
                                {{$post->created_at->format('m/d/Y')}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endif
    </div>
</div>
@endsection