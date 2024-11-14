<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eglise Evangelique Baptiste de Petion-Ville</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!--CSS external-->
    <link rel="stylesheet" href="{{ asset('css/custom_good.css') }}"> 
    <!--Boxicom css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <header id="header-wraper">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="left-element">
                                <i class='bx bxs-edit-location'></i>
                                <span class="location">
                                    #569, Route de Delmas (entre Delmas 91 et 93), Delmas, Haiti
                                </span>
                            </div>
                            <div class="right-elements">
                                <div class="element">A Propos</div>
                                <div class="element">Contactez Nous</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('images/Ebep_Eglise_Logo.svg') }}" alt="EBEP" width="80">
                    <span class="ebep-name">EBEP</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">EBEP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">EVENTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MEDIA CHANNEL</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="hero" style="background: url('{{ asset('images/banner.png') }}') center/cover no-repeat; height: 520px;">
            <div class="hero-content">
                <div class="hero-logo">
                    <img src="{{ asset('images/EBEP_Famille_icon.jpg') }}" alt="Logo" width="180">
                </div>
                <div class="hero-text">
                    <h1>Bienvenue à</br>Église</br>Baptiste</br>Évangélique de</br>Pétion-Ville</h1>
                </div>
            </div>
        </section>
        <section class="content-first">
            <div class="container">
                <div class="row content-first-items">
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bx-history'></i>
                            <h3 class="mb-3">NOTRE HISTOIRE</h3>
                            <p class="content-histoire">Pour comprendre qui nous sommes et où nous allons, vous devez comprendre où nous avons commencé.</p>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bx-home-circle'></i>
                            <h3 class="mb-3">NOS MINISTERES</h3>
                            <p>Apprenez ce qui contribue à constituer le corps du Christ. Nous prêchons à travers nos ministères pour glorifier les dons du Seigneur.</p>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="card-item">
                            <i class='bx bxs-contact'></i>
                            <h3 class="mb-3">CONTACT NOUS</h3>
                            <p>Email: eglisebaptiste2017@gmail.com</br> Telephone: 509 22 22 2452</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section pour gallerie-->
        <div class="container section-gallerie-container">
            <h2 class="section-title">
                <b></b>
                <span class="section-title-main">Gallerie</span>
                <b></b>
            </h2>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo1.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo2.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo3.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo6.png') }}" alt="photo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo4.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo5.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo6.png') }}" alt="photo">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('images/gallerie/Photo1.png') }}" alt="photo">
                </div>
            </div>
        </div>


        <!--
        <h2>Gutter</h2>
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-4 border">Custom column padding</div>
                </div>
                <div class="col">
                    <div class="p-3 border">Custom column padding</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row gy-2">
                <div class="col-6">1
                </div>
                <div class="col-6">2
                </div>
                <div class="col-6">3
                </div>
                <div class="col-6">4
                </div>
            </div>
        </div> -->
    </main>
    <footer>

    </footer>-->
</body>
</html>