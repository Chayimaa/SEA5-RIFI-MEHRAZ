<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Jardins de Cocagne - Thaon-les-Vosges</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .hero-section {
            background: linear-gradient(135deg, #047857 0%, #059669 50%, #10b981 100%);
            position: relative;
            overflow: hidden;
        }
        .hero-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.1;
            background-image: radial-gradient(circle at 20% 50%, white 1px, transparent 1px);
            background-size: 50px 50px;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .stat-card:hover {
            transform: scale(1.05);
        }
        .nav-link:hover {
            color: #059669 !important;
        }
        .btn-success {
            background-color: #059669;
            border-color: #059669;
        }
        .btn-success:hover {
            background-color: #047857;
            border-color: #047857;
        }
        .hover-success:hover {
            color: #10b981 !important;
        }
        .bg-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 10 L40 25 L30 40 L20 25 Z' fill='white' fill-opacity='0.3'/%3E%3C/svg%3E");
            background-size: 60px 60px;
        }
    </style>
</head>
<body class="bg-light">
    
    <!-- Header -->
    <header class="bg-white shadow-sm sticky-top">
        <div class="container-fluid px-4 px-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light py-3">
                <a href="/" class="navbar-brand d-flex align-items-center">
                    <div class="rounded-circle d-flex align-items-center justify-content-center bg-gradient" 
                         style="width: 48px; height: 48px; background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                            <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                        </svg>
                    </div>
                    <div class="ms-3">
                        <h1 class="mb-0 fs-5 fw-bold text-dark">Les Jardins de Cocagne</h1>
                        <p class="mb-0 small text-success">Thaon-les-Vosges</p>
                    </div>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link fw-medium text-success" href="/">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="/paniers">Paniers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="{{ route('depots.index') }}">Points de dépôt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="/magasin">Magasin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="/association">Association</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-secondary" href="/contact">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <!-- Bouton Dépôts ajouté ici -->
                        <a href="{{ route('depots.index') }}" class="btn btn-outline-success rounded-pill px-4">
                            📦 Dépôts
                        </a>
                        <a href="/adhesion" class="btn btn-success rounded-pill px-4">Adhérer</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="hero-section text-white py-5">
        <div class="hero-pattern"></div>
        <div class="container position-relative" style="z-index: 1;">
            <div class="row py-5">
                <div class="col-lg-8">
                    <h2 class="display-4 fw-bold mb-4">Agriculture Bio & Solidaire au cœur des Vosges</h2>
                    <p class="fs-5 mb-4 opacity-75">
                        Depuis 1994, nous cultivons 13 hectares en agriculture biologique pour proposer des paniers de légumes frais 
                        tout en favorisant l'insertion professionnelle de personnes éloignées de l'emploi.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="/paniers" class="btn btn-light btn-lg text-success fw-semibold rounded-pill px-4">
                            Commander un panier
                        </a>
                        <a href="/association" class="btn btn-outline-light btn-lg rounded-pill px-4">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute bottom-0 end-0 opacity-25" style="width: 400px; height: 400px;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1" class="w-100 h-100" style="transform: rotate(12deg);">
                <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
            </svg>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-5" style="background: linear-gradient(to bottom, #f9fafb 0%, white 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Nos Services</h2>
                <p class="fs-5 text-secondary">Découvrez nos différentes activités pour consommer local, bio et solidaire</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="/paniers" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 card-hover" style="transition: all 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3"
                                     style="width: 56px; height: 56px; background: linear-gradient(135deg, #059669 0%, #10b981 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
                                        <path d="M3 6h18"/>
                                        <path d="M16 10a4 4 0 0 1-8 0"/>
                                    </svg>
                                </div>
                                <h3 class="h5 fw-bold mb-2 text-dark">Paniers Bio</h3>
                                <p class="text-secondary mb-3">Recevez chaque semaine des paniers de fruits, légumes et œufs frais et bio</p>
                                <div class="text-success fw-medium d-flex align-items-center">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ms-1">
                                        <path d="m9 18 6-6-6-6"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="{{ route('depots.index') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 card-hover" style="transition: all 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3"
                                     style="width: 56px; height: 56px; background: linear-gradient(135deg, #f59e0b 0%, #ea580c 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </div>
                                <h3 class="h5 fw-bold mb-2 text-dark">Points de Dépôt</h3>
                                <p class="text-secondary mb-3">Trouvez le point de retrait le plus proche de chez vous</p>
                                <div class="text-success fw-medium d-flex align-items-center">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ms-1">
                                        <path d="m9 18 6-6-6-6"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
    <a href="{{ route('tournees.index') }}" class="text-decoration-none">
        <div class="card border-0 shadow-sm h-100 card-hover" style="transition: all 0.3s;">
            <div class="card-body p-4">
                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3"
                     style="width: 56px; height: 56px; background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);">
                    <i class="fas fa-route text-white text-2xl"></i>
                </div>
                <h3 class="h5 fw-bold mb-2 text-dark">Tournées</h3>
                <p class="text-secondary mb-3">Planifiez et organisez les tournées de livraison</p>
                <div class="text-success fw-medium d-flex align-items-center">
                    En savoir plus
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ms-1">
                        <path d="m9 18 6-6-6-6"/>
                    </svg>
                </div>
            </div>
        </div>
    </a>
</div>

                <div class="col-md-6 col-lg-3">
                    <a href="/association" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 card-hover" style="transition: all 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3"
                                     style="width: 56px; height: 56px; background: linear-gradient(135deg, #3b82f6 0%, #06b6d4 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                    </svg>
                                </div>
                                <h3 class="h5 fw-bold mb-2 text-dark">Insertion Professionnelle</h3>
                                <p class="text-secondary mb-3">Soutenez l'insertion et les initiatives qui changent les vies</p>
                                <div class="text-success fw-medium d-flex align-items-center">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ms-1">
                                        <path d="m9 18 6-6-6-6"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="/association" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 card-hover" style="transition: all 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3"
                                     style="width: 56px; height: 56px; background: linear-gradient(135deg, #14b8a6 0%, #059669 100%);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                                    </svg>
                                </div>
                                <h3 class="h5 fw-bold mb-2 text-dark">Éducation à l'Environnement</h3>
                                <p class="text-secondary mb-3">Apprenez et découvrez la nature pour un avenir durable</p>
                                <div class="text-success fw-medium d-flex align-items-center">
                                    En savoir plus
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="ms-1">
                                        <path d="m9 18 6-6-6-6"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mission Section -->
    <section class="py-5 text-white position-relative" style="background-color: #047857; overflow: hidden;">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-pattern opacity-10"></div>
        <div class="container position-relative">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Notre Mission</h2>
                    <p class="fs-6 mb-4 opacity-75">
                        Les Jardins de Cocagne sont un chantier d'insertion par l'activité économique créé en 1994. 
                        Notre association a pour vocation l'insertion sociale et professionnelle de personnes éloignées de l'emploi 
                        grâce au maraîchage biologique, à la restauration et à l'éducation à l'environnement.
                    </p>
                    <p class="fs-6 opacity-75">
                        En choisissant nos paniers, vous soutenez une agriculture respectueuse de l'environnement 
                        et vous participez à l'insertion de personnes en difficulté.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="p-4 rounded-3" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <rect fill="none" height="18" rx="2" ry="2" width="18" x="3" y="4"/>
                                    <line x1="16" x2="16" y1="2" y2="6"/>
                                    <line x1="8" x2="8" y1="2" y2="6"/>
                                    <line x1="3" x2="21" y1="10" y2="10"/>
                                </svg>
                                <h3 class="h5 fw-bold mb-2">30 ans d'expérience</h3>
                                <p class="small opacity-75 mb-0">Depuis 1994</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                                <h3 class="h5 fw-bold mb-2">1000+ adhérents</h3>
                                <p class="small opacity-75 mb-0">Une communauté engagée</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
                                    <path d="M3 6h18"/>
                                    <path d="M16 10a4 4 0 0 1-8 0"/>
                                </svg>
                                <h3 class="h5 fw-bold mb-2">800 paniers</h3>
                                <p class="small opacity-75 mb-0">Par semaine</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="p-4 rounded-3" style="background-color: rgba(255, 255, 255, 0.1); backdrop-filter: blur(10px);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                                </svg>
                                <h3 class="h5 fw-bold mb-2">100% Bio</h3>
                                <p class="small opacity-75 mb-0">Agriculture biologique</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        
    <!-- Stats Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="text-center stat-card transition-all" style="transition: all 0.3s;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3"
                             style="width: 64px; height: 64px; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2">
                                <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                            </svg>
                        </div>
                        <div class="display-4 fw-bold text-success mb-2">13</div>
                        <div class="text-secondary">hectares cultivés en bio</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center stat-card transition-all" style="transition: all 0.3s;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3"
                             style="width: 64px; height: 64px; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2">
                                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/>
                                <path d="M3 6h18"/>
                                <path d="M16 10a4 4 0 0 1-8 0"/>
                            </svg>
                        </div>
                        <div class="display-4 fw-bold text-success mb-2">250</div>
                        <div class="text-secondary">tonnes de légumes récoltés</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center stat-card transition-all" style="transition: all 0.3s;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3"
                             style="width: 64px; height: 64px; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                        <div class="display-4 fw-bold text-success mb-2">1500</div>
                        <div class="text-secondary">personnes sensibilisées/an</div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="text-center stat-card transition-all" style="transition: all 0.3s;">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-3"
                             style="width: 64px; height: 64px; background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#059669" stroke-width="2">
                                <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
                            </svg>
                        </div>
                        <div class="display-4 fw-bold text-success mb-2">60</div>
                        <div class="text-secondary">salariés dont 45 en insertion</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <!-- Footer -->
    <footer class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center bg-gradient me-3" 
                             style="width: 48px; height: 48px; background: linear-gradient(135deg, #059669 0%, #047857 100%);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"/>
                                <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="h5 mb-0">Les Jardins de Cocagne</h3>
                            <p class="mb-0 small text-success">Thaon-les-Vosges</p>
                        </div>
                    </div>
                    <p class="text-light opacity-75">
                        Association d'insertion par le maraîchage biologique depuis 1994. 
                        Cultivons ensemble un avenir plus vert et solidaire.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-white opacity-75 hover-success text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white opacity-75 hover-success text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                            </svg>
                        </a>
                        <a href="#" class="text-white opacity-75 hover-success text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="fw-bold mb-3">Navigation</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="text-light opacity-75 text-decoration-none hover-success">Accueil</a></li>
                        <li class="mb-2"><a href="/paniers" class="text-light opacity-75 text-decoration-none hover-success">Paniers</a></li>
                        <li class="mb-2"><a href="{{ route('depots.index') }}" class="text-light opacity-75 text-decoration-none hover-success">Points de dépôt</a></li>
                        <li class="mb-2"><a href="/magasin" class="text-light opacity-75 text-decoration-none hover-success">Magasin</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5 class="fw-bold mb-3">Association</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/association" class="text-light opacity-75 text-decoration-none hover-success">Qui sommes-nous</a></li>
                        <li class="mb-2"><a href="/adhesion" class="text-light opacity-75 text-decoration-none hover-success">Adhérer</a></li>
                        <li class="mb-2"><a href="/contact" class="text-light opacity-75 text-decoration-none hover-success">Contact</a></li>
                        <li class="mb-2"><a href="#" class="text-light opacity-75 text-decoration-none hover-success">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <ul class="list-unstyled text-light opacity-75">
                        <li class="mb-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            Rue de l'Agriculture, 88150 Thaon-les-Vosges
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            03 29 00 00 00
                        </li>
                        <li class="mb-2 d-flex align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="me-2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            contact@jardins-cocagne-thaon.fr
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="my-4 border-secondary">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0 text-light opacity-75 small">
                        &copy; 2024 Les Jardins de Cocagne Thaon-les-Vosges. Tous droits réservés.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0 text-success small">
                        🌱 Cultivons l'avenir ensemble
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>