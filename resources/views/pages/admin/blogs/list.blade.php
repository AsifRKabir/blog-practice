@extends('layouts.admin_layout')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">List of Blogs</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">List of Blogs</li>
        </ol>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Sub Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($blogs) > 0)

                    @foreach ($blogs as $blog)
                        <tr>
                            <th scope="row">{{ $blog->id }}</th>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->sub_title }}</td>
                            <td>{{ Str::limit(strip_tags($blog->description), 40) }}</td>
                            <td>
                                <img style="height: 10vh;" src="{{ url($blog->image) }}" alt="">
                            </td>
                            <td>{{ $blog->category }}</td>
                            <td>
                                <div class="row">
                                    <div>
                                        <a class="btn btn-primary m-2"href="{{ route('admin.blogs.edit', $blog->id) }}">Edit</a>
                                    </div>
                                    <div>
                                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger m-2" type="submit" value="Delete" name="submit">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                @endif
            </tbody>
        </table>
    </div>
</main>

@endsection