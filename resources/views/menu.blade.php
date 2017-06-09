<nav class="navbar navbar-fixed-top" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background-color: white;">
  <div class="container-fluid">
    <div class="navbar-header">

      <a class="navbar-brand" href="{{ url('/home') }}">Cupon Mania</a>
    
    </div>
    

    <ul class="nav navbar-nav">
      @if (Auth::check())
        <li><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        @if (Auth::user()->admin_role)
          <li><a href="{{ url(route('cupones.index')) }}">Cupones CRUD</a></li>
          <li><a href="{{ url(route('promociones.index')) }}">Promociones CRUD</a></li>
        @else
        @endif
      @else
      @endif
    </ul>
    

    <ul class="nav navbar-nav navbar-right">
      @if (Auth::guest())
          <li><a href="{{ route('login') }}" ><img src="imgs/login-user.png"/> Login</a></li>
          <li><a href="{{ route('register') }}"><img src="imgs/Register.png"/> Register</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <img src="imgs/login-user.png"/> {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          <img src="imgs/logout.png"/>
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endif
    </ul>

  </div>
</nav>
<div class="navbar"></div>