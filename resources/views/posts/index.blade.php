@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">Videogame Blog</h1>
            
            {{-- Print our data from DB --}}
            @forelse ($posts as $post)
                <article class="mb-4">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->description }}</p>
                    <h5>Updated: {{ $post->created_at->format('l d/m/Y') }}</h5>
                    <a href="{{ route('posts.show', $post->slug) }}">Read more</a>
                </article>
            @empty
                <p>No post found. Create a new <a href="{{ route('posts.create') }}">one.</a></p>
            @endforelse
        
       </div>
    </main>

@endsection