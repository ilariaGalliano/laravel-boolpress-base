<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    
    <div class="collapse navbar-collapse container" id="navbarText">

        <a class="navbar-brand" href="#">Videogames site©</a>
         
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Homepage <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('about') }}">About Us</a>
              </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('posts.index') }}">Videogame Blog</a>
            </li>
        </ul>

        <span class="navbar-text">
            <a class="nav-link" href="{{ route('posts.create') }}">Add New Post</a>
        </span>
    
    </div>
  </nav>