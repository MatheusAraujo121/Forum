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
      <link rel="stylesheet" href="{{ asset('forum.css') }}">
    </head>
    <body>
      <div class="sidebar close">
        <div>
          <button class="navbar-toggle">Toggle</button>
          <i class='bx bx-menu' ></i>
        </div>
        <ul class="nav-links">
            <li>
              <div class="iocn-link">
                <a href="#">
                  <i class="fa-solid fa-bookmark"></i>
                  <span class="link_name">Tópicos</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li>
                  <a class="link_name" href="#">Tópicos</a>
                </li>
                @if(Auth::check())
                  <li>
                    <a href="{{ url('/newtopic') }}">Criar novo tópico</a>
                  </li>
                  <li>
                    <a href="{{ url('/edittopic') }}">Editar tópico</a>
                  </li>
                @endif
                <li>
                  <a href="{{ url('/viewtopic') }}">Visualizar tópicos</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <!--<i class='bx bx-line-chart' ></i>-->
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
                  <!--<i class='bx bx-collection' ></i>-->
                  <i class="fa-solid fa-tags"></i>
                  <span class="link_name">Tags</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li>
                  <a class="link_name" href="#">Tags</a>
                </li>
                @if(Auth::check())
                  <li>
                    <a href="{{ url('/newtag') }}">Criar nova tag</a>
                  </li>
                  <!--<li>
                        <a href="{{ url('/edittag') }}">Editar tag</a>
                      </li> -->
                @endif
                <li>
                  <a href="{{ url('/Tags') }}">Visualizar tags</a>
                </li>
              </ul>
            </li>
            @if(Auth::check())
              <li>
                <div class="iocn-link">
                  <a href="#">
                    <i class='bx bxs-book-alt' ></i>
                    <span class="link_name">Categorias</span>
                  </a>
                  <i class='bx bxs-chevron-down arrow' ></i>
                </div>
                <ul class="sub-menu">
                  <li>
                    <a class="link_name" href="#">Categorias</a>
                  </li>
                  <li>
                    <a href="{{ url('/Categories/CreateCategory') }}">Criar nova categoria</a>
                  </li>
                  <!--<li>
                    <a href="{{ url('/editpost') }}">Editar postagem</a>
                  </li>-->
                  <li>
                    <a href="{{ url('/Categories') }}">Lista de categorias</a>
                  </li>
                </ul>
              </li>
            @endif
            <!--<li>
              <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="link_name">Analytics</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Analytics</a>
                </li>
              </ul>
            </li>-->
            @if(Auth::check())
              @if(Auth::user()->id == 1)
              <li>
                <div class="iocn-link">
                  <a href="{{ url('/users') }}">
                    <!--<i class='bx bx-plug' ></i>-->
                    <i class="fa-solid fa-users"></i>
                    <span class="link_name">Usuários</span>
                  </a>
                </div>
              </li>
              @endif
            @endif
            @if(Auth::guest())
            @endif
            <!--<li>
              <a href="#">
                <i class='bx bx-compass' ></i>
                <span class="link_name">Explore</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Explore</a>
                </li>
              </ul>
            </li>-->
            <!--<li>
              <a href="#">
                <i class='bx bx-history'></i>
                <span class="link_name">History</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">History</a>
                </li>
              </ul>
            </li>-->
            @if(Auth::check())
              @if(Auth::user()->id == 1)
                <li>
                  <a href="{{ url('/report') }}">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                    <span class="link_name">Denúncias</span>
                  </a>
                  <ul class="sub-menu blank">
                    <li>
                      <a class="link_name" href="#">Denúncias</a>
                    </li>
                  </ul>
                </li>
              @endif
            @endif
            @if(Auth::guest())
            @endif
            <li>
              <a href="#">
                <i class='bx bx-cog' ></i>
                <span class="link_name">Configurações</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Configurações</a>
                </li>
              </ul>
            </li>
            <li>
              <hr>
            @if(Auth::check())
              <div class="profile-details">
                <a href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}">
                  <div class="profile-content">
                    <!--<img src="image/profile.jpg" alt="profileImg">-->
                    <i class="fa-solid fa-user"></i>
                  </div>
                </a>
                <div class="name-job">
                  <div class="profile_name">{{ Auth::user()->name }}</div>
                </div>
                <a href="{{ url('/logout') }}">
                  <button class="Btn">
                    <div class="sign">
                      <svg viewBox="0 0 512 512">
                        <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                      </svg>
                    </div>
                    <div class="text">
                      Logout
                    </div>
                  </button>
                </a>
              </div>
            @endif
            @if(Auth::guest())
            <a class="lgn"href="{{ url('/login') }}">
              <div class="btn-login">
                Faça login
              </div>
            </a>
            @endif
          </li>
        </ul>
      </div>
      <section class="home-section">
        <div class="navbar">
          <a href="{{ url('/') }}">
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
            <form class="formv">
              <label for="search">
                  <input class="inputv" type="text" required="" placeholder="Pesquisar..." id="search">
                  <div class="fancy-bg"></div>
                  <div class="search">
                      <svg viewBox="0 0 24 24" aria-hidden="true" class="r-14j79pv r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-4wgw6l r-f727ji r-bnwqim r-1plcrui r-lrvibr">
                          <g>
                              <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
                          </g>
                      </svg>
                  </div>
                  <button class="close-btn" type="reset">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                      </svg>
                  </button>
              </label>
            </form>
          </div>
          <div>
            <i class='bx bxs-bell'></i>
          </div>
          @if(Auth::check())
          <div class="menu-profile">
            <a class="menu-profile" href="{{ route('routeListUserByIDS', [Auth::user()->id]) }}">
              <!--<img src="image/profile.jpg" alt="profileImg">-->
              <i class="fa-solid fa-user"></i>
            </a>
            <!--<i class='bx bxs-chevron-down arrow' ></i>-->
          </div>
          @endif
          @if(Auth::guest())
            <a class="lgn-2" href="{{ url('/register') }}">
              <div class="btn-register">
                Faça cadastro
              </div>
            </a>
          @endif
        </div>
        <div class="centered background">
        
          <div class="content">
          <h4 class="centered green">{{ session('message') }}</h4><br><br>
            @yield('content')
          </div>
        </div>
        <footer class="footer1 footer-border">
            <p>Gamer's Web &copy; 2024</p>
        </footer>
      </section>
      <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;
        arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
          sidebar.classList.toggle("close");
        });
      </script>
    </body>
  </html>
