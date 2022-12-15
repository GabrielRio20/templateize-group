<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Template</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>

    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        body {
        font-family: 'Open Sans', sans-serif;
        overflow-x: hidden; }

        img {
        max-width: 100%; }

        .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
            margin-bottom: 20px; } }

        .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
            .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
            .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
            .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
        overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
                    animation-name: opacity;
            -webkit-animation-duration: .3s;
                    animation-duration: .3s; }

        .card {
        margin-top: 50px;
        background: rgb(255, 255, 255);
        padding: 3em;
        line-height: 1.5em; }

        @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

        .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }

        .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

        .checked, .price span {
        color: #000000; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

        .product-title {
        margin-top: 0; }

        .size {
        margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
        background: #3096FD;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
                transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #1d71c4;
            color: #fff; }

        .not-available {
        text-align: center;
        line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
        background: #ff9f1a; }

        .green {
        background: #85ad00; }

        .blue {
        background: #0076ad; }

        .tooltip-inner {
        padding: 1.3em; }

        @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
            transform: scale(1); } }
    </style>
</head>

<body>
    {{-- @if (\Session::has('pesan'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('pesan') !!}</li>
        </ul>
    </div>
@endif --}}
@include('part.navbar_main')
<div>

    <div class="mx-5 my-5">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" >
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('shopping') }}"> Templates</a></li>
              <li class="breadcrumb-item active" aria-current="page">Details</li>
            </ol>
          </nav>
    </div>

    
    <div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						{{-- <div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{ asset('thumb/'.$shopping->picture) }}" id="MainImg"/></div>
						  <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252" /></div>
						  <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="small-img"><a data-target="#pic-1" data-toggle="tab"><img ssrc="{{ asset('thumb/'.$shopping->picture) }}" /></a></li>
						  <li class="small-img"><a data-target="#pic-2" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li class="small-img"><a data-target="#pic-3" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li class="small-img"><a data-target="#pic-4" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						  <li class="small-img"><a data-target="#pic-5" data-toggle="tab"><img src="http://placekitten.com/200/126" /></a></li>
						</ul> --}}

                        {{-- <div class="col-lg-5 col-md-12 col-12"> --}}
                            <img class="tab-pane  pb-5" src="{{ asset('thumb/'.$shopping->picture) }}" id="MainImg" alt="" style="width:90%">
                            
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="small-img-col">
                                    <img src="{{ asset('thumb/'.$shopping->picture) }}" width="100%" class="small-img"  alt="">
                                </li>
            
                                <li class="small-img-col">
                                    <img src="{{ asset('thumb/'.$shopping->picture2) }}" width="100%" class="small-img" alt="">
                                </li>
            
                                <li class="small-img-col">
                                    <img src="{{ asset('thumb/'.$shopping->picture3) }}" width="100%" class="small-img" alt="">
                                </li>
            
                                <li class="small-img-col">
                                    <img src="{{ asset('thumb/'.$shopping->picture4) }}" width="100%" class="small-img" alt="">
                                </li>
                            </ul>
                        {{-- </div> --}}
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{ $shopping->template_name }}</h3>
						<div class="rating">
							{{-- <div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div> --}}
							{{-- <span class="review-no">41 reviews</span> --}}
						</div>
						<p class="product-description mb-5">{{ $shopping->description }}</p>
						<h4 class="price"><span>{{ "Rp ".number_format($shopping->price, 0, '.', '.') }}</h4>
						{{-- <p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p> --}}
						
						<div class="action">
                            <form method="get" action="{{ url('buy') }}/{{ $shopping->id }}" >
                                <button class="add-to-cart btn btn-default" type="submit">add to cart</button>
                                <button class="like btn btn-default" type="button" type="submit"><span class="fa fa-heart"></span></button>
                                @include('sweetalert::alert')
                            </form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script src="{{ asset('js/shop_details.js') }}"></script>
    
</body>

</html>        