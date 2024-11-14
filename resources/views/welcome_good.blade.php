<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eglise Evangelique Baptiste de Petion-Ville</title>
        <!--Add bootstrap CDM-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!--Import bootstrapp cdn icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
        <!-- Include leaflet Library -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <!-- Bootstrap CSS 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        -->
        <!--CSS external-->
        <link rel="stylesheet" href="{{ asset('css/custom_good.css') }}"> 
        <!--Boxicom css-->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
    </head>
    <body>
        <header id="header-wraper">
            <nav class="top-bar">
                <div class="container">
                    <div class="row justify-content-center justify-content-sm-between align-items-center gy-2">
                        <div class="col-auto text-center text-sm-start mb-2 mb-sm-0">
                            <p class="text-light mb-0 d-inline-block">
                                <a href="https://www.google.com/maps/dir/%C3%89glise+Baptiste+%C3%89
                                vangelique+de+Petion-Ville,+Rte+de+Delmas+%23+425,+Delmas+95/%C3%89gli
                                se+Baptiste+%C3%89vangelique+de+Petion-Ville,+Rte+de+Delmas+%23+425,
                                +Delmas+95/@18.5232687,-72.3255594,13z/data=!3m1!4b1!4m13!4m12!1m5!1m1
                                !1s0x8eb9e87ff9efb3af:0x340013f252029fd4!2m2!1d-72.2842851!2d18.523129
                                8!1m5!1m1!1s0x8eb9e87ff9efb3af:0x340013f252029fd4!2m2!1d-72.2842851!2d
                                18.5231298?hl=fr-FR&entry=ttu"><i class="bx bx-map text-light mx-1"></i>
                                #569, Route de Delmas, Delmas, Haiti
                                </a>
                            </p>
                            <p class="text-light mb-0 d-inline-block">
                                <i class="bx bx-phone text-light mx-1"></i>
                                <span>+509 3200-5660</span>
                            </p>
                        </div>
                        <div class="col-auto text-center text-sm-start">
                            <div class="social-links">
                                <a href="#" class="text-light mx-1"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-light mx-1"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="text-light mx-1"><i class="bi bi-youtube"></i></a>
                                <a href="#" class="text-light mx-1"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>                
                </div>
            </nav>
            <!--Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light p-2">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('images/Ebep_Eglise_Logo.svg') }}" class="" alt="EBEP" width="80">
                        <span class="ebep-name">EBEP</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
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
            <section class="content-first pt-5">
                <div class="container">
                    <div class="row content-first-items">
                        <div class="col-md">
                            <div class="card text-dark">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class='bx bx-history'></i>
                                    </div>
                                    <h3 class="card-title mb-3">
                                        NOTRE HISTOIRE
                                    </h3>
                                    <p class="card-text">
                                        Pour comprendre qui nous sommes et où nous allons, vous devez comprendre où nous avons commencé...
                                    </p>
                                    <a href="#" class="btn btn-light mt-3">
                                        <i class="bi bi-chevron-right"></i> Lire plus
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card text-dark">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class='bx bx-home-circle'></i>
                                    </div>
                                    <h3 class="card-title mb-3">
                                        NOTRE MISSION
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex natus placeat debitis reprehenderit accusantium minus!
                                    </p>
                                    <a href="#" class="btn btn-light mt-3">
                                        <i class="bi bi-chevron-right"></i> Lire plus
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="card text-dark">
                                <div class="card-body text-center">
                                    <div class="h1 mb-3">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <h3 class="card-title mb-3">
                                        NOTRE VISION
                                    </h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis deleniti unde in, corporis sunt minus...
                                    </p>
                                    <a href="#" class="btn btn-light mt-3">
                                        <i class="bi bi-chevron-right"></i> Lire plus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Other section -->
            <section id="learn" class="pt-3">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md">
                            <img src="{{ asset('images/gallery/Photo1.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-md p-5">
                            <h2>Nos cultes du Dimanche</h2>
                            <p class="lead">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime, provident? Ipsum pariatur blanditiis earum. Debitis!
                            </p>
                            <p>
                                Les dimanches matins sont empreints de sérénité et de réflexion au sein de notre communauté. Chaque semaine, nous nous réunissons pour célébrer nos cultes du Dimanche Matin, des moments précieux où la spiritualité et la communion se rencontrent.
                            </p>
                            <a href="#" class="btn btn-light mt-3">
                                <i class="bi bi-chevron-right"></i> Lire plus
                            </a>
                        </div>  
                    </div>
                </div>
            </section>
            <section class="article-2 pt-4 text-dark">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md p-5">
                            <h2>EBEP en Fete</h2>
                            <p class="lead">
                                Debut de nos activites pour le 40eme Anniversaire
                            </p>
                            <p>
                                Le coup d'envoi des festivités pour notre 40e anniversaire approche à grands pas, et l'excitation est palpable dans l'air ! Les préparatifs battent leur plein pour marquer cette étape exceptionnelle de notre parcours. Nous entamons ce voyage commémoratif avec un élan d'enthousiasme, prêts à célébrer quatre décennies de succès, de croissance et de moments mémorables.
                            </p>
                            <a href="#" class="btn btn-light mt-3">
                                <i class="bi bi-chevron-right"></i> Lire Plus
                            </a>
                        </div>
                        <div class="col-md">
                            <img src="{{ asset('images/gallery/Photo3.jpg') }}" alt="" class="img-fluid">
                        </div>
                        
                    </div>   
                </div>
            </section>
            <!--our board-->
            <section id="instructors" class="p-5">
                <div class="container">
                    <h2 class="text-center text-dark">Nos Leaders</h2>
                    <p class="lead text-center text-dark mb-5">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores, recusandae.
                    </p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <!-- Explanation
                                col-md-6=> on medium screen it takes 2 column
                                col-lg-3=> on large screen it will take 3 column out of 12
                            -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <img 
                                        src="https://randomuser.me/api/portraits/men/16.jpg" 
                                        class="rounded-circle mb-3"
                                        alt=""
                                    >
                                    <h3 class="card-title mb-3">Past. John Doe</h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias temporibus fugiat delectus ipsam libero nisi?
                                    </p>
                                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Explanation
                                col-md-6=> on medium screen it takes 2 column
                                col-lg-3=> on large screen it will take 3 column out of 12
                            -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <img 
                                        src="https://randomuser.me/api/portraits/women/12.jpg" 
                                        class="rounded-circle mb-3"
                                        alt=""
                                    >
                                    <h3 class="card-title mb-3">Sr. Johane Innocent</h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias temporibus fugiat delectus ipsam libero nisi?
                                    </p>
                                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Explanation
                                col-md-6=> on medium screen it takes 2 column
                                col-lg-3=> on large screen it will take 3 column out of 12
                            -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <img 
                                        src="https://randomuser.me/api/portraits/men/17.jpg" 
                                        class="rounded-circle mb-3"
                                        alt=""
                                    >
                                    <h3 class="card-title mb-3">Past. Mike Jr. Andrew</h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias temporibus fugiat delectus ipsam libero nisi?
                                    </p>
                                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <!-- Explanation
                                col-md-6=> on medium screen it takes 2 column
                                col-lg-3=> on large screen it will take 3 column out of 12
                            -->
                            <div class="card">
                                <div class="card-body text-center">
                                    <img 
                                        src="https://randomuser.me/api/portraits/women/21.jpg" 
                                        class="rounded-circle mb-3"
                                        alt=""
                                    >
                                    <h3 class="card-title mb-3">Sr. Mykirah Grace</h3>
                                    <p class="card-text">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias temporibus fugiat delectus ipsam libero nisi?
                                    </p>
                                    <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                                    <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            <!--section pour gallerie-->
            <section class="p-5 bg-dark">
                <div class="container section-gallerie-container">
                    <h2 class="section-title">
                        <b></b>
                        <span class="section-title-main">Gallerie</span>
                        <b></b>
                    </h2>
                    <div class="row gallery-row-1">
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo1.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo2.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo3.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo6.jpg') }}" alt="photo">
                        </div>
                    </div>
                    <div class="row gallery-row-2">
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo4.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo5.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo6.jpg') }}" alt="photo">
                        </div>
                        <div class="col-md-3 gallery-item">
                            <img src="{{ asset('images/gallery/Photo1.jpg') }}" alt="photo">
                        </div>
                    </div>
                    <a href="#" class="btn btn-light mt-3">
                        <i class="bi bi-chevron-right"></i> Voir plus
                    </a>
                </div>
            </section>
            <!-- Contact & Map-->
            <section class="p-5 bg-secondary">
                <div class="container">
                    <div class="row g-4">
                        <div class="col-md">
                            <h2 class="text-center mb-4">Contact Info</h2>
                            <ul class="list-group list-group-flush lead">
                                <li class="list-group-item">
                                    <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Enrollment Phone:</span> 509 33517873
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Student Phone:</span> 509 33517873
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Enrollment Email:</span> enroll@frontendbc.test
                                </li>
                                <li class="list-group-item">
                                    <span class="fw-bold">Student Email:</span> stu@frontendbc.test
                                </li>
                            </ul>
                        </div>
                        <div class="col-md">
                            <!-- For adding the Map -->
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary position-relative">
            <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <a class="d-inline-flex align-items-center mb-2 text-body-emphasis text-decoration-none" href="/" aria-label="Bootstrap">
                            <img src="{{ asset('images/Ebep_Eglise_Logo.svg') }}" alt="EBEP" width="80">
                            <!--<span class="ebep-name">EBEP</span>-->
                        </a>
                        <ul class="list-unstyled small">
                            <li class="mb-2">Designed and built with all the love in the world by the Bootstrap team with the help of our contributors. </li>
                        </ul>
                    </div>
                    <div class="col-md-3 offset-lg-1 mb-3">
                        <h5>Media Liens</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#">Sermons</a></li>
                            <li class="mb-2"><a href="#">Livestream & Video</a></li>
                            <li class="mb-2"><a href="#">Examples</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h5>Guides</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#">L'heure services</a></li>
                            <li class="mb-2"><a href="#">Devenir Membre</a></li>
                            <li class="mb-2"><a href="#">Visiter nous</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 mb-3">
                        <h5>Nos Projects</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" target="_blank" rel="noopener">Faire un Don</a></li>
                            <li class="mb-2"><a href="#" target="_blank" rel="noopener">Projects en cours</a></li>
                            <li class="mb-2"><a href="#" target="_blank" rel="noopener">CED</a></li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2022 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-facebook'></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-instagram'></i></a></li>
                        <li class="ms-3"><a class="link-dark" href="#"><i class='bx bxl-twitter' ></i></a></li>
                    </ul>
                    <a href="#" class="position-absolute bottom-0 end-0 p-5">
                        <i class="bi bi-arrow-up-circle h1"></i>
                    </a>
                </div>
            </div>
        </footer>
        <!--Javascript code for map-->
        <script>
            var latitude = 18.5231068; 
            var longitude = -72.2845019;
        
            var map = L.map('map').setView([latitude, longitude], 13);
        
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
              attribution: '© OpenStreetMap contributors'
            }).addTo(map);
        
            L.marker([latitude, longitude]).addTo(map)
              .bindPopup('EBEP').openPopup();
        </script>
        <!--add javascript bundle(prior to version 4, we don't need to include jquery)-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>