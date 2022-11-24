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
            @foreach($shopping as $item)
                <tr>
                    <td>{{ ++$id }}</td>
                    <td>{{ $item->template_name }}</td>
                    <td>{{ $item->description }}</td>
                    {{-- <td>{{ $user->level }}</td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>
</html>