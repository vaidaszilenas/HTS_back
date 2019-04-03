<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <title></title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bellefair" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{asset ('/css/style2.css')}}">
</head>
<body>
  <header class="v-header">
    <div class="fullscreen-video-wrap">
        <video data-keepplaying playsinline loop="true" muted src="{{asset('video/intro.mp4')}}" autoplay poster="">

        </video>
      </div>
    <div class="header-overlay">
      </div>
    <div class="container header-content nav-position">
      <div class="row">
        <div class="col-md">
          <nav class="navbar navbar-expand-sm navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand float-left" href="{{'/'}}"><img src="{{asset ('images/img2.png')}}" class="logo" alt=""></a>

            <!-- Links -->
            <ul class="navbar-nav">

              <li class="nav-item">
                <a class="nav-link" href="https://zua.vdu.lt/">Naujienos</a>
              </li>


              <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Hidrotechnikos statiniai
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item change-color" href="#">Alytaus apkr.</a>
                  <a class="dropdown-item change-color" href="#">Kauno apkr.</a>
                  <a class="dropdown-item change-color" href="#">Klaipėdos apkr.</a>
                  <a class="dropdown-item change-color" href="#">Marijampolės apkr.</a>
                  <a class="dropdown-item change-color" href="#">Panevėžio apkr.</a>
                  <a class="dropdown-item change-color" href="#">Šiaulių apkr.</a>
                  <a class="dropdown-item change-color" href="#">Tauragės apkr.</a>
                  <a class="dropdown-item change-color" href="#">Telšių apkr.</a>
                  <a class="dropdown-item change-color" href="{{route('utena')}}">Utenos apkr.</a>
                  <a class="dropdown-item change-color" href="#">Vilniaus apkr.</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://zua.vdu.lt/apie/">Apie Mus</a>
              </li>


              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Prisijungti') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Registruotis') }}</a>
                      </li>
                  @endif
              @endguest

                @if (Auth::check())
                  @if (Auth::user()->isAdmin())

                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Administratorius - {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Atsijungti') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                @elseif (Auth::user())
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ucfirst (Auth::user()->name )}} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Atsijungti') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                @endif
              @endif
              <li class="nav-item">
                <a class="nav-link" href="https://zua.vdu.lt/kontaktai/">Kontaktai</a>
              </li>

            </ul>
          </nav>
        </div>
      </div>
    </div>
      <h1 class="h1-center">Lietuvos hidrotechnikos statinių informacinis tinklapis</h1>
  </header>
  <main>
      <div class="maps">
        <iframe src="https://www.google.com/maps/d/embed?mid=1zOCAAkM_46qYRqA9cSS4cXf3fkUY8CBp" width="100%" height="480"></iframe>
      </div>
  </main>

  <footer>
  <section class="section-box">
    <div class="container">
      <div class="row">
        <div class="col-md  text-center">
          <div class="contacts">
            <i class="far fa-address-card"></i><span> Vytauto Didžiojo universitetas, Kaunas</span>
          </div>
          <div class="contacts">
            <i class="fas fa-phone-volume"></i><span> +370 600 44 555</span><br>
          </div>
          <div class="contacts">
            <i class="far fa-envelope"></i><span> universitetas@vdu.lt</span>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
          <div class="icons">
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>

        </div>
      </div>
    </div>
  </section>

  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript">

  </script>
</body>
</html>
