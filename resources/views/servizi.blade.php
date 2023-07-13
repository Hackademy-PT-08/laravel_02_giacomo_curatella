<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Servizi - Blog</title>
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
                    <h2 class="display-3 text-center">I nostri servizi</h2>
                </div>
            </div>
            <hr>
        </section>

        <section class="container">
            <div class="row">
                <div class="col-12 py-4">
                    <p class="mb-5">
                        Il nostro obiettivo è dare la massima visibilità ai vostri prodotti e servizi. Questo si ottiene presentando al meglio la vostra realtà perché una buona presentazione, una giusta comunicazione a tutti i livelli è oggi più che mai necessaria per raggiungere gli obiettivi aziendali.
                    </p>

                    <a href="" class="text-decoration-none text-primary text-center">
                        <p>
                            Referenze sui lavori aziendali svolti, costi, metodologie operative ed ulteriori Vostre esigenze saranno soddisfatte con un contatto diretto.
                        </p>
                    </a>
                </div>

                <div class="col-12 py-4">
                    <p class="h4 text-success">
                        Rassegna Stampa
                    </p>
                    <p>
                        rapporti con i mezzi stampa del settore – stesura di comunicati stampa e servizi pubbliredazionali – pubblicitari sugli eventi del settore ( fiere – convention – meeting – presentazioni nuovi prodotti – servizi – House Organ) – servizi foto-giornalistici e video-giornalistici.
                    </p>
                </div>
                <div class="col-12 py-4">
                    <p class="h4 text-success">
                        Consulenza Editoriale
                    </p>
                    <p>
                        rapporti con i mezzi stampa del settore – stesura di comunicati stampa e servizi pubbliredazionali – pubblicitari sugli eventi del settore ( fiere – convention – meeting – presentazioni nuovi prodotti – servizi ) – servizi foto-giornalistici e video-giornalistici.
                    </p>
                </div>
                <div class="col-12 py-4">
                    <p class="h4 text-success">
                        Consulenze Pubblicitarie
                    </p>
                    <p>
                        consulenza per la scelta accurata del media giusto – creazione campagne pubblicitarie – controllo sulla pubblicazione di pianificazioni pubblicitarie – comunicati stampa ai mezzi di settore – organizzazione conferenze stampa – ideazione di progetti pubblicitari – promozioni stampa – radio e tv per ogni evento – slogan pubblicitari – monografie.
                    </p>
                </div>
                <div class="col-12 py-4">
                    <p class="h4 text-success">
                       Consulenza, gestione e coordinamento di servizi giornalistici
                    </p>
                </div>
                <div class="col-12 py-4">
                    <p class="h4 text-success">
                        Responsabilità di ufficio stampa per manifestazioni
                    </p>
                    <p>
                        anche di breve durata, con lavoro preparatorio redazionale, contatti con la stampa e redazione comunicati.
                    </p>
                </div>
            </div>
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