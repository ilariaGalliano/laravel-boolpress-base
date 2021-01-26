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

            <div class="action mt-4">
                <a class="btn" style="background: #058e24;" href="{{ route('posts.edit' , $post->slug ) }}">Edit</a>
              <form class="d-inline" action="{{ route('posts.destroy', $post->id ) }}" method="POST">
                @csrf
                @method('DELETE')

                <input class="btn btn-danger" type="submit" value="Delete">
              </form>
            </div>

       </div>
    </main>

@endsection