<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('contributor.d_board_cont')

    @section('main')

    <div class="col-md-12 p-4">
        <div class="card">
            <div class="card-header">
                <h3> My Templates </h3>
            </div>
            
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Template</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
        
                    {{-- @foreach($templates as $data) --}}
                    <tbody>
                        <?php $no = 1; ?>
                        @if(!empty($templates))
                            {{-- @foreach($pesanan as $pesan) --}}
                                @foreach($templates as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img class="img-fluid m-2" src="{{ asset('thumb/'.$item->picture) }}" width="90px" alt="">
                                            {{ $item->template_name }}
                                        </td>
                                        <td>
                                            Rp{{ $item->price }}
                                        </td>
                                        <td>
                                            <div class="d-flex flex-row ">
                                                <a class="btn btn-primary btn-sm" href="{{ url('details', $item->id) }}">Details</a>

                                                <a class="btn btn-secondary btn-sm mx-2" href="{{ route('shopping.edit', $item->id) }}">Edit</a>

                                                <form action="{{ route('contributor.destroy', $item->id) }}" method="post">
                                                    @csrf
                                                    <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin?')">Delete</button>
                                                </form>
                                            </div>

                                            <!-- <a class="btn btn-danger btn-sm" href="{{ route('contributor.destroy', $item->id) }}">Delete</a> -->

                                            {{-- <a class="btn btn-success btn-sm" href="{{ asset('./storage/app/docs') }}/ {{ $item->shopping->document }}" download="{{ $item->shopping->template_name }}">Download</a> --}}
                                        </td>
                                        {{-- <td>{{ $user->level }}</td> --}}
                                    </tr>
                                @endforeach
                            {{-- @endforeach --}}
                        @endif
                    </tbody>
                    {{-- @endforeach --}}
                </table>
            </div>
        </div> 
    </div>
    
    @endsection
</body>
</html>