<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('header')</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f8f7; /* verde claro */
    }

    header {
      background-color: #6fb98f; /* verde mais escuro */
      color: #fff;
      padding: 20px;
      text-align: center;
      animation: fadeInDown 1s ease;
    }

    nav {
      background-color: #8ac4af; /* verde médio */
      color: #fff;
      width: 200px;
      position: fixed;
      top: 60px;
      bottom: 0;
      left: 0;
      overflow-y: auto;
      animation: slideInLeft 1s ease;
    }

    nav ul {
      list-style: none;
      padding: 0;
    }

    nav ul li {
      padding: 10px;
    }

    nav ul li a {
      color: #fff;
      text-decoration: none;
    }

    .content {
      margin-left: 220px;
      padding: 20px;
      animation: slideInRight 1s ease;
    }

    footer {
      background-color: #6fb98f; /* verde mais escuro */
      color: #fff;
      padding: 10px;
      position: fixed;
      bottom: 0;
      width: 100%;
      text-align: center;
      animation: fadeInUp 1s ease;
    }

    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideInLeft {
      from {
        opacity: 0;
        transform: translateX(-100px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(100px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
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
