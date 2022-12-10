{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
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
        </tr>
    </thead>

    <tbody>
        @foreach($data_user as $user)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
