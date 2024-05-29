<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('header')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <h1>@yield('header')</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
      <li><a href="#">Menu 4</a></li>
    </ul>
  </nav>
  
  <div class="content">
    @yield('content')
  </div>
  
  <footer>
    <p>Rodapé - © 2024</p>
  </footer>
</body>
</html>
