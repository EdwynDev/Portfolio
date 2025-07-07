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
            <a href="#" class="logo" aria-label="Accueil du portfolio">EDWYN.L</a>
            <ul class="nav-links">
                <li><a href="#about" aria-label="Section À propos">À PROPOS</a></li>
                <li><a href="#skills" aria-label="Section Compétences">COMPÉTENCES</a></li>
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
            <h1>EDWYN LENGRAND</h1>
            <p>Développeur Web & Logiciel - Passionné par le code propre et les technologies modernes</p>
            <button class="cta-button" aria-label="Me contacter" onclick="location.href='#contact'">ME CONTACTER</button>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="about" class="section" role="main">
        <h2 class="fade-in">À PROPOS</h2>
        <div class="about-content">
            <div class="about-text fade-in">
                <p>Je suis <strong>Edwyn Lengrand</strong>, développeur passionné avec plus de <strong>10 ans d'expérience</strong> dans le développement logiciel, spécialisé dans le développement web depuis 2 ans.</p>
                <p>Diplômé d'un <strong>Bac+2 en Développement Web et Web Mobile</strong>, je combine une solide base technique avec une passion pour la création de solutions innovantes et performantes.</p>
                <p>Mon approche se concentre sur l'écriture de <strong>code propre, maintenable et efficace</strong>. Je suis constamment à la recherche de nouveaux défis pour perfectionner mes compétences et explorer de nouvelles technologies.</p>
                <p>Basé dans le <strong>Nord (59)</strong>, je suis disponible pour tout type de projet, du développement d'applications web à la création de solutions logicielles sur mesure.</p>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="section">
        <h2 class="fade-in">MES COMPÉTENCES</h2>
        <div class="cards-grid">
            <!-- JavaScript -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fab fa-js"></i></div>
                <h3>JavaScript</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- PHP -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fab fa-php"></i></div>
                <h3>PHP</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- SQL -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fas fa-database"></i></div>
                <h3>SQL</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- CSS -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fab fa-css3-alt"></i></div>
                <h3>CSS</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- HTML -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fab fa-html5"></i></div>
                <h3>HTML</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- Python -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fab fa-python"></i></div>
                <h3>Python</h3>
                <p>En apprentissage - Bon niveau</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 70%"></div>
                </div>
            </div>

            <!-- TypeScript -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fas fa-code"></i></div>
                <h3>TypeScript</h3>
                <p>En apprentissage - Niveau intermédiaire</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 65%"></div>
                </div>
            </div>

            <!-- Lua -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fas fa-gamepad"></i></div>
                <h3>Lua</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>

            <!-- C++ -->
            <div class="card fade-in">
                <div class="skill-icon"><i class="fas fa-plus"></i></div>
                <h3>C++</h3>
                <p>Maîtrise parfaite - Expert</p>
                <div class="skill-bar">
                    <div class="skill-level" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Expérience -->
    <section id="experience" class="section">
        <h2 class="fade-in">EXPÉRIENCE</h2>
        <div class="timeline">
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2022 - PRÉSENT</div>
                    <h3 class="timeline-title">DÉVELOPPEMENT WEB PROFESSIONNEL</h3>
                    <p>Spécialisation dans le développement web après l'obtention de mon diplôme DWWM (Bac+2). Création de sites web responsives, applications web et solutions full-stack.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2014 - PRÉSENT</div>
                    <h3 class="timeline-title">DÉVELOPPEMENT LOGICIEL</h3>
                    <p>Plus de 10 ans d'expérience dans le développement logiciel avec divers langages (C++, Lua, Python). Conception et implémentation de solutions logicielles robustes et performantes.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2020 - 2022</div>
                    <h3 class="timeline-title">FORMATION DÉVELOPPEMENT WEB</h3>
                    <p>Formation intensive en développement web et web mobile, acquisition des compétences frontend et backend, et obtention du diplôme DWWM (Bac+2).</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2014 - 2020</div>
                    <h3 class="timeline-title">PROJETS PERSONNELS & AUTO-FORMATION</h3>
                    <p>Développement de divers projets personnels et auto-formation dans différents langages de programmation. Acquisition de compétences solides en résolution de problèmes et algorithmie.</p>
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
                <div class="contact-item">
                    <span>DIPLÔME</span>
                    <span>Bac+2 Développement Web et Web Mobile</span>
                </div>
            </div>

            <div class="contact-form fade-in">
                <h3>ENVOYEZ-MOI UN MESSAGE</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="cta-button">ENVOYER</button>
                </form>
            </div>
        </div>

        <div class="social-links">
            <a href="mailto:contact.edwyn@gmail.com" class="social-icon" aria-label="Envoyer un email">
                <i class="fas fa-envelope"></i>
            </a>
            <a href="tel:+33603086036" class="social-icon" aria-label="Téléphoner">
                <i class="fas fa-phone"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Profil GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="#" class="social-icon" aria-label="Profil LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date('YYYY') ?> Edwyn Lengrand - Tous droits réservés</p>
        <p>Développeur Web & Logiciel | Nord (59), France</p>
    </footer>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../../assets/JS/home.js?v=2"></script>
</body>

</html>