@extends('layout/main')

@section('title')
Templateize - Template for any Projects
@endsection

@section('container')
  <h3>Proffesional Websites <br> Template for Any Project</h3><br>
@endsection

@section('search')
<form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-dark" type="submit">Search</button>
</form>
@endsection

@section('category')
<h3 id="template">Templates</h3>
<div class="row">

  {{-- <div class="col-sm-3 d-flex align-items-stretch"> --}}
  <div class="col-sm-3">
    <div class="card" style="width: 18rem">
      <img src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/templates/company/main" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card" style="width: 18rem">
      <img src="https://bootstrapmade.com/content/templatefiles/Impact/Impact-bootstrap-website-template-md.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/templates/company/main" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card" style="width: 18rem">
      <img src="https://bootstrapmade.com/content/templatefiles/Yummy/Yummy-bootstrap-website-template-md.png" class="card-img-top" alt="..." href="/templates/company/main">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="card" style="width: 18rem">
      <img src="https://www.flexgigzz.com/wp-content/uploads/2021/04/bexer-bootstrap-business-template.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

</div>
@endsection

@section('footer')

@endsection

      