<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Question</title>
    <link rel="stylesheet" href="{{asset('css/faq.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="header">
            <h1>Frequently Asked Question</h1>
        </div>

        <div class="line"></div>

        <div class="accordion-flush" id="accordionFlushExample">
            <div class="accordion-item" id="question">
                <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" id="header-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Q: What is templateize
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <br>
                        A: The personal landing page template for professionals that we plan to make can be a page that provides portfolio creation services with templates that have been provided for personal needs. This website can also provide a place for creators who want to donate or trade their portfolio template works. We give the name for this website, namely Templateize which is a combination of the words template and appetite, the hope of Templateize is to be able to provide portfolio templates that suit the tastes of its users.
                    </div>
                </div>
            </div>
            <div class="accordion-item" id="question">
                <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" id="header-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Q: I want to buy a template, how do I do it?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <br>
                        A: The easiest and fastest way is to use the Shopping Cart facility available on this site. Please select the desired template then click add to cart, it will enter the cart page and you can make a purchase.
                    </div>
                </div>
            </div>
            <div class="accordion-item" id="question">
                <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" id="header-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Q: Is it permissible to order only 1 template?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <br>
                        A: Of course you can. There is no minimum order on our site. We will also serve one template order.
                    </div>
                </div>
            </div>
            <div class="accordion-item" id="question">
                <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" id="header-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Q: I don't like the template, can I return it?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <br>
                        A: Items that have been purchased cannot be returned. Please customers to be able to research before buying.
                    </div>
                </div>
            </div>
            <div class="accordion-item" id="question">
                <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" id="header-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Q: How do I become a contributor?
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <br>
                        A: It's easy, you only need to register as a contributor on the register page. Contributors can upload templates to sell
                    </div>
                </div>
            </div>
        </div>
    </div>
<section>@include ("footer.footer")</section>
@endsection

<script src="{{ asset('js/faq.js') }}"></script>

</body>
</html>