<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
        <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet'>

        <title>About Us</title>
        <link rel="stylesheet" type="text/css" href="">
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
                font-family: 'Dosis', sans-serif;
                outline: none;
            }
            .about{
                height: 100vh;
                width: 100%;
                background: white;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .about .main img{
                width: 580px;
                max-width: 100%;
                height: auto;
                padding: 0 10px;
            }
            .all-text{
                width: 600px;
                max-width: 100%;
                padding: 0 10px;
            }
            .main{
                width: 1290px;
                max-width: 95%;
                margin: 0 auto;
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-around;
            }
            .all-text h4{
                font-size: 18px;
                color: #777777;
                letter-spacing: 1px;
                font-weight: 400;
                margin-bottom: 10px;
            }
            .all-text h1{
                font-size: 65px;
                color: #111111;
                font-weight: 700;
                margin-bottom: 20px;
            }
            .all-text p{
                font-size: 16px;
                color: #777777;
                line-height: 30px;
                margin-bottom: 35px;
            }
            .btn button{
                border-radius:10px;
                background: white;
                padding: 20px 32px;
                font-size: 16px;
                font-weight: bold;
                color: #111111;
                border: none;
                outline: none;
                box-shadow: 0px 5px 25px 0px rgb(0 0 0 / 15%);
                /* margin: 20px; */
            }
            .btn button:hover{
                background-color: #1d44f9;
                color: white;
                transition: .3s;
                cursor: pointer;
            }
            @media screen and (max-width: 1250px){
                .about{
                    width: 100%;
                    height: auto;
                    padding: 60px 0;
                }
                .all-text{
                    text-align: center;
                    margin-top: 40px;
                }
            }
            @media  and (max-width: 650px) {
                .about .main img{
                    margin-bottom: 35px;
                }
                .all-text h1{
                    font-size: 45px;
                    margin-bottom: 20px;
                }
            }

            @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');
            @import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
            html{
                scroll-behavior: smooth;
            }
            
            body{
                margin:0;
                font-family: 'Dosis', sans-serif;
            }
            *{
                box-sizing: border-box;
            }

            .team-section{
                background-color:#1d44f9;
                min-height: 100vh;
                padding:70px 15px 30px;
            }

            .container{
                max-width: 1170px;
                margin:auto;
            }

            .row{
                display: flex;
                flex-wrap: wrap;
            }

            .team-section .section-title{
                flex-basis: 100%;
                max-width: 100%;
                margin-bottom: 70px;
            }

            .team-section .section-title h1{
                font-size: 40px;
                text-align: center;
                margin:0;
                color: #ffffff;
                font-weight: 700;
            }

            .team-section .section-title p{
                font-size:16px;
                text-align: center;
                margin:15px 0 0;
                color:#ffffff;
            }
            .team-section .team-items{
                
                flex-basis: 100%;
                max-width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
            }
            .team-section .team-items .item{
            flex-basis: calc(25% - 30px);
            max-width: calc(25% - 30px);
            transition: all .5s ease;
            margin-bottom: 40px;
            }
            .team-section .team-items .item img{
                display: block;
                width: 100%;
                border-radius: 8px;
            }

            .team-section .team-items .item .inner{
                position: relative;
                z-index: 11;
                padding:0 15px;
            }
            .team-section .team-items .item .inner .info{
                background-color:#079bbc;
                text-align: center;
                padding: 20px 15px;
                border-radius:8px;
                transition: all .5s ease;
                margin-top: -40px;
            }
            .team-section .team-items .item:hover  .info{
                transform: translateY(-20px);
            }
            .team-section .team-items .item:hover{
            transform: translateY(-10px);	
            }
            .team-section .team-items .item .inner .info h5{
                margin:0;
                font-size: 18px;
                font-weight: 600;
                color:#ffffff;
            }
            .team-section .team-items .item .inner .info p{
                font-size: 16px;
                font-weight: 400;
                color:#c5c5c5;
                margin:10px 0 0;
            }

            .team-section .team-items .item .inner .info .social-links{
                padding-top: 15px;
            }

            .team-section .team-items .item .inner .info .social-links a{
                display: inline-block;
                height: 32px;
                width: 32px;
                background-color: #ffffff;
                color:#079bbc;
                border-radius: 50%;
                margin:0 2px;
                text-align: center;
                line-height: 32px;
                font-size:16px;
                transition: all .5s ease;
            }

            .team-section .team-items .item .inner .info .social-links a:hover{
                box-shadow: 0 0 10px #000;
            }

            /*responsive*/
            @media(max-width: 991px){
                .team-section .team-items .item{
                flex-basis: calc(50% - 30px);
                max-width: calc(50% - 30px);

            }
            }

            @media(max-width: 767px){
                .team-section .team-items .item{
                flex-basis: calc(100%);
                max-width: calc(100%);

            }
            }
        </style>
        
    </head>
    <body>
    @extends('layouts.app')

    @section('content')
        <section class="about">
            <div class="main">
                <img src="https://i0.wp.com/mutupendidikan.com/wp-content/uploads/2020/04/Klasifikasi-Jenis-Tes-Psikologi.jpg?w=740&ssl=1" alt="">
                <div class="all-text">
                    <h4>About Us</h4>
                    <h1>Templateize</h1>
                    <p>The personal landing page template for professionals that we plan to make can be a page that provides portfolio creation services with templates that have been provided for personal needs.
                        This website can also provide a place for creators who want to donate or trade their portfolio template works.
                        We named this website Templateize because it was inspired by a combination of the words template and appetize, we hope that our website can provide portfolio templates that suit the tastes of its users.<div class="btn">
                        <button type="button" onClick="document.getElementById('middle').scrollIntoView();">Our Team</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-section">
            <div class="container">
                <div class="row">
                    <div class="section-title">
                        
                        <div id="middle">
                            <h1>Our Team</h1>
                        </div>
                        <!-- <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p> -->
                    </div>
                </div>
                <div class="row">
                    <div class="team-items">
                         <div class="item">
                             <img src="https://cdn.idntimes.com/content-images/community/2022/04/13-70c6d66a74f3cea6c9573bee957f66ff-4377b384a91ac9abad04ac656f9e353f.jpg" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>Ahmad Fatha Mumtaza</h5>
                                      <p>Bantul, D.I.Y</p>
                                      <div class="social-links">
                                          <a href=""><span class="fab fa-google"></span></a>
                                          <a href=""><span class="fab fa-linkedin"></span></a>
                                      </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                            <img src="https://cdn.idntimes.com/content-images/community/2022/04/7-70c6d66a74f3cea6c9573bee957f66ff-95693296e8ca1cb5755370e62b7445b0.jpg" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>Gabriel Rio Aditya</h5>
                                      <p>Yogyakarta, D.I.Y</p>
                                      <div class="social-links">
                                      <a href=""><span class="fab fa-google"></span></a>
                                      <a href=""><span class="fab fa-linkedin"></span></a>
                                      </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                            <img src="https://cdn.idntimes.com/content-images/community/2022/04/16-70c6d66a74f3cea6c9573bee957f66ff-88f99a00a88d77d9ddca8a7c3e3cdb9d.jpg" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>Lintang Yandi Nugraha</h5>
                                      <p>Kulon Progo, D.I.Y</p>
                                      <div class="social-links">
                                          <a href=""><span class="fab fa-google"></span></a>
                                          <a href=""><span class="fab fa-linkedin"></span></a>
                                      </div>
                                 </div>
                             </div>
                         </div>
                         <div class="item">
                            <img src="https://cdn.idntimes.com/content-images/community/2022/04/4-70c6d66a74f3cea6c9573bee957f66ff-72486fb1f910664e8a853a17e0848d6b.jpg" alt="team" />
                             <div class="inner">
                                 <div class="info">
                                      <h5>Rayendra Arya Daneswara</h5>
                                      <p>Bantul, D.I.Y</p>
                                      <div class="social-links">
                                          <a href=""><span class="fab fa-google"></span></a>
                                          <a href=""><span class="fab fa-linkedin"></span></a>
                                      </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
         </section>
         <section>@include ("footer.footer")</section>
         @endsection
    </body>
</html>