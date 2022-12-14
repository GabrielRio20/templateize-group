<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Templates</title>
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
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($pesanan->reverse() as $data)
                            @if(!empty($pesanan))
                                @foreach($pesanan_detail as $item)
                                    @if($data->id == $item->pesanan_id)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>
                                            <img class="img-fluid m-2" src="{{ asset('thumb/'.$item->shopping->picture) }}" width="90px" alt="">
                                            {{ $item->shopping->template_name }}
                                        </td>
                                        <td>{{ $item->pesanan->tanggal }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ url('details', $item->shopping->id) }}">Details</a>
                                            <a class="btn btn-success btn-sm" href="{{ url('download', $item->shopping->id) }}">Download</a>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div> 
    </div>
    @endsection
</body>
</html>