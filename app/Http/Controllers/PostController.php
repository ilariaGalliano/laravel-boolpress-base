<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at' , 'desc')->paginate(5);

        return view('posts.index' , compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // Validation  
        $request->validate($this->ruleValidation());

        //Slug
        $data['slug'] = Str::slug($data['title'], '-');

        // Decision img
        if(!empty($data['path_img'])){
            $data['path_img'] = Storage::disk('public')->put('img' , $data['path_img']);
        }

        // save to DB
        $newPost = new Post();
        $newPost->fill($data);

        $saved = $newPost->save();

        if($saved){
            return redirect()->route('posts.index');
        } else{
            return redirect()->route('homepage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //return $slug;
        $post = Post::where('slug', $slug)->first();

        return view('posts.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug' , $slug)->first();

        if(empty($post)){
            abort(404);
        }

        return view('posts.edit', compact('post'));
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
        // Data from DB
        $data = $request->all();

        // Validation 
        $request->validate($this->ruleValidation());

        // Get post to update
        $post = Post::find($id);

        // Get new slug
        $data['slug'] = Str::slug( $data['title'] , '-' );

        // If img is changed
        if(!empty($data['path_img'])){
            // Delete previus one
            if(!empty($post->path_img)){
                Storage::disk('public')->delete($post->path_img);
            }
        }
        
        // Set new img
        $data['path_img'] = Storage::disk('public')->put('img' , $data['path_img']);

        // Update DB
        $updated = $post->update($data);

        if($updated){
            return redirect()->route('posts.show' , $post->slug);
        } else{
            return redirect()->route('homepage');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        //method-1: public function destroy($id)
        public function destroy(Post $post)
    {
        // method-1: $post = Post::find($id);

        // method-2: 
        $title = $post->title;
        $deleted = $post->delete();

        if($deleted) {
            if(!empty($post->path_img)){
                Storage::disk('public')->delete($post->path_img);
            }
            return redirect()->route('posts.index')->with('post-deleted' , $title);
        } else{
            return redirect()->route('homepage');
        }
    }

    // Validation rules 
    private function ruleValidation(){
        return [
            'title' => 'required',
            'description' => 'required',
            'path_img' => 'image'
        ];
    }
}
