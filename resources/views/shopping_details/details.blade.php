<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Template</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <!-- <link rel="stylesheet" href="style.css"> -->

    <style>
        .small-img-group{
            display: flex;
            justify-content: space-between;
        }

        .small-img-col{
            flex-basis:24%;
            cursor: pointer;
        }

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

        .product .buy-btn{
            background: #59C1BD;
            transform: translateY(20px);
            opacity: 0;
            transition:0.3s all;
        }

        .product:hover .buy-btn{
            transform: translateY(0);
            opacity: 1;
        }
    </style>
</head>

<body>
@include('part.navbar_main')

    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-5" src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.png" id="MainImg" alt="" >
                
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="https://bootstrapmade.com/content/templatefiles/Arsha/Arsha-bootstrap-website-template-md.png" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-4.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-4.jpg" width="100%" class="small-img" alt="">
                    </div>

                    <div class="small-img-col">
                        <img src="https://broonet.com/wp-content/uploads/2020/03/mewarnai-gambar-kartun-4.jpg" width="100%" class="small-img" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12">

                {{-- @foreach($shopping as $item) --}}

                <h6>Home/ Template</h6>

                <h3 class="py-4">{{ $shopping->template_name }}</h3>
                <h2>$69</h2>
                <button class="buy-btn">Beli Template</button>
                <h4 class="mt-5 mb-5">detail</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Mauris semper et lorem eget finibus. Integer non tempor nisl, 
                    nec ultricies orci. Aliquam erat volutpat. Morbi mollis diam eget 
                    est molestie mollis. Pellentesque tincidunt felis non enim ullamcorper 
                    placerat. Donec ut libero at quam molestie sollicitudin eu ut diam. 
                    Proin in sollicitudin lorem. Sed dolor sem, volutpat nec bibendum 
                    id, efficitur in nulla.</span>
            </div>

        <div class="row mx-auto container fluid mt-5 mb-5">

            <div class="product text-center col-lg-3 col-md-4 col-12 ">
                <img class="img-fluid mb-3" src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2019/10/WhatsApp-Image-2019-10-29-at-19.52.24-1024x682.jpeg" alt="">
                <h5 class="p-name">1Template</h5>
                <h4 class="p-price">$1</h4>
                <button class="buy-btn" onClick="location.href='/detail2'">Buy now</button>
                <hr>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2019/10/WhatsApp-Image-2019-10-29-at-19.52.24-1024x682.jpeg" alt="">
                <h5 class="p-name">2Template</h5>
                <h4 class="p-price">$1</h4>
                <button class="buy-btn" onClick="location.href='/detail3'">Buy now</button>
                <hr>
            </div>
            
            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2019/10/WhatsApp-Image-2019-10-29-at-19.52.24-1024x682.jpeg" alt="">
                <h5 class="p-name">3Template</h5>
                <h4 class="p-price">$1</h4>
                <button class="buy-btn" onClick="location.href='/detail4'">Buy now</button>
                <hr>
            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">
                <img class="img-fluid mb-3" src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2019/10/WhatsApp-Image-2019-10-29-at-19.52.24-1024x682.jpeg" alt="">
                <h5 class="p-name">4Template</h5>
                <h4 class="p-price">$1</h4>
                <button class="buy-btn" onClick="location.href='/detail5'">Buy now</button>
                <hr>
            </div>
        </div>

        {{-- @endforeach --}}

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="{{ asset('js/shop_details.js') }}"></script>

    
</body>

</html>        