<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/"><IMG SRC="storage/uploads/images/logo.png" ALT="MIKAEL DOT COM" WIDTH=150 HEIGHT=50></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/blog">BLOG</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/about">ABOUT</a>
      </li>
      @if( auth()->check() )
      <li class="nav-item active">
        <a class="nav-link" href="/hire">HIRE MIKAEL</a>
        @endif
     <!-- </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         ACCOUNT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="">PROFILE</a>
          <a class="dropdown-item" href="/logout">LOG OUT</a>
        </div>
      </li>
      -->



    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
     <div class="col-lg-2"
     @if( auth()->check() )
     <li class="nav-item dropdown">
        <div class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="rounded-circle" src="storage/uploads/user/{{ auth()->user()->image }}" style="height:50px; width:50px;"/> ACCOUNT
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/profile">{{ auth()->user()->name }}</a>
          <a class="dropdown-item" href="/logout">LOG OUT</a>
        </div>
      </li>
            @else
            <li class="nav-item dropdown">
        <div class="dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          LOG IN
        </div>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/register">REGISTER</a>
          <a class="dropdown-item" href="/log">LOG IN</a>
        </div>
      </li>
            @endif
    <div>
  </div>
</nav>
