<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset ('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav">
                <li>
                    <a class="nav-item nav-link" href="{{ route('homepage')}}">Home</a>
                </li>

                <li>
                    <a class="nav-item nav-link" href="{{ route('Comics.index')}}">Comics List</a>
                </li>

                <li>
                    <a class="nav-item nav-link" href="{{ route('Comics.create')}}">Aggiungi un nuvo comic</a>
                </li>
                
              </ul>
            </div>
        </nav>
    </header>
   
    <main>
        @yield('main_content')
    </main>
   
</body>
</html>