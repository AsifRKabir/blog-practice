@extends('layouts.admin_layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Main</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Main</li>
        </ol>

        <form action="{{ route('admin.main.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{ method_field('PUT') }}

            <div class="row">
                <div class="form-group col-md-4 mt-3">
                    <div class="mb-3">
                        <label for="title">
                            <h4>Title</h4>
                        </label>
                        <input class="form-control" type="text" name="title" id="title" value="{{ $main->title }}">
                    </div>
                    <div class="mb-5">
                        <label for="sub_title">
                            <h4>Sub Title</h4>
                        </label>
                        <input class="form-control" type="text" name="sub_title" id="sub_title"
                            value="{{ $main->sub_title }}">
                    </div>
                </div>
            </div>

            <input class="btn btn-danger mt-3" type="submit" value="Submit">

        </form>
    </div>
</main>

@endsection