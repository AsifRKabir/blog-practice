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
                        <a class="nav-link" href="">
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

            <h1 class="text-light text-uppercase red-bg my-5">Title</h1>

            <img class="mb-4" src="{{ url('assets/img/food/1.jpg') }}" alt="">
            <h4 class="text-light w-50 my-4">Caption</h4>

            <p class="text-light w-50 my-4 text-start">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut est ullam ratione aliquid illum molestiae excepturi fuga explicabo odit nostrum. Ipsum voluptatibus laborum doloribus reiciendis repudiandae eos neque vitae doloremque a modi pariatur, repellendus consectetur rerum alias totam amet? Provident culpa consequuntur accusamus veniam laboriosam sed! Pariatur numquam, enim fuga at accusamus animi iusto possimus provident quo magnam, ducimus sit, nesciunt dignissimos atque voluptatum ullam labore omnis tempora laudantium minima culpa! Sapiente vel tenetur consectetur? Ratione et ullam officiis natus ipsam ipsum error eum eaque mollitia omnis doloribus aspernatur quo optio qui, minima libero eos recusandae commodi enim repellendus repellat nemo sequi suscipit dolores. Beatae error eveniet quaerat odio nostrum quos sequi saepe corrupti sed asperiores, necessitatibus aliquam! Reprehenderit ducimus similique quis corporis sequi illo non, optio debitis aspernatur.<br><br> necessitatibus unde maxime sunt dolores neque temporibus odit ipsam amet nesciunt quia tempore laudantium voluptatum ullam eos! Perspiciatis suscipit excepturi praesentium nostrum! Illo debitis accusantium blanditiis impedit nemo rerum perferendis sit. Ab, saepe assumenda. Quisquam nobis labore itaque, cumque autem iste maxime minima mollitia, earum saepe doloremque incidunt laborum dolore ipsa fuga necessitatibus. Alias, iusto excepturi eveniet rerum repellat quasi iure repellendus, molestias aut, odio velit similique cumque illum adipisci corporis non pariatur nobis sunt fugiat asperiores incidunt sint harum? Minima autem eaque quisquam id quos sit atque alias totam natus quae. Tempora officia suscipit officiis natus possimus ea, recusandae a, modi dolor molestiae cumque ipsa delectus. Iste, accusamus! Deserunt placeat veritatis magnam commodi. Assumenda cumque molestias minus modi, nesciunt, eveniet at provident nulla deleniti iure, totam eaque fugit in adipisci earum? Harum reprehenderit facere totam aliquid.<br><br> quaerat officia laborum maxime magni. Delectus, ullam odio? Vitae quae eos ut cupiditate, excepturi voluptatum laboriosam ab ducimus eveniet debitis iure itaque asperiores. Velit veniam laudantium rerum. Sapiente accusamus reiciendis vel, ipsa adipisci ea, inventore perspiciatis excepturi saepe fugit labore dignissimos porro eos maxime totam vitae nihil ad assumenda laudantium numquam quasi. Dolorum vel ducimus aperiam velit aspernatur facere quia sit ipsum consequatur dolores! Praesentium, architecto tenetur. Distinctio odio tempora inventore enim modi, sapiente eum minima? Voluptate earum dicta quasi corrupti maxime omnis illum dolor ipsam sit voluptates ex quas similique recusandae provident id impedit nisi, nesciunt debitis soluta eius obcaecati odio. Culpa facere non natus. Explicabo quaerat, magnam perferendis excepturi aliquam quis qui. Magnam aliquid similique omnis, impedit sequi quam eligendi nesciunt quo nulla facere molestias ducimus quibusdam, deserunt illum totam ipsam quaerat?</p>


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