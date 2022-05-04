@extends('layouts.admin_layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-3 mt-3">
                    <h3>Image</h3>
                    <img class="img-thumbnail" style="height: 30vh;" src="{{ url($blog->image) }}">
                    <input class="mt-3" type="file" name="image">
                </div>
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $blog->title }}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title">
                            <h4>Sub Title</h4>
                        </label>
                        <input class="form-control" type="text" name="sub_title" id="sub_title" value="{{ $blog->sub_title }}">
                    </div>
                    <div class="mb-5">
                        <label for="category">
                            <h4>Category</h4>
                        </label>
                        <input class="form-control" type="text" name="category" id="category" value="{{ $blog->category }}">
                    </div>
                </div>
                <div class="form-group col-md-6 mt-3">
                    <h3>Description</h3>
                    <textarea class="form-control" name="description" id="description" rows="5">{{ $blog->description }}</textarea>
                </div>
            </div>

            <input class="btn btn-danger my-5" type="submit" value="Update">

        </form>
    </div>
</main>

@endsection