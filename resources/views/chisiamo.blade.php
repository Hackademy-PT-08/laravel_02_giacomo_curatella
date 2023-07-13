<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChiSiamo - Blog</title>
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
                    <h2 class="display-3 text-center">Chi siamo</h2>
                </div>
            </div>
            <hr>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91092.79446723592!2d11.295633883210263!3d44.481350062075926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fd498e951c40b%3A0xa2e17c015ba49441!2sBologna%20BO!5e0!3m2!1sit!2sit!4v1689268723581!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <p class="h4">Testata giornalistica ONLINE</p>
                    <p>Pubblicazione di articoli per conto terzi</p>
                    <p class="cursive">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus impedit perferendis rem et distinctio? Maiores veritatis nulla dolorem, doloribus deleniti ea dolorum minima tempore cumque aperiam eum temporibus tenetur. Cupiditate.
                    </p>
                    <p><i class="fa-solid fa-phone me-1"></i>102-333489028</p>
                    <a href="#" class="text-decoration-none text-black"><p><i class="fa-solid fa-envelope me-1"></i>mail@mail.it</p></a>
                    <p><i class="fa-solid fa-globe me-1"></i>Via Le mani dal Naso, 22 Bologna, IT</p>
                </div>
            </div>
        </section>
        
        <footer class="container-fluid py-3 bg-black fixed-bottom">
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