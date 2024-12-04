<?php

use App\Models\User;
use App\Models\Tag;
?>
<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('forum.css') }}">
  </head>

  <body>
    <div class="sidebar close">
      <div>
        <button class="navbar-toggle">Toggle</button>
        <i class='bx bx-menu'></i>
      </div>
      <ul class="nav-links">
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fa-solid fa-bookmark"></i>
              <span class="link_name">Tópicos</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li>
              <a class="link_name" href="#">Tópicos</a>
            </li>
            @if(Auth::check())
              <li>
                <a href="{{ route('newTopic') }}">Criar novo tópico</a>
              </li>
            @endif
            <li>
              <a href="{{ route('viewTopic') }}">Visualizar tópicos</a>
            </li>
          </ul>
        </li>
        @if(Auth::check())
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class="fa-solid fa-comment"></i>
                <span class="link_name">Comentarios</span>
              </a>
              <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
              <li>
                <a href="{{ route('viewComment') }}">Visualizar comentários</a>
              </li>
            </ul>
          </li>
        @endif
        <li>
          <a href="#">
            <i class="fa-solid fa-arrow-trend-up"></i>
            <span class="link_name">Em alta</span>
          </a>
          <ul class="sub-menu blank">
            <li>
              <a class="link_name" href="#">Tópicos em alta</a>
            </li>
          </ul>
        </li>
        <li>
          <div class="iocn-link">
            <a href="#">
              <i class="fa-solid fa-tags"></i>
              <span class="link_name">Tags</span>
            </a>
            <i class='bx bxs-chevron-down arrow'></i>
          </div>
          <ul class="sub-menu">
            <li>
              <a class="link_name" href="#">Tags</a>
            </li>
            @if(Auth::check())
              <li>
                <a href="{{ route('newTag') }}">Criar nova tag</a>
              </li>
            @endif
            <li>
              <a href="{{ route('listTags') }}">Visualizar tags</a>
            </li>
          </ul>
        </li>
        @if(Auth::check())
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bxs-book-alt'></i>
                <span class="link_name">Categorias</span>
              </a>
              <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
              <li>
                <a class="link_name" href="#">Categorias</a>
              </li>
              <li>
                <a href="{{ route('categoryCreate') }}">Criar nova categoria</a>
              </li>
              <li>
                <a href="{{ route('listCategories') }}">Lista de categorias</a>
              </li>
            </ul>
          </li>
        @endif
        @if(Auth::check())
          @if(Auth::user()->id == 1)
            <li>
              <div class="iocn-link">
                <a href="{{ route('routeListAllUsers') }}">
                  <i class="fa-solid fa-users"></i>
                  <span class="link_name">Usuários</span>
                </a>
              </div>
            </li>
          @endif
        @endif
        @if(Auth::guest())
        @endif
        <li>
          <hr>
          @if(Auth::check())
            <div class="profile-details">
              <a href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}">
                <div class="profile-content">
                  <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="profileImg">
                </div>
                <div class="name-job">
                  <div class="profile_name">{{ Auth::user()->name }}</div>
                </div>
              </a>
            </div>
          @endif
          @if(Auth::guest())
            <a class="lgn" href="{{ route('login') }}">
                <div class="btn-login">Faça login</div>
            </a>
          @endif
        </li>
      </ul>
    </div>
    <nav class="navbar">
      <a href="{{ route('FirstPage') }}">
        <div class="logo-details">
          <img class="logo-img" src="{{ asset('img/logo.png') }}" />
        </div>
      </a>
      <ul class="navbar-links">
        <div class="home-content">
          <div class="menu">
          </div>
        </div>
      </ul>
      <div class="justify-content-center centered2">
        
      </div>
      @if(Auth::check())
        <div class="menu-profile">
          <div class="btn-group dropstart">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"> {{ Auth::user()->name }}</button>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start DropOPC">
              <li>
                <a class="profile-link" href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}">
                  <button class="dropdown-item" type="button">Meu perfil</button>
                </a>
              </li>
              <hr>
              <a class="profile-content" href="{{ route('logout') }}">
                <li>
                  <button class="btn-logout">
                    <div class="sign">
                      <svg class="logout-icon" viewBox="0 0 512 512">
                        <path
                          d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                        </path>
                      </svg>
                    </div>
                  </button>
                </li>
              </a>
            </ul>
          </div>
          <a class="profile-link" href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}">
            <div class="user-picture">
              <img src="{{ asset('storage/' . Auth::user()->photo) }}" alt="profileImg">
            </div>
          </a>
        </div>
      @endif
      @if(Auth::guest())
        <a class="lgn-2" href="{{ route('register') }}">
          <div class="btn-register">Faça cadastro</div>
        </a>
      @endif
    </nav>
    <div class="centered background">
      <div class="content">
        <h4 class="centered green">{{ session('message') }}</h4><br><br>
        @yield('content')
      </div>
    </div>
    <footer class="footer1 footer-border">
      <p>Gamer's Web &copy; 2024</p>
    </footer>
    
    <script>
      
      let arrow = document.querySelectorAll(".arrow");
      
      for (var i = 0; i < arrow.length; i++) {
        
        arrow[i].addEventListener("click", (e) => {
          
          let arrowParent = e.target.parentElement.parentElement;
          arrowParent.classList.toggle("showMenu");

        });
      }
      
      let sidebar = document.querySelector(".sidebar");
      
      let sidebarBtn = document.querySelector(".bx-menu");
      
      console.log(sidebarBtn);
      
      sidebarBtn.addEventListener("click", () => {
        
        sidebar.classList.toggle("close");

      });

      document.getElementById('search').addEventListener('input', function () {
        
        const searchQuery = this.value.toLowerCase();
        const items = document.querySelectorAll('#items-list li');

        items.forEach(function (item) {
          
          if (item.textContent.toLowerCase().includes(searchQuery)) {
            item.style.display = '';
          } else {
            item.style.display = 'none';
          }

        });
      });
      
      document.getElementById('search').addEventListener('input', function () {
        
        const searchQuery = this.value.toLowerCase();
        const topics = document.querySelectorAll('.topic-item');

        topics.forEach(function (topic) {

          const title = topic.getAttribute('data-title').toLowerCase();
          const category = topic.getAttribute('data-category').toLowerCase();
          const tags = topic.getAttribute('data-tags').toLowerCase();

          if (title.includes(searchQuery) || category.includes(searchQuery) || tags.includes(searchQuery)) {
            topic.style.display = '';
          } else {
            topic.style.display = 'none';
          }

        });
      });

      const searchBar = document.getElementById('search');
      const topicsList = document.getElementById('topics-list');
      const closeButton = document.getElementById('close-button');

      searchBar.addEventListener('focus', function () {

        topicsList.style.display = 'block';

      });

      closeButton.addEventListener('click', function () {

        topicsList.style.display = 'none';

      });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>