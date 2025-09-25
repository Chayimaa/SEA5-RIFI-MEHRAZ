<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Les Jardins Bio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

    {{-- HEADER --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="#">🌱 Les Jardins Bio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ route('home') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ route('panier.index') }}">Paniers</a></li>
                    <li class="nav-item"><a class="nav-link fs-5" href="{{ route('home') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- HERO SECTION --}}
    <header class="bg-success bg-gradient text-white text-center py-5">
        <div class="container py-4">
            <h1 class="display-4 fw-bold mb-4">Des paniers bio cultivés avec passion</h1>
            <p class="lead fs-4 mb-5">
                Recevez chaque semaine des paniers de fruits, légumes et œufs frais et bio.<br>
                Soutenez l'agriculture locale et solidaire.
            </p>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                <a href="{{ route('panier.index') }}" class="btn btn-light btn-lg px-4 py-2">Découvrir nos paniers</a>
                <a href="{{ route('home') }}" class="btn btn-outline-light btn-lg px-4 py-2">Nous contacter</a>
            </div>
        </div>
    </header>

    {{-- STATISTIQUES --}}
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3">
                    <div class="bg-light p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <h2 class="text-success display-6 fw-bold">13</h2>
                        <p class="fs-5 mb-0">hectares cultivés en bio</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <h2 class="text-success display-6 fw-bold">250</h2>
                        <p class="fs-5 mb-0">tonnes de légumes par an</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <h2 class="text-success display-6 fw-bold">1500</h2>
                        <p class="fs-5 mb-0">personnes sensibilisées</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-light p-4 rounded shadow-sm h-100 d-flex flex-column justify-content-center">
                        <h2 class="text-success display-6 fw-bold">60</h2>
                        <p class="fs-5 mb-0">salariés dont 45 en parcours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ENGAGEMENTS --}}
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-success text-center mb-5 fw-bold display-5">Nos engagements</h2>
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4 h-100">
                        <i class="bi bi-leaf text-success display-1 mb-3"></i>
                        <span class="fallback-text" style="display: none;">🌿</span>
                        <h5 class="fw-bold mb-3">Agriculture biologique</h5>
                        <p class="fs-6">Nous cultivons sans pesticides, dans le respect de la terre et des saisons.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 h-100">
                        <i class="bi bi-people text-success display-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Insertion sociale</h5>
                        <p class="fs-6">Nos équipes sont composées de personnes en parcours d'insertion professionnelle.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 h-100">
                        <i class="bi bi-globe text-success display-1 mb-3"></i>
                        <h5 class="fw-bold mb-3">Respect de l'environnement</h5>
                        <p class="fs-6">Nous limitons les emballages et favorisons les circuits courts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- TÉMOIGNAGES --}}
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-success text-center mb-5 fw-bold display-5">Ils parlent de nous</h2>
            <div id="carouselTemoignages" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <blockquote class="blockquote">
                                    <p class="mb-4 fs-5 fst-italic">"Grâce aux paniers bio, je mange mieux et je soutiens une belle cause."</p>
                                    <footer class="blockquote-footer fs-5">Sophie, cliente fidèle</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <blockquote class="blockquote">
                                    <p class="mb-4 fs-5 fst-italic">"Une équipe engagée, des produits frais, et un vrai impact social."</p>
                                    <footer class="blockquote-footer fs-5">Julien, bénévole</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-8 text-center">
                                <blockquote class="blockquote">
                                    <p class="mb-4 fs-5 fst-italic">"Les Jardins Bio m'ont permis de retrouver un emploi et une stabilité."</p>
                                    <footer class="blockquote-footer fs-5">Fatima, salariée en insertion</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselTemoignages" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Précédent</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselTemoignages" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Suivant</span>
                </button>
            </div>
        </div>
    </section>

    {{-- ÉVÉNEMENTS --}}
    <section class="py-5 bg-success bg-opacity-10">
        <div class="container">
            <h2 class="text-success text-center mb-5 fw-bold display-5">Événements à venir</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title fw-bold">Atelier compost</h5>
                            <p class="card-text flex-grow-1">Samedi 5 octobre à 14h - Apprenez à composter chez vous.</p>
                            <a href="#" class="btn btn-outline-success align-self-start">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title fw-bold">Marché bio</h5>
                            <p class="card-text flex-grow-1">Dimanche 12 octobre - Vente directe de nos paniers.</p>
                            <a href="#" class="btn btn-outline-success align-self-start">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title fw-bold">Visite des jardins</h5>
                            <p class="card-text flex-grow-1">Samedi 19 octobre - Découvrez nos méthodes de culture.</p>
                            <a href="#" class="btn btn-outline-success align-self-start">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="bg-success text-white pt-5 pb-3">
        <div class="container">
            <div class="row text-center text-md-start g-4">
                <div class="col-md-4">
                    <h5 class="fw-bold fs-4">🌿 Les Jardins Bio</h5>
                    <p class="fs-6">Des paniers de légumes biologiques, cultivés avec amour pour votre bien-être et celui de l'environnement.</p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold fs-4">📞 Contact</h5>
                    <p class="fs-6 mb-1">Prairie Claudel</p>
                    <p class="fs-6 mb-1">Thaon-les-Vosges</p>
                    <p class="fs-6 mb-1">03 XX XX XX XX</p>
                    <p class="fs-6"><a href="mailto:contact@jardinsbio.fr" class="text-white text-decoration-underline">contact@jardinsbio.fr</a></p>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold fs-4">📱 Suivez-nous</h5>
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start mt-3">
                        <a href="#" class="text-white"><i class="bi bi-facebook fs-3"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram fs-3"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter fs-3"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-light my-4">
            <p class="text-center mb-0 fs-6">&copy; {{ date('Y') }} Les Jardins Bio. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>