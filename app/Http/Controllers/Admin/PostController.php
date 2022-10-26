<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::limit(55)->get();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         //dd($request->file('image'));  //recupera il file tramite l'input con la classe uploadedFile, se è andato a buon fine
        //  $img_path = Storage::put('uploads', $request->file()['image']);

        //  dd($img_path);


        $params = $request->validate([
            'title' => 'required|max:255|min:4',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'tags' => 'exists:tags,id',
            'image' => 'nullable|image|max:2048'  //validiamo il parametro che arriva nella request
        ]);
        
        

        $params['slug'] = str_replace(' ', '-', $params['title']);

        $post = Post::create($params);

        if(array_key_exists('tags', $params)) {
            $tags = $params['tags'];
            // dd($tags);
            $post->tags()->sync($tags);
        }

        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $tags = Tag::orderBy('name', 'asc')->get();
        return view('admin.posts.edit', compact('categories', 'post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Post $post)
    {
        $params = $request->validate([
            'title' => 'required|max:255|min:3',
            'content' => 'required',
            'category_id' => 'nullable|exists:App\Category,id',
            'tags.*' => 'exists:tags,id'
        ]);
        if ($params['title'] !== $post->title) {
            $params['slug'] = Post::getUniqueSlugFromTitle($params['title']);
        }
        
        $post->update($params);
        if (array_key_exists('tags', $params)) {
            $post->tags()->sync($params['tags']);
        }else{
            $post->tags()->sync([]); //o sync con array vuoto
          //  $post->tags()->detach(); o detach con array vuoto
        }
        return redirect()->route('admin.posts.show', $post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index');
    }
}
