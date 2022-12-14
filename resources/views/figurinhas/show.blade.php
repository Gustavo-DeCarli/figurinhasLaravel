@extends('base.index')

@section('container')
<nav class="navbar bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Álbum de Figurinhas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Álbum de Figurinhas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
        
        </ul>
      
      </div>
    </div>
  </div>
</nav>
    <div>
       <div class="pacotes"></div>
       <!-- https://laravel-livewire.com/screencasts/s8-dragging-list -->
       <p>Pacotes</p>
    </div>
    @for($i=0;$i<=5;$i++)
    <div class="grupo">
        <div class='local'></div>
        <div class='local'></div>
        <div class='local'></div>
        <div class='local'></div>
        <div class='local'></div>
    </div>
    @endfor
@endsection