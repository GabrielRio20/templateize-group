<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('admin.d_board_admin')

    @section('main')

    <div class="col-md-12 p-4">
        <div class="card">
            <div class="card-header">
                <h3> Templates </h3>
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
                                        <a class="btn btn-primary btn-sm" href="{{ url('details', $item->id) }}">Details</a>
                                        @foreach($admin as $user)
                                            @if($item->uploader == $user->id)
                                            <a class="btn btn-secondary btn-sm" href="{{ route('admin.edit', $item->id) }}">Edit</a>
                                            @endif
                                        @endforeach

                                        <form action="{{ route('admin.destroy', $item->id) }}" method="post">
                                            @csrf
                                            <button class="btn btn-danger btn-sm" onClick="return confirm('Yakin?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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