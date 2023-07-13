<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <main>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
                <div class="container">
                  <a class="navbar-brand text-uppercase" href="{{ route('home') }}">Blog.it</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('servizi') }}">Servizi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('chisiamo') }}">Chi Siamo</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
        <section class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="display-3 text-center">Sezione notizie</h2>
                </div>
            </div>
            <hr>
        </section>

        <section class="container">
            @foreach($articoli as $articolo)
            <a href="{{ route('explode', ['id' => $articolo['id']]) }}" class="text-decoration-none text-black">
                <div class="row mini-article">
                    <div class="col-1">
                        <img src="{{ $articolo['photo'] }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-11">
                        <p class="display-6 fs-6">{{ $articolo['argument'] }}</p>
                        <hr class="my-line">
                        <p class="cursive">di: {{ $articolo['author'] }}</p>
                        <p class="h5">{{ $articolo['title'] }}</p>
                    </div>
                    <hr class="w-75">
                </div>
            </a>
            @endforeach
        </section>
       
        <footer class="container-fluid py-3 bg-black">
            <div class="row">
                <div class="col-12">
                    <p class="text-white text-center small">Tutti i diritti riservati alla niente.it@2023</p>
                </div>
            </div>
        </footer>
    </main>


    <script src="https://kit.fontawesome.com/018c0fd7b3.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>