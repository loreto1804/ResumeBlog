@extends('layouts.app')
@section('content')
<!-- Container -->
<div class="content-wrap">
    <div id="blog" class="inner-content">
        @if (isset($blogPost))
        <section id="page-title" class="inner-section ui-menu-yellow">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    Edit Blog Post
                </h2>
            </div>
        </section>
        <section class="inner-section">
            <form id="editBlog" action="{{route('blog.update')}}" method="post">
                @csrf

                <div class="form-errors small"></div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{old('title') ?? $blogPost->title}}" />
                </div>
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" id="author" name="author" class="form-control"
                        value="{{old('author') ?? $blogPost->author}}" />
                </div>
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <input type="text" id="categories" name="categories" class="form-control"
                        value="{{old('categories') ?? $blogPost->categories}}" />
                </div>
                <div class="form-group">
                    <label for="imageUrl">Image URL</label>
                    <input type="text" id="imageUrl" name="imageUrl" class="form-control"
                        value="{{old('imageUrl') ?? $blogPost->imageUrl}}" />
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea id="content" name="content" class="form-control"
                        rows="10">{{old('content') ?? $blogPost->content}}</textarea>
                </div>
                <div class="form-group">
                    <label for="active">Active</label>
                    <div>
                        <label class="switch">
                            <input type="checkbox" id="active" name="active" {{$blogPost->active ? 'checked=checked' : ''}} />
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-default">
                        Save
                    </button>
                </div>
                <div class="form-group">
                    <br />
                    <a href="{{route('blog.list')}}" class="btn btn-link">
                        &lsaquo;
                        Back
                    </a>
                </div>

                <input type="hidden" id="id" name="id" value="{{$blogPost->id}}" />
            </form>
        </section>
        @else
        <section class="inner-section ui-menu-yellow">
            <div class="container-fluid nopadding">
                <h2 class="font-accident-two-bold" data-animation-origin="right" data-animation-duration="400"
                    data-animation-delay="100" data-animation-distance="50px">
                    Blog Post Not Found
                </h2>
            </div>
        </section>
        @endif
    </div>
</div>
@endsection