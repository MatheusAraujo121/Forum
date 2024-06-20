<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>
    <link rel="stylesheet" href="{{ asset('forum.css') }}">
  </head>
  <body class="background-liop centered">
  <a class="lgn-3" href="{{url('/')}}">
      <button class="buttonas">
          <div class="buttonas-box">
              <span class="buttonas-elem">
              <svg viewBox="0 0 46 40" xmlns="http://www.w3.org/2000/svg">
                  <path
                  d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
                  ></path>
              </svg>
              </span>
              <span class="buttonas-elem">
              <svg viewBox="0 0 46 40">
                  <path
                  d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
                  ></path>
              </svg>
              </span>
          </div>
      </button>
    </a>
    <div class="form-container">
      
      <p class="titles">@yield('FormTitle')</p>
      @yield('content')
    </div>
    <script src="{{ asset('javascript.js') }}"></script>
  </body>
</html>
