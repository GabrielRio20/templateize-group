<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    @extends('customer.d_board_cust')
    @section('main')

    <h1> Dashboard </h1>

    <div class="row ms-3 me-5">

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start p-4 shadow rounded justify-content-between">
            <div>
              <h4>My Money</h4>
              <h5 class="text text-primary"><strong>Rp {{ number_format($user->money, 0, '.', '.') }}</strong></h5>
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
              </svg>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start p-4 shadow rounded justify-content-between">
            <div>
              <h4>My Templates</h4>
              <?php
              $no = 0;
              foreach($pesanan as $data){
                if(!empty($pesanan)){
                  foreach($pesanan_detail as $item){
                    if($data->id == $item->pesanan_id)
                      $no++;
                  } 
                }
              }
              ?>
              <h5>{{ $no }}</h5>
              {{-- <h5>{{ count($shopping->id) }}</h5> --}}
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-collection-fill" viewBox="0 0 16 16">
                <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
              </svg>
            </div>
          </div>
        </div>

        {{-- <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start p-4 shadow rounded justify-content-between">
            <div>
              <h4>Contributor</h4>
              <h5>{{ $contributor->count('id') }}</h5>
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
            </div>
          </div>
        </div> --}}

        {{-- <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start p-4 shadow rounded justify-content-between">
            <div>
              <h4>Template</h4>
              <h5>{{ $template->count('id') }}</h5>
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-collection-fill" viewBox="0 0 16 16">
                <path d="M0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
              </svg>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start p-4 shadow rounded justify-content-between">
            <div>
              <h4>Feedback</h4>
              <h5>{{ $feedback->count('id') }}</h5>
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
              </svg>
            </div>
          </div>
        </div>
      </div> --}}

      @endsection
      {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
</body>
</html>