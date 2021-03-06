<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
        $tags = Tag::select(['name', 'id'])->get();
        $categories = $this->getCategories();
        $randomPosts = $this->getRandomPosts();
        $posts = Post::with(['user', 'category', 'tags'])->orderBy('id', 'desc')->take(6)->get();
        $recentPosts = $posts->skip(3);
        $posts->splice(3);

        return view('welcome', compact('posts', 'recentPosts', 'randomPosts', 'categories', 'tags'));
    }

    public function index(Request $request, $filter = null, $id = null)
    {
        $tags = Tag::select(['name', 'id'])->get();
        $categories = $this->getCategories();
        $recentPosts = $this->getRecentPosts();
        $active = null;

        $search = $request->input('search');
        if($filter != 'tag'){
            $baseQuery = Post::with(['user', 'category', 'tags']);
        }
        if($search == null){
            switch ($filter) {
                case 'category':
                    $posts = $baseQuery->where('category_id', $id)->orderBy('id', 'desc')->paginate(6);
                    break;
                case 'tag':
                    $active = $id;
                    $posts = Tag::with('posts')->where('id', $id)->get()[0]->posts()->with(['user', 'category', 'tags'])->orderBy('id', 'desc')->paginate(6);
                    break;
                default:
                    $posts = $baseQuery->orderBy('id', 'desc')->paginate(6);
                    break;
            }
        }else{
            $posts = $baseQuery->latest()->filter()->paginate(6);
        }
        return view('posts', compact('posts', 'recentPosts', 'categories', 'tags', 'filter', 'active'));
    }

    public function getRecentPosts($offset = 0)
    {
        return Post::orderBy('id', 'desc')->skip($offset)->limit(3)->get();
    }

    public function getCategories()
    {
        return Category::distinct('name')->get();
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
        $tags = Tag::get();
        $categories = $this->getCategories();
        $recentPosts = $this->getRecentPosts();

        // $post = Post::with(['user', 'category', 'comments'])->where('slug', $slug)->firstOrFail();
        $post = Post::with(['tags', 'user', 'category', 'comments.user'])->where('slug', $slug)->firstOrFail();
        // $comments = $post->comments()->with('user.name')->get();

        // $comments = Comment::with('post', 'user')->where('post_id', $post->id)->get();

        // dd($post);
        // $comments = $post->comments()->get();
        $posts = collect();
        $posts->push($post);

        // dd($posts);

        return view('post-details', compact('posts', 'recentPosts', 'categories', 'tags'));
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
