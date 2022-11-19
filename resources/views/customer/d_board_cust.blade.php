<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/d_board.css">
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> --}}
  <title>Document</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Montserrat&display=swap" rel="stylesheet">
  

  <link rel="stylesheet" href="{{asset('css/d_board.css')}}">
</head>
<body>
@extends('layouts.app')
  <div class="container_dashboard">
    <div class="sidebar">
      <div class="sidebar-content">
          <div class="list-item">
            <a href="#">
              <img src="img/icons/DashIcon.png" alt="" class="icon">
              <span class="description">DASHBOARD</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/TempIcon.png" alt="" class="icon">
              <span class="description">TEMPLATES</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/EarnIcon.png" alt="" class="icon">
              <span class="description">EARNINGS</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/CommIcon.png" alt="" class="icon">
              <span class="description">COMMENT</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/FeedIcon.png" alt="" class="icon">
              <span class="description">FEEDBACK</span>
            </a>
          </div>
        </div>
    </div>
    <div class="main-content">
      @include('part.navbar_cust')
      <h1>Test</h1>

    </div>
  </div>
</body>
</html>