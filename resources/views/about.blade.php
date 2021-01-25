@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5 mb-5">About us:</h1>
            
            <p>
                I love videogames and games in general! This page has been created to share my passion with you.
                My goal is to share my videogames to help other people find new ones. You and I'll review old and new videogames releases.
                <br>
                <h5 class="mt-3">So, what are you wainting for? Click <a style="color: #058e24;" href="{{ route('posts.create') }}">Here</a> to add new posts and blog with us !</h5>
            </p> 

       </div>
    </main>

@endsection