<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Shop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        button{
            font-size: 0.8rem;
            font-weight: 700;
            outline: none;
            border: none;
            background-color: #59C1BD;
            color: aliceblue;
            padding: 13px 30px;
            cursor: pointer;
            text-transform: uppercase;
            transition: 0.3s ease;
        }

        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit:cover;
            transition:0.3s all;
        }

        .product{
            cursor:pointer;
            margin-bottom: 2rem;
        }

        .product:hover img{
            opacity: 0.7;
        }

        .product .btn{
            /* background: #59C1BD; */
            transform: translateY(20px);
            opacity: 0;
            transition:0.3s all;
        }

        .product:hover .btn{
            transform: translateY(0);
            opacity: 0.7;
        }

    </style>

</head>

<body>

@include('part.navbar_main')

<section id="featured" class="my-5 pb-5">
    <div class="container text-center mt-5 py-5">
        <h3>Templates</h3>
        <hr class="mx-auto">
        <p>Please, take a look at these Cool Templates</p>
    </div>
    
    
    <div class="row mx-auto container fluid">
        @foreach($shopping as $item)
        <div class="product text-center col-lg-3 col-md-4 col-12">
            <img class="img-fluid mb-3" src="{{ asset('thumb/'.$item->picture) }}" alt="">
            <h5 class="p-name">{{ $item->template_name }}</h5>
            <h4 class="p-price">{{ "Rp".number_format($item->price, 0, '.', '.') }}</h4>
            
            <a class="btn btn-primary" href="{{ route('details', $item->id) }}">Buy now</a>
            <hr>

        </div>
        @endforeach
        
        <ul class="pagination mt-5">
            <li class="page-item disabled">
            <a class="page-link">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item" aria-current="page">
            <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </div>
    
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>

