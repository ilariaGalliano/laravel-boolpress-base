@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">Edit post {{ $post->title }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.update' , $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $post->title ) }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description">{{ old( 'description', $post->description ) }}</textarea>
                </div>

                <div class="form-group">
                    <label for="path_img">Post image</label>
                    @isset($post->path_img)
                        <div>
                            <img width="100" src="{{ asset('storage/' . $post->path_img) }}" alt="{{ $post->title }}">
                        </div>
                        <h6>Change image</h6>
                    @endisset
                    <input class="form-group" type="file" name="path_img" id="path_img" accept="image/*">
                </div>

                <div class="form-group">
                    <input class="btn btn-secondary" type="submit" value="Update">
                </div>
            
            </form>
        
       </div>
    </main>

@endsection