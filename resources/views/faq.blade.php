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

        <div class="secondary-container">
            <div class="question">
                <h3>Q: What is templateize</h3>
            </div>
            
            <div class="answer">
                <p>A: The personal landing page template for professionals that we plan to make can be a page that provides portfolio creation services with templates that have been provided for personal needs. This website can also provide a place for creators who want to donate or trade their portfolio template works. We give the name for this website, namely Templateize which is a combination of the words template and appetite, the hope of Templateize is to be able to provide portfolio templates that suit the tastes of its users.</p>
            </div>
        </div>

        <div class="secondary-container">
            <div class="question">
                <h3>Q: I want to buy a template, how do I do it?</h3>
            </div>
            <div class="answer">
                <p>A: The easiest and fastest way is to use the Shopping Cart facility available on this site. Please select the desired template then click add to cart, it will enter the cart page and you can make a purchase.</p>
            </div>
        </div>

        <div class="secondary-container">
            <div class="question">
                <h3>Q: Is it permissible to order only 1 template?</h3>
            </div>
            <div class="answer">
                <p>A: Of course you can. There is no minimum order on our site. We will also serve one template order.</p>
            </div>
        </div>

        <div class="secondary-container">
            <div class="question">
                <h3>Q: I don't like the template, can I return it?</h3>
            </div>
            <div class="answer">
                <p>A: Items that have been purchased cannot be returned. Please customers to be able to research before buying.</p>
            </div>
        </div>

        <div class="secondary-container">
            <div class="question">
                <h3>Q: How do I become a contributor?</h3>
            </div>
            <div class="answer">
                <p>A: It's easy, you only need to register as a contributor on the register page. Contributors can upload templates to sell</p>
            </div>
        </div>
    </div>
    <br>
<section>@include ("footer.footer")</section>
@endsection

<script src="{{ asset('js/faq.js') }}"></script>

</body>
</html>