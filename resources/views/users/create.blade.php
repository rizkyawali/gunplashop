@extends('layouts.global')

@section('title')
    Create User
@endsection

@section('content')

    <div class="col-md-8">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{ route('users.store') }}" method="POST">
            {{ csrf_field() }}
            <label for="name">Name</label>
            <input id="name" type="text" class="form-control" placeholder="Full Name" name="name">
            <br>

            <label for="Username">Username</label>
            <input id="username" class="form-control" name="username" type="text">
            <br>

            <label for="roles">Roles</label>
            <br>
            <input type="radio" name="roles[]" id="ADMIN" value="ADMIN">
            <label for="ADMIN">Administrator</label>

            <input type="radio" name="roles[]" id="STAFF" value="STAFF">
            <label for="STAFF">STAFF</label>

            <input type="radio" name="roles[]" value="COSTUMER" id="COSTUMER">
            <label for="COSTUMER">COSTUMER</label>
            <br>

            <br>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" class="form-control">

            <br>
            <label for="address">Address</label>
            <textarea name="address" id="address" class="form-control"></textarea>

            <br>
            <label for="avatar">Avatar Image</label>
            <br>
            <input type="file" id="avatar" name="avatar" class="form-control">

            <hr class="my-3">

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Example : user@mail.com">
            <br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
            <br>

            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            <br>

            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
@endsection
