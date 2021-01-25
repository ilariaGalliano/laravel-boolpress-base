@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">Create new post about videogames</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" value="{{ old('description') }}"></textarea>
                </div>

                <div class="form-group">
                    <label for="path_img">Post image</label>
                    <input class="form-group" type="file" name="path_img" id="path_img" accept="image/*">
                </div>

                <div class="form-group">
                    <input class="btn btn-secondary" type="submit" value="Create">
                </div>
            
            </form>
        
       </div>
    </main>

@endsection