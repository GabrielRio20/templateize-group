<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('customer.d_board_cust')

    @section('main')
    <h1> My Templates </h1>
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
            @if(!empty($pesanan))
            @foreach($pesanan_detail as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->shopping->template_name }}</td>
                    <td>{{ $pesanan->tanggal }}</td>
                    {{-- <td>{{ $user->level }}</td> --}}
                </tr>
            @endforeach
            @endif
        </tbody>
    </table>
    @endsection
</body>
</html>