<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <style>
      body,html {
          background-image: url('{{URL::asset('bg.jpg')}}');
          background-size: cover;
          opacity: 0.9;
          width: 100%;
          height: 100%;
          padding: 20px;
      }
      .bg-purple {
    background-color: #520e51;
}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-purple rounded">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Lotto</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('ranking')}}">Ranking</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Community
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Discord</a></li>
                </ul>
                
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('ranking')}}">About and Rules</a>
              </li>
            </ul>
            
            <form class="d-flex">
                <h6 style="color:white;">Olá Guilherme</h6>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div class="row" style="background-color:white">
           <div class="col-12 col-md-12 col-xs-12 col-sm-12  col-xl-3">
              <div class="card m-2" style="background-color: #f2f2f2;">
                 <div class="card-body">
                    <h3 class="text-center">User Menu</h3>
                    <a class="btn btn-lg bg-purple text-white btn-block w-100" href="{{route('login')}}">Login</a>
                 </div>
              </div>
              <div class="card m-2" style="background-color: #f2f2f2;">
                 <div class="card-body" id="sidebar">
                    <h3 class="text-center">Detalhes do Servidor</h3>
                    <hr>
                    <p>Usuários: 34</p>
                    <p>Mensagens do dia: 34</p>
                    <p>Mensagens do dia: 34</p>
                 </div>
              </div>
           </div>
           <div class="col-12 col-sm-12 col-md-12 col-xl-9 ">
             
             @yield('content')
             
           </div>
        </div>
     </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>