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
                <a class="navbar-brand" href="#">
                    <h4 class="text-danger">ASIF'S BLOG</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto d-flex align-items-center">
                        <a class="nav-link" href="#">Home</a>
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

        {{-- Hero Section --}}

        <section id="hero"
            class="hero-section mx-auto text-center mt-5 d-flex justify-content-center align-items-center flex-column">

            <h1 class="text-light text-uppercase">{{ $main->title }}</h1>
            <h5 class="text-light w-50 my-4">{{ $main->sub_title }}</h5>
            <a href="#blogs">
                <button type="button" class="btn btn-danger">Read Posts <i
                        class="fa-solid fa-arrow-down ms-4"></i></button>
            </a>

        </section>

    </header>

    <main>

        {{-- Blogs --}}

        <section id="blogs" class="blogs text-light mt-5 pt-3">

            <h2 class="text-center mb-5 red-bg">Blogs</h2>

            <div class="row text-dark d-flex justify-content-center m-0">
                @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-lg-3 col-sm-6 d-flex justify-content-center m-4">
                            <div class="card border-0 rounded" style="width: 20rem;">
                                <img src="{{ url($blog->image) }}" class="card-img-top" alt="...">
                                <div class="card-body blog-card">
                                    <h5 class="card-title">{{ $blog->title }}</h5>
                                    <p class="card-text">{{ $blog->sub_title }}</p>
                                    {{-- <a href="{{ route('blog', $blog->id) }}" class="btn btn-danger">Read More</a> --}}
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <a href="{{ route('blog', $blog->id) }}" class="btn btn-danger">Read More</a>
                                  </div>
                            </div>
                        </div>
                    @endforeach
                @endif
                {{-- <div class="col-lg-3 col-sm-6 d-flex justify-content-center m-4">
                    <div class="card border-0 rounded" style="width: 20rem;">
                        <img src="{{ url('assets/img/food/1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body blog-card">
                            <h5 class="card-title">Food Name</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos consectetur libero eaque deleniti dolorum. A.</p>
                            <a href="#" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>

        </section>

        {{-- About --}}

        <section id="about" class="about text-light mt-5 container pt-3">

            <h2 class="text-center mb-5 red-bg">About Us</h2>

            <div class="d-flex justify-content-around align-items-center my-5">
                <div class="w-50 d-flex justify-content-start flex-column">
                    <h1>Asif Rezwan Kabir</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat, in.</p>
                </div>
                <div class="w-50 d-flex justify-content-end">
                    <img class="w-50 img-fluid rounded-circle" src="{{ url('assets/img/person.jpg') }}" alt="">
                </div>
            </div>

        </section>

        {{-- Contact --}}

        <section id="contact" class="contact text-light mt-5 container pt-3">

            <h2 class="text-center mb-5 red-bg">Contact</h2>

            <form class="container" action="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button class="btn btn-danger d-block mx-auto mt-4">Submit</button>
            </form>

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