<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $posts = Post::all();
        return view('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'image' => ['required', 'max:2028', 'image'],
            'title' => ['required', 'max:255' ],
            'category_id' => ['required', 'integer'],
            'description'=>['required']
        ]);

        $fileName = time().'_'.$request->image->getClientOriginalName();
        $filePath = $request->image->storeAs('uploads', $fileName);

        $post = new Post();
        $post->image = 'storage/'.$filePath;
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('posts.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();

        // return $post;

        return view('edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'title' => ['required', 'max:255' ],
            'category_id' => ['required', 'integer'],
            'description'=>['required']
        ]);

        $post = Post::findOrFail($id);

        if($request->hasFile('image')){

            $request->validate([

                'image' => ['required', 'max:2028', 'image']
            ]);

            $fileName = time().'_'.$request->image->getClientOriginalName();
            $filePath = $request->image->storeAs('uploads', $fileName);

            // File::delete(public_path($post->image));
            unlink(public_path($post->image));

            $post->image = 'storage/'.$filePath;
        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('posts.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
