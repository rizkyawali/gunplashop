@extends('layouts.global')

@section('title')
    Edit User
@endsection

@section('content')
    <div class="col-md-8">

        @if (session('status'))
            {{ session('status') }}
        @endif

        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" value="PUT" name="_method">

            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" placeholder="Full Name">
            <br>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ $user->username }}" placeholder="Your Username">
            <br>

            <label for="status">Status</label>
            <br>
            <input {{ $user->status == "ACTIVE" ? "checked" : "" }} type="radio" class="form-control" value="ACTIVE" name="status" id="active">
            <label for="active">Active</label>
            <input {{ $user->status == "INACTIVE" ? "checked" : "" }} type="radio" class="form-control" value="INACTIVE" name="status" id="inactive">
            <label for="inactive">Inactive</label>
            <br><br>

            <label for="roles">Roles</label>
            <input type="checkbox" {{ in_array("ADMIN", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="ADMIN" value="ADMIN">
            <label for="ADMIN">ADMIN</label>
            <input type="checkbox" {{ in_array("STAFF", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="STAFF" value="STAFF">
            <label for="STAFF">STAFF</label>
            <input type="checkbox" {{ in_array("CUSTOMER", json_decode($user->roles)) ? "checked" : ""}} name="roles[]" id="CUSTOMER" value="CUSTOMER">
            <label for="CUSTOMER">CUSTOMER</label>
            <br><br>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
            <br>

            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control">{{ $user->address }}</textarea>
            <br>

            <label for="avatar">Avatar Image</label>
            <br>
            Current Avatar : <br>
            @if ($user->avatar)
                <img src="{{ asset('storage/'.$user->avatar) }}" width="10%" alt="">
                <br>
            @else
                No Avatar
            @endif
            <br>
            <input type="file" id="avatar" name="avatar" class="form-control">
            <small class="text-muted">*Kosongkan jika tidak ingin mengubah avatar</small>
            <hr class="my-3">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" placeholder="Example : user@mail.com" disabled>
            <br>

            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
@endsection
