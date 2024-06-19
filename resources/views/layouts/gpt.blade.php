<?php 
  use App\Models\User;
?>
<!DOCTYPE html>
  <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style.css">
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
              <a href="{{ url('/login') }}">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Topicos</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Topicos em alta</a>
                </li>
              </ul>
            </li>
            <li>
              <div class="iocn-link">
                <a href="#">
                  <i class='bx bx-collection' ></i>
                  <span class="link_name">asd</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li>
                  <a class="link_name" href="#">asd</a>
                </li>
                <li>
                  <a href="#">HTML & CSS</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">PHP & MySQL</a>
                </li>
              </ul>
            </li>
            <li>
              <div class="iocn-link">
                <a href="#">
                  <i class='bx bx-book-alt' ></i>
                  <span class="link_name">Posts</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li>
                  <a class="link_name" href="#">Posts</a>
                </li>
                <li>
                  <a href="#">Web Design</a>
                </li>
                <li>
                  <a href="#">Login Form</a>
                </li>
                <li>
                  <a href="#">Card Design</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class='bx bx-pie-chart-alt-2' ></i>
                <span class="link_name">Analytics</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Analytics</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class='bx bx-line-chart' ></i>
                <span class="link_name">Chart</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Chart</a>
                </li>
              </ul>
            </li>
            <li>
              <div class="iocn-link">
                <a href="#">
                  <i class='bx bx-plug' ></i>
                  <span class="link_name">Plugins</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li>
                  <a class="link_name" href="#">Plugins</a>
                </li>
                <li>
                  <a href="#">UI Face</a>
                </li>
                <li>
                  <a href="#">Pigments</a>
                </li>
                <li>
                  <a href="#">Box Icons</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class='bx bx-compass' ></i>
                <span class="link_name">Explore</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">Explore</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class='bx bx-history'></i>
                <span class="link_name">History</span>
              </a>
              <ul class="sub-menu blank">
                <li>
                  <a class="link_name" href="#">History</a>
                </li>
              </ul>
            </li>
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
                <div class="profile-content">
                  <!--<img src="image/profile.jpg" alt="profileImg">-->
                </div>
                <div class="name-job">
                  <div class="profile_name">{{ Auth::user()->name }}</div>
                  <div class="job">Admin</div>
                </div>
                <a href="{{ url('/logout') }}"><i class='bx bx-log-out' ></i></a>
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
          <div class="logo-details">
            <img class="logo-img" src="{{ asset('img/logo.png') }}" />
          </div>
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
        </div>
        <div class="centered background">
          <div class="content">
            @yield('content')
          </div>
        </div>
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
