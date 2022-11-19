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
  <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('css/d_board.css')}}">
</head>
<body>
@extends('layouts.app')

@section('content')
  <div class="container_dashboard">
    <div class="sidebar">
      <div class="header">
        <div class="list-item">
          <a href="#">
          <img src="img/Templateize.png" width="200px">
          </a>
        </div>
      </div>
      <div class="sidebar-content">
          <div class="list-item">
            <a href="#">
              <img src="img/icons/DashIcon.png" alt="" class="icon">
              <span class="description">Dashboard</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/TempIcon.png" alt="" class="icon">
              <span class="description">Templates</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/EarnIcon.png" alt="" class="icon">
              <span class="description">Earnings</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/CommIcon.png" alt="" class="icon">
              <span class="description">Comment</span>
            </a>
          </div>
          <div class="list-item">
            <a href="#">
              <img src="img/icons/FeedIcon.png" alt="" class="icon">
              <span class="description">Feedback</span>
            </a>
          </div>
        </div>
    </div>
    <div class="main-content">

    </div>
  </div>
@endsection
</body>
</html>