<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Asif's Blog</title>
</head>

<body class="bg-dark">

    <header>

        {{-- Navbar --}}

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <h4 class="text-danger">ASIF'S BLOG</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto d-flex align-items-center">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                        <a class="nav-link" href="#blogs">Blogs</a>
                        <a class="nav-link" href="#about">About</a>
                        <a class="nav-link" href="#contact">Contact</a>
                        <a class="nav-link" href="{{ route('login') }}">
                            <div class="btn btn-danger">Login</div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <main>

        <section
            class="blog-section mx-auto text-center mt-5 d-flex justify-content-center align-items-center flex-column">

            <h1 class="text-light text-uppercase red-bg my-5">{{ $blog->title }}</h1>

            <img class="mb-4" src="{{ url($blog->image) }}" alt="">
            <h4 class="text-light w-50 my-4">{{ $blog->sub_title }}</h4>

            <p class="text-light w-50 my-4 text-start">{!! $blog->description !!}</p>


        </section>

    </main>

    <footer class="mt-5">

        <small>
            <p class="text-center text-light">All Rights Reserved | Asif Rezwan Kabir © 2022</p>
        </small>

    </footer>

    {{-- Scripts --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>