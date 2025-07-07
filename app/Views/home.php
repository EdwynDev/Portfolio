<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Métadonnées principales -->
    <title>Edwyn Lengrand | Développeur Web & Logiciel</title>
    <meta name="description" content="Portfolio d'Edwyn Lengrand, développeur web et logiciel basé dans le Nord. Passionné, polyvalent, toujours prêt pour de nouveaux défis.">
    <meta name="keywords" content="Edwyn Lengrand, développeur web, full-stack, javascript, python, nord, portfolio développeur">
    <meta name="author" content="Edwyn Lengrand">
    <meta name="robots" content="index, follow">
    <meta name="language" content="French">

    <!-- Métadonnées Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="Portfolio - Edwyn Lengrand">
    <meta property="og:description" content="Développeur basé dans le Nord (59), maîtrisant JS, PHP, SQL, HTML/CSS, Python et plus. Disponible pour tout projet.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://edwyn.neopolyworks.fr/">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Portfolio Edwyn Lengrand">

    <!-- Métadonnées Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio - Edwyn Lengrand">
    <meta name="twitter:description" content="Développeur dans le Nord, passionné par le code propre et les expériences numériques.">

    <!-- Favicon et icônes -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Métadonnées thème -->
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-TileColor" content="#000000">

    <!-- Préchargement des ressources critiques -->
    <link rel="preload" href="../../assets/CSS/home.css?v=2" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" as="script">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="../../assets/CSS/home.css?v=2">

    <!-- Données structurées JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Edwyn Lengrand",
            "jobTitle": "Développeur Web & Logiciel",
            "description": "Développeur full-stack basé dans le Nord, maîtrisant JS, PHP, SQL, HTML/CSS, Python, etc.",
            "url": "https://edwyn.neopolyworks.fr/",
            "sameAs": [],
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Nord (59)",
                "addressCountry": "France"
            },
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+33 6 03 08 60 36",
                "email": "contact.edwyn@gmail.com",
                "contactType": "travail"
            },
            "hasOccupation": {
                "@type": "Occupation",
                "name": "Développeur Web & Logiciel",
                "occupationLocation": {
                    "@type": "City",
                    "name": "Nord (59)"
                }
            }
        }
    </script>
</head>

<body>
    <!-- Navigation -->
    <nav role="navigation" aria-label="Navigation principale">
        <div class="nav-container">
            <a href="#" class="logo" aria-label="Accueil du portfolio">PORTFOLIO</a>
            <ul class="nav-links">
                <li><a href="#about" aria-label="Section À propos">À PROPOS</a></li>
                <li><a href="#work" aria-label="Section Travaux">TRAVAUX</a></li>
                <li><a href="#experience" aria-label="Section Expérience">EXPÉRIENCE</a></li>
                <li><a href="#contact" aria-label="Section Contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <!-- Canvas Three.js -->
    <canvas id="threejs-canvas" aria-hidden="true"></canvas>

    <!-- Arrière-plan géométrique -->
    <div class="geometric-bg" aria-hidden="true">
        <div class="geo-element"></div>
        <div class="geo-element"></div>
        <div class="geo-element"></div>
    </div>

    <!-- Section Hero -->
    <section class="hero" role="banner">
        <div class="hero-content">
            <h1>DÉVELOPPEUR CRÉATIF</h1>
            <p>Création d'expériences numériques à travers du code propre et un design moderne</p>
            <button class="cta-button" aria-label="Explorer mes travaux">EXPLORER MES TRAVAUX</button>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="about" class="section" role="main">
        <h2 class="fade-in">À PROPOS</h2>
        <div class="about-content">
            <div class="about-text fade-in">
                <p>Je suis un développeur créatif passionné par la création d'expériences numériques exceptionnelles. Avec un focus sur un code propre et efficace et des principes de design moderne, je crée des solutions qui sont à la fois fonctionnelles et esthétiques.</p>
                <p>Mon approche combine l'expertise technique avec une vision créative, garantissant que chaque projet offre des performances optimales et une expérience utilisateur remarquable.</p>
            </div>
            <div class="about-stats fade-in">
                <div class="stat">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">PROJETS</span>
                </div>
                <div class="stat">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">ANNÉES</span>
                </div>
                <div class="stat">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">SATISFACTION</span>
                </div>
                <div class="stat">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">SUPPORT</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Travaux -->
    <section id="work" class="section">
        <h2 class="fade-in">TRAVAUX SÉLECTIONNÉS</h2>
        <div class="cards-grid">
            <div class="card fade-in">
                <h3>PLATEFORME E-COMMERCE</h3>
                <p>Solution e-commerce moderne avec filtrage avancé, gestion d'inventaire en temps réel et expérience de commande fluide.</p>
            </div>
            <div class="card fade-in">
                <h3>SITE WEB CORPORATE</h3>
                <p>Site web corporate responsive avec CMS personnalisé, éléments interactifs et performances optimisées pour un public international.</p>
            </div>
            <div class="card fade-in">
                <h3>APPLICATION MOBILE</h3>
                <p>Application mobile cross-platform avec interface intuitive, synchronisation de données en temps réel et fonctionnalité hors ligne.</p>
            </div>
            <div class="card fade-in">
                <h3>VISUALISATION DE DONNÉES</h3>
                <p>Tableau de bord interactif pour la visualisation de données complexes avec mises à jour en temps réel et fonctionnalités de reporting personnalisables.</p>
            </div>
            <div class="card fade-in">
                <h3>IDENTITÉ DE MARQUE</h3>
                <p>Conception d'identité de marque complète incluant logo, typographie, palette de couleurs et documentation des directives de marque.</p>
            </div>
            <div class="card fade-in">
                <h3>APPLICATION WEB</h3>
                <p>Application web full-stack avec architecture moderne, intégration API et système avancé de gestion des utilisateurs.</p>
            </div>
        </div>
    </section>

    <!-- Section Expérience -->
    <section id="experience" class="section">
        <h2 class="fade-in">EXPÉRIENCE</h2>
        <div class="timeline">
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2023 - PRÉSENT</div>
                    <h3 class="timeline-title">DÉVELOPPEUR SENIOR</h3>
                    <p>Direction d'équipe de développement et architecture de solutions évolutives pour clients entreprise. Focus sur les frameworks modernes et l'optimisation des performances.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2021 - 2023</div>
                    <h3 class="timeline-title">DÉVELOPPEUR FULL-STACK</h3>
                    <p>Développement et maintenance d'applications web utilisant des technologies modernes. Collaboration avec les équipes de design pour implémenter des interfaces au pixel près.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2020 - 2021</div>
                    <h3 class="timeline-title">DÉVELOPPEUR FRONTEND</h3>
                    <p>Spécialisation dans la création d'interfaces utilisateur responsives et interactives. Focus sur l'optimisation des performances et la compatibilité cross-browser.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2019 - 2020</div>
                    <h3 class="timeline-title">DÉVELOPPEUR JUNIOR</h3>
                    <p>Début de carrière en développant les compétences fondamentales en développement web. Contribution à divers projets et apprentissage des bonnes pratiques.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="section">
        <h2 class="fade-in">PRENONS CONTACT</h2>
        <div class="contact-grid">
            <div class="contact-info fade-in">
                <div class="contact-item">
                    <span>EMAIL</span>
                    <span>contact.edwyn@gmail.com</span>
                </div>
                <div class="contact-item">
                    <span>TÉLÉPHONE</span>
                    <span>+33 6 03 08 60 36</span>
                </div>
                <div class="contact-item">
                    <span>LOCALISATION</span>
                    <span>Nord (59), France</span>
                </div>
                <div class="contact-item">
                    <span>DISPONIBILITÉ</span>
                    <span>Disponible pour tout projet</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../../assets/JS/home.js?v=2"></script>
</body>

</html>