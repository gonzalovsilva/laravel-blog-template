<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $categories = Category::getCategories();

        $randomPosts = $this->getRandomPosts();
        $posts = Post::with(['user', 'category'])->orderBy('id', 'desc')->take(6)->get();
        $recentPosts = $posts->skip(3);
        $posts->splice(3);

        // dd($posts);

        return view('welcome', compact('posts', 'recentPosts', 'randomPosts', 'categories'));
    }

    public function index($id = null)
    {
        $categories = Category::getCategories();

        $recentPosts = $this->getRecentPosts();

        if($id != null)
        {
            $posts = Post::with(['user', 'category'])->where('category_id', $id)->orderBy('id', 'desc')->paginate(6);
            return view('posts', compact('posts', 'recentPosts', 'categories'));
        }
        $posts = Post::with(['user', 'category'])->orderBy('id', 'desc')->paginate(6);

        return view('posts', compact('posts', 'recentPosts', 'categories'));
    }

    public function getRecentPosts($offset = 0)
    {
        return Post::orderBy('id', 'desc')->skip($offset)->limit(3)->get();
    }

    public function getRandomPosts($num = 6)
    {
        return Post::with(['user', 'category'])->inRandomOrder()->limit($num)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $categories = Category::getCategories();
        $recentPosts = $this->getRecentPosts();

        $post = Post::with(['user', 'category'])->where('slug', $slug)->firstOrFail();
        $posts = collect();
        $posts->push($post);

        return view('post-details', compact('posts', 'recentPosts', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
