@extends('layouts.global')

@section('title')
    List of Categories
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('categories.index') }}">
                <div class="input-group">
                    <input type="text" class="form-control" name="name" placeholder="Search Category Name">
                    <input type="submit" value="Search" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <br>
    <div class="row">
        <div class="col-md-12 text-left">
            <a href="{{route('categories.create')}}" class="btn btn-primary">Add Category</a>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-stripped">
                <thead style="text-align: center;">
                    <tr>
                        <th><b>Name</b></th>
                        <th><b>Slug</b></th>
                        <th><b>Image</b></th>
                        <th><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>
                                @if ($category->image)
                                    <img src="{{ asset('storage/'.$category->image) }}" width="12%" alt="">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="10">
                            {{ $categories->appends(Request::all())->links() }}
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
