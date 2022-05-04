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
                    <h4 class="tomato-highlight">ASIF'S BLOG</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#blogs">Blogs</a>
                        <a class="nav-link" href="#">About</a>
                        <a class="nav-link" href="#">Contact</a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Hero Section --}}

        <section
            class="hero-section mx-auto text-center mt-5 d-flex justify-content-center align-items-center flex-column">

            <h1 class="text-light text-uppercase">Welcome to my blog!</h1>
            <h5 class="text-light w-50 my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis sequi
                asperiores ad dolorum magnam quaerat eos unde exercitationem! Repudiandae, voluptates?</h5>
            <button type="button" class="btn btn-danger">Read Posts <i class="fa-solid fa-arrow-down ms-4"></i></button>

        </section>

    </header>

    <main>

        {{-- Blogs --}}

        <section id="blogs" class="blogs text-light mt-5">

            <h2 class="text-center mb-5">Blogs</h2>

            <div class="row text-dark d-flex justify-content-center m-0">
                <div class="col-lg-3 col-sm-6 d-flex justify-content-center m-4">
                    <div class="card border-0 rounded" style="width: 20rem;">
                        <img src="{{ url('assets/img/food/1.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body blog-card">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-danger">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </main>

    <footer>

    </footer>

    {{-- Scripts --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>