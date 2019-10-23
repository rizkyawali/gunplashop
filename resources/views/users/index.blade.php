@extends('layouts.global')

@section('title')
    Users List
@endsection

@section('content')

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th><b>Name</b></th>
                <th><b>Username</b></th>
                <th><b>Email</b></th>
                <th><b>Avatar</b></th>
                <th><b>Action</b></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td><a href="{{ route('users.show', ['id' => $user->id]) }}">{{ $user->name }}</a></td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if ($user->avatar)
                            <img src="{{ asset('storage/'.$user->avatar) }}" alt="" width="10%">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-info text-white btn-sm" href="{{route('users.edit',['id'=>$user->id])}}">Edit</a>
                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST" onsubmit="return confirm('Are You Sure Want To Delete User ')" class="d-inline">                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
