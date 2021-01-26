@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container mb-5 text-center">
        <h1 class="mt-5 mb-3">Oh no, Something has gone wrong :(</h1>
        <h2>404</h2>
        <p class="mt-4">Please Click <a href="{{ route('homepage') }}">HERE</a> to return to the Homepage.</p>

       </div>
        
    </main>

@endsection
