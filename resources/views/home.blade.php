@extends('layout/main')

@section('title')
Home
@endsection

@section('container')
  <h3>Proffesional Websites <br> Template for Any Project</h3><br>
@endsection

@section('search')
<form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Search</button>
</form>
@endsection

@section('category')
<h3 id="template">Category</h3>
<div class="row">

  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem">
      <img src="https://i.pinimg.com/originals/0d/67/72/0d677237854ed19dcfe69f0f9a4065ee.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/templates/company/main" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem">
      <img src="https://i.pinimg.com/originals/f9/99/5c/f9995c054004e3b1333359357cbc5981.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="/templates/company/main" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem">
      <img src="https://upload.wikimedia.org/wikipedia/en/d/da/Trevor_Philips.Grand_Theft_Auto_V.jpg" class="card-img-top" alt="..." href="/templates/company/main">
      <div class="card-body">
        <h5 class="card-title" style="color: black">Special title treatment</h5>
        <p class="card-text" style="color: black">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem">
      <img src="https://i.pinimg.com/originals/c1/56/3f/c1563ff65f5882183b13a5c470d0e3d2.png" class="card-img-top" alt="...">
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

      