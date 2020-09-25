<?php

namespace App\Http\Controllers;

use Exception;
use App\Blog;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    // [HttpGet, route('blog.index')]
    public function index()
    {
        try {
            $blogs = Blog::all();

            return view('blog.index', compact('blogs'));
        } catch (QueryException $qex) {
            //
        } catch (Exception $ex) {
            //
        }

        return view('blog.index');
    }

    // [HttpGet, route('blog.list')]
    public function list()
    {
        try {
            $blogs = Blog::all();

            return view('blog.list', compact('blogs'));
        } catch (QueryException $qex) {
            //
        } catch (Exception $ex) {
            //
        }

        return view('blog.list');
    }

    // [HttpGet, route('blog.view')]
    public function viewBlogPost($id) 
    {
        try {
            $blog = Blog::find($id);

            return view('blog.view', compact('blog'));
        } catch (QueryException $qex) {
            //
        } catch (Exception $ex) {
            //
        }

        return view('blog.view');
    }

    // [HttpGet, route('blog.new')]
    public function newBlogPost()
    {
        try {
            $blogPosts = Blog::all();

            return view('blog.new', compact('blogPosts'));
        } catch (QueryException $qex) {
            //
        } catch (Exception $ex) {
            //
        }

        return view('blog.new');
    }

    // [HttpGet, route('blog.edit')]
    public function editBlogPost($id)
    {
        try {
            $blogPost = Blog::find($id);

            if (isset($blogPost)) {
                return view('blog.edit', compact('blogPost'));
            }
        } catch (QueryException $qex) {
            //
        } catch (Exception $ex) {
            //
        }

        return view('blog.edit');
    }

    // [HttpPost, route('blog.post')]
    public function createBlogPost(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|max:128',
                'author' => 'required|max:64',
                'categories' => 'required|max:256',
                'imageUrl' => 'required|max:128',
                'content' => 'required'
            ]);

            if ($validator->fails()) {
                return ['Error' => 'A required field is missing.'];
            }

            Blog::create([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'categories' => $request->input('categories'),
                'imageUrl' => $request->input('imageUrl'),
                'content' => $request->input('content')
            ]);

            return ['Success' => 'Blog post has been saved to the db.'];
        } catch (QueryException $qex) {
            return ['Error' => $qex->getMessage()];
        } catch (Exception $ex) {
            return ['Error' => $ex->getMessage()];
        }

        return ['Error' => 'The blog post could not be saved to the db.'];
    }

    // [HttpPost, route('blog.update')]
    public function updateBlogPost(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required|numeric',
                'title' => 'required|max:128',
                'author' => 'required|max:64',
                'categories' => 'required|max:256',
                'imageUrl' => 'required|max:128',
                'content' => 'required'
            ]);

            if ($validator->fails()) {
                return ['Error' => 'A required field is missing.'];
            }

            $blog = Blog::find($request->input('id'));
            $blog->title = $request->input('title');
            $blog->author = $request->input('author');
            $blog->categories = $request->input('categories');
            $blog->imageUrl = $request->input('imageUrl');
            $blog->content = $request->input('content');
            $blog->active = $request->has('active');
            $blog->save();

            return ['Success' => 'Blog post has been saved to the db.'];
        } catch (QueryException $qex) {
            return ['Error' => $qex->getMessage()];
        } catch (Exception $ex) {
            return ['Error' => $ex->getMessage()];
        }

        return ['Error' => 'The blog post could not be saved to the db.'];
    }
}
