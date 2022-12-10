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
              <h4>My Templates</h4>
              <h5>{{ $pesanan_detail->count('id') }}</h5>
            </div>
            <div class="my-auto">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#949494" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
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