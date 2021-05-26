<?php

namespace App\Http\Controllers;

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
        $randomPosts = $this->getRandomPosts();
        $posts = Post::with('user')->orderBy('id', 'desc')->take(6)->get();
        $recentPosts = $posts->skip(3);
        $posts->splice(3);

        // dd($posts);

        return view('welcome', compact('posts', 'recentPosts', 'randomPosts'));
    }

    public function index($home = false)
    {

        $recentPosts = $this->getRecentPosts();
        $posts = Post::with('user')->orderBy('id', 'desc')->paginate(6);

        return view('posts', compact('posts', 'recentPosts'));
    }

    public function getRecentPosts($offset = 0)
    {
        return Post::orderBy('id', 'desc')->skip($offset)->limit(3)->get();
    }

    public function getRandomPosts($num = 6)
    {
        return Post::with('user')->inRandomOrder()->limit($num)->get();
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
        $recentPosts = $this->getRecentPosts();

        $post = Post::where('slug', $slug)->firstOrFail();
        $posts = collect();
        $posts->push($post);

        return view('post-details', compact('posts', 'recentPosts'));
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
