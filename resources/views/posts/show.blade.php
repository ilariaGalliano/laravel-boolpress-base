@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">{{ $post->title }}</h1>


            @if (!empty($post->path_img))
                <img width="400" src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
                @else 
                <img width="300" src="{{ asset('image/no-available.png') }}" alt="{{ $post->title }}">
            @endif

            <div class="action mt-3 mb-3">
                {{ $post->description }}
            </div>

            <div>Last updated: {{ $post->updated_at->diffForHumans() }}</div>

            <div class="action mb-3 mb-3">
                <a class="mt-3 btn" style="background: #058e24;" href="{{ route('posts.edit' , $post->slug ) }}">Edit</a>
            </div>
        
       </div>
    </main>

@endsection