<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/d_board.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
  <title>Document</title>
</head>
<body>
  @extends('layouts.app')

  @section('content')

  <div class="container_cust">

    <div class="sidebar_cust">
      <div class="header_cust">
          <div class="list-item">
            <a href="#">
              <img src="" alt="" class="icon">
              <span class="description-header">Templateize</span>
            </a>
          </div>
          <div class="illustration_cust">
            {{-- <img src="{{ asset('img/Templateize.png') }}" width="150px" alt=""> --}}
          </div>
      </div>
      <div class="main_cust">
        <div class="list-item">
          <a href="#">
            <img src="" alt="" class="icon">
            <span class="description"> Dashboard </span>
          </a>
        </div>
      </div>

    </div>

    

    <div class="main-content">
      <h1>halo</h1>
    </div>
    
  </div>

  

  
  
  <script src="js/d_board.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  @endsection
</body>
</html>