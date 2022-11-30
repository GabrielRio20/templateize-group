<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    @extends('customer.d_board_cust')

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
                            <th>Purchase Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
        
                    {{-- @foreach($pesanan as $pesan) --}}
                    <tbody>
                        <?php $no = 1; ?>
                        @if(!empty($pesanan))
                            {{-- @foreach($pesanan as $pesan) --}}
                                @foreach($pesanan_detail as $item)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->shopping->template_name }}</td>
                                        <td>{{ $item->pesanan->tanggal }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('details', $item->shopping->id) }}">Details</a>

                                            <a class="btn btn-success btn-sm" href="{{ route('download') }}">Download</a>
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