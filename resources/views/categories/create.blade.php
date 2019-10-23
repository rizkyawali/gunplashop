@extends('layouts.global')

@section('title')
    Add Category
@endsection

@section('content')
    <div class="col-md-8">
        <form action="{{ route('categories.store') }}" enctype="multipart/form-data" class="bg-white shadow-sm p-3" method="POST">
            @csrf

            <label>Category Name</label><br>
            <input type="text" class="form-control" name="name">
            <br>

            <label>Category Image</label>
            <input type="file" class="form-control" name="image">
            <br>

            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
@endsection
