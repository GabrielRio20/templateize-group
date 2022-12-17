{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}

<script>
    var auth = prompt("Enter admin authentication");
    if (auth == "aku admin asli bang, sumpah"){
        txt = "Welcome, Admin!"
    }
    else{
        history.back();
        txt = "You're not allowed to enter this page"
    }
    alert(txt);
</script>

@if(Session::has('pesan'))
    <div class="alert alert-success">{{ Session::get('pesan') }}</div>
@endif

@extends('admin.d_board_admin')

@section('main')

<h1> Manage User </h1>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Level</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data_user as $user)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
                <td>
                <form action="{{route('user.destroy', $user->id)}}" method="post">
                        @csrf
                    <button class="btn btn-danger"onClick="return confirm('Are you sure?')">Hapus</button>
                </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
