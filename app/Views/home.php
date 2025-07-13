<?php
// Traitement du formulaire de contact avec la fonction mail() native PHP
$message_envoye = false;
$message_erreur = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $to = 'contact@edwyn.neopolyworks.fr';
    $subject = 'Nouveau message portfolio de ' . htmlspecialchars($_POST['name']);
    $from = 'contact@edwyn.neopolyworks.fr';
    $replyTo = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : $from;

    $headers = "From: Portfolio Edwyn <{$from}>\r\n";
    $headers .= "Reply-To: {$replyTo}\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $body = nl2br(htmlspecialchars($_POST['message'])) . '<br><br>Email: ' . htmlspecialchars($_POST['email']);

    if (mail($to, $subject, $body, $headers)) {
        $message_envoye = true;
    } else {
        $message_erreur = "Erreur lors de l'envoi du message. Veuillez réessayer.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Métadonnées principales -->
    <title>Portfolio - Edwyn Lengrand</title>
    <meta name="description" content="Développeur full-stack basé dans le Nord. Spécialisé en JS, PHP, SQL, HTML/CSS, Python, Lua et C++.">
    <meta name="keywords" content="Edwyn Lengrand, développeur web, full-stack, javascript, typescript, php, sql, python, lua, c++, nord, portfolio développeur">
    <meta name="author" content="Edwyn Lengrand">
    <meta name="robots" content="index, follow">
    <meta name="language" content="French">

    <!-- Métadonnées Open Graph (Facebook, LinkedIn) -->
    <meta property="og:title" content="Portfolio - Edwyn Lengrand">
    <meta property="og:description" content="Développeur full-stack basé dans le Nord (59), maîtrisant JS, PHP, SQL, HTML/CSS, Python, Lua et C++.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://edwyn.neopolyworks.fr/">
    <meta property="og:locale" content="fr_FR">
    <meta property="og:site_name" content="Portfolio Edwyn Lengrand">

    <!-- Métadonnées Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Portfolio - Edwyn Lengrand">
    <meta name="twitter:description" content="Développeur full-stack dans le Nord, passionné par le code propre et les technologies modernes.">

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
    <link rel="preload" href="../../assets/CSS/home.css" as="style">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js" as="script">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="../../assets/CSS/home.css">
    <!-- Devicon pour les icônes de langages -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.16.0/devicon.min.css">
    <!-- Font Awesome pour les icônes de contact -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <!-- Swiper pour les carrousels -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.css">
    
    <!-- Données structurées JSON-LD -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Edwyn Lengrand",
            "jobTitle": "Développeur Full-Stack",
            "description": "Développeur full-stack basé dans le Nord, maîtrisant JS, PHP, SQL, HTML/CSS, Python, Lua et C++.",
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
                "name": "Développeur Full-Stack",
                "occupationLocation": {
                    "@type": "City",
                    "name": "Nord (59)"
                }
            }
        }
    </script>
</head>

<body>
    <!-- Loader -->
    <div id="loader" class="loader">
        <div class="loader-content">
            <div class="loader-spinner"></div>
            <p>Chargement...</p>
        </div>
    </div>

    <!-- Navigation -->
    <nav role="navigation" aria-label="Navigation principale">
        <div class="nav-container">
            <a href="#" class="logo" aria-label="Accueil du portfolio">EDWYN LENGRAND</a>
            <ul class="nav-links">
                <li><a href="#about" aria-label="Section À propos">À PROPOS</a></li>
                <li><a href="#skills" aria-label="Section Compétences">COMPÉTENCES</a></li>
                <li><a href="#contact" aria-label="Section Contact">CONTACT</a></li>
            </ul>
            <button class="mobile-menu-toggle" aria-label="Menu mobile">
                <span></span>
                <span></span>
                <span></span>
            </button>
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
            <h1 data-aos="fade-up">DEV FULL-STACK</h1>
            <p data-aos="fade-up" data-aos-delay="200"><?php echo date('Y') - 2015 ?> ans d'expérience en programmation, spécialisé dans le Web</p>
            <div class="hero-buttons" data-aos="fade-up" data-aos-delay="400">
                <a href="#contact" class="cta-button" aria-label="Me contacter">ME CONTACTER</a>
            </div>
            <!-- Indicateur de scroll -->
            <div class="scroll-indicator" data-aos="fade-in" data-aos-delay="800">
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="about" class="section" role="main">
        <h2 data-aos="fade-up">À PROPOS</h2>
        <div class="about-content">
            <div class="about-text" data-aos="fade-right">
                <p>Développeur passionné depuis 10 ans, je me suis spécialisé dans le développement web depuis 2 ans après l'obtention de mon diplôme Bac+2 Développeur Web et Web Mobile.</p>
                <p>Je maîtrise un large éventail de technologies, du front-end au back-end.</p>
                <p>Basé dans le Nord (59), je suis disponible pour tout type de projet de développement, qu'il s'agisse de création de sites web, d'applications ou de solutions sur mesure.</p>
                
                <!-- Timeline -->
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                        <div class="timeline-date">2015</div>
                        <div class="timeline-content">
                            <h4>Début en programmation</h4>
                            <p>Découverte du code avec Python</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                        <div class="timeline-date">2023</div>
                        <div class="timeline-content">
                            <h4>Diplôme Développeur Web</h4>
                            <p>Bac+2 Développeur Web et Web Mobile</p>
                        </div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="timeline-date">2025</div>
                        <div class="timeline-content">
                            <h4>Développeur Full-Stack</h4>
                            <p>Spécialisé dans les technologies web modernes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-stats" data-aos="fade-left">
                <div class="stat" data-aos="zoom-in" data-aos-delay="100">
                    <span class="stat-number" data-count="<?php echo date('Y') - 2015 ?>">0</span>
                    <span class="stat-label">ANNÉES DE CODE</span>
                </div>
                <div class="stat" data-aos="zoom-in" data-aos-delay="200">
                    <span class="stat-number" data-count="8">0</span>
                    <span class="stat-label">LANGAGES</span>
                </div>
                <div class="stat" data-aos="zoom-in" data-aos-delay="300">
                    <span class="stat-number" data-count="<?php echo date('Y') - 2023 ?>">0</span>
                    <span class="stat-label">ANS DE WEB</span>
                </div>
                <div class="stat" data-aos="zoom-in" data-aos-delay="400">
                    <span class="stat-number" data-count="100">0</span>
                    <span class="stat-label">% PASSION</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="section">
        <h2 data-aos="fade-up">MES COMPÉTENCES</h2>
        
        <!-- Filtres de compétences -->
        <div class="skills-filter" data-aos="fade-up" data-aos-delay="200">
            <button class="filter-btn active" data-filter="all">TOUTES</button>
            <button class="filter-btn" data-filter="frontend">FRONTEND</button>
            <button class="filter-btn" data-filter="backend">BACKEND</button>
            <button class="filter-btn" data-filter="database">DATABASE</button>
            <button class="filter-btn" data-filter="other">AUTRES</button>
        </div>

        <div class="cards-grid">
            <div class="card skill-card" data-category="frontend" data-aos="fade-up" data-aos-delay="100">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="72">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">90%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-javascript-plain colored" title="JavaScript" style="font-size:2em;vertical-align:middle;"></i>
                    JavaScript
                </h3>
                <div class="skill-level">Très bon niveau</div>
                <p>Expérience approfondie en développement front-end et back-end avec Node.js. Maîtrise des frameworks modernes comme React et Vue.</p>
            </div>
            
            <div class="card skill-card" data-category="backend" data-aos="fade-up" data-aos-delay="200">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="71">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">85%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-php-plain colored" title="PHP" style="font-size:2em;vertical-align:middle;"></i>
                    PHP
                </h3>
                <div class="skill-level">Très bon niveau</div>
                <p>Développement back-end robuste avec PHP, expérience avec le frameworks Symfony.</p>
            </div>
            
            <div class="card skill-card" data-category="database" data-aos="fade-up" data-aos-delay="300">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="68">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">75%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-mysql-plain colored" title="SQL" style="font-size:2em;vertical-align:middle;"></i>
                    SQL
                </h3>
                <div class="skill-level">Bon niveau</div>
                <p>Conception et optimisation de bases de données relationnelles. Expérience avec MySQL, PostgreSQL et MongoDB.</p>
            </div>
            
            <div class="card skill-card" data-category="frontend" data-aos="fade-up" data-aos-delay="400">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="73">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">95%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-html5-plain colored" title="HTML5" style="font-size:2em;vertical-align:middle;"></i>
                    <i class="devicon-css3-plain colored" title="CSS3" style="font-size:2em;vertical-align:middle;"></i>
                    HTML/CSS
                </h3>
                <div class="skill-level">Expert</div>
                <p>Création d'interfaces responsive et accessibles. Maîtrise de CSS (Flexbox, Grid, animations) et préprocesseurs comme SASS.</p>
            </div>
            
            <div class="card skill-card" data-category="frontend" data-aos="fade-up" data-aos-delay="500">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="65">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">60%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-typescript-plain colored" title="TypeScript" style="font-size:2em;vertical-align:middle;"></i>
                    TypeScript
                </h3>
                <div class="skill-level">En apprentissage</div>
                <p>Actuellement en phase d'apprentissage approfondi pour appliquer les types à mes projets JavaScript existants.</p>
            </div>
            
            <div class="card skill-card" data-category="other" data-aos="fade-up" data-aos-delay="600">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="67">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">70%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-python-plain colored" title="Python" style="font-size:2em;vertical-align:middle;"></i>
                    Python
                </h3>
                <div class="skill-level">Premises</div>
                <p>Le language qui m'as fais découvrir la programmation.</p>
            </div>
            
            <div class="card skill-card" data-category="other" data-aos="fade-up" data-aos-delay="700">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="62">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">50%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-lua-plain colored" title="Lua" style="font-size:2em;vertical-align:middle;"></i>
                    Lua
                </h3>
                <div class="skill-level">En apprentissage</div>
                <p>Expérience dans le développement de scripts et de mods pour diverses plateformes et moteurs de jeu. Roblox Studio notamment.</p>
            </div>
            
            <div class="card skill-card" data-category="other" data-aos="fade-up" data-aos-delay="800">
                <div class="skill-progress">
                    <div class="progress-circle" data-percentage="61">
                        <svg>
                            <circle cx="50" cy="50" r="45"></circle>
                            <circle cx="50" cy="50" r="45" class="progress"></circle>
                        </svg>
                        <div class="percentage">45%</div>
                    </div>
                </div>
                <h3>
                    <i class="devicon-cplusplus-plain colored" title="C++" style="font-size:2em;vertical-align:middle;"></i>
                    C++
                </h3>
                <div class="skill-level">En apprentissage</div>
                <p>Actuellement sur le conception de jeux-video, ce language est en cours d'apprentissage.</p>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="section">
        <h2 data-aos="fade-up">CONTACTEZ-MOI</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="200">Discutons de votre projet</p>
        
        <div class="contact-grid">
            <div class="contact-info" data-aos="fade-right" data-aos-delay="400">
                <div class="contact-item">
                    <i class="fa-solid fa-envelope" aria-hidden="true" style="font-size:1.3em;color:#6c757d;"></i>
                    <div>
                        <h4>Email</h4>
                        <a href="mailto:contact.edwyn@gmail.com" style="color:rgb(50, 53, 56);">contact.edwyn@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-phone" aria-hidden="true" style="font-size:1.3em;color:#6c757d;"></i>
                    <div>
                        <h4>Téléphone</h4>
                        <a href="tel:+33603086036" style="color: rgb(50, 53, 56);">+33 6 03 08 60 36</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-location-dot" aria-hidden="true" style="font-size:1.3em;color:#6c757d;"></i>
                    <div>
                        <h4>Localisation</h4>
                        <a href="https://maps.app.goo.gl/ZPzH6JdsfVmmhtKB9" target="_blank" rel="noopener noreferrer" style="color: rgb(50, 53, 56);">Nord (59), France</a>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="fa-solid fa-user-check" aria-hidden="true" style="font-size:1.3em;color:#6c757d;"></i>
                    <div>
                        <h4>Disponibilité</h4>
                        <span>Disponible pour tout projet</span>
                    </div>
                </div>
                
                <!-- Calendrier de disponibilité -->
                <div class="availability-calendar" data-aos="fade-up" data-aos-delay="600">
                    <h4>Mes disponibilités cette semaine</h4>
                    <div class="calendar-week">
                        <?php
                        $jours = ['Lun', 'Mar', 'Mer', 'Jeu', 'Ven'];
                        $disponibilites = [true, true, true, true, true];
                        for ($i = 0; $i < 5; $i++):
                        ?>
                        <div class="calendar-day <?php echo $disponibilites[$i] ? 'available' : 'busy'; ?>">
                            <span class="day-name"><?php echo $jours[$i]; ?></span>
                            <span class="day-status">
                                <?php echo $disponibilites[$i] ? 'Libre' : 'Occupé'; ?>
                            </span>
                        </div>
                        <?php endfor; ?>
                        <div class="calendar-day busy">
                            <span class="day-name">Sam</span>
                            <span class="day-status">Weekend</span>
                        </div>
                        <div class="calendar-day busy">
                            <span class="day-name">Dim</span>
                            <span class="day-status">Weekend</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <form class="contact-form" method="POST" action="#contact" data-aos="fade-left" data-aos-delay="400">
                <?php if ($message_envoye): ?>
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle"></i>
                        Votre message a bien été envoyé !
                    </div>
                <?php elseif ($message_erreur): ?>
                    <div class="alert alert-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <?= $message_erreur ?>
                    </div>
                <?php endif; ?>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">VOTRE NOM</label>
                        <input type="text" id="name" name="name" required>
                        <span class="form-line"></span>
                    </div>
                    <div class="form-group">
                        <label for="email">VOTRE EMAIL</label>
                        <input type="email" id="email" name="email" required>
                        <span class="form-line"></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="subject">SUJET</label>
                    <select id="subject" name="subject" required>
                        <option value="">Sélectionnez un sujet</option>
                        <option value="site-web">Création de site web</option>
                        <option value="application">Développement d'application</option>
                        <option value="maintenance">Maintenance/Support</option>
                        <option value="consultation">Consultation</option>
                        <option value="autre">Autre</option>
                    </select>
                    <span class="form-line"></span>
                </div>
                
                <div class="form-group">
                    <label for="budget">BUDGET ESTIMÉ</label>
                    <select id="budget" name="budget">
                        <option value="">Sélectionnez une fourchette</option>
                        <option value="500-1000">500€ - 1000€</option>
                        <option value="1000-3000">1000€ - 3000€</option>
                        <option value="3000-5000">3000€ - 5000€</option>
                        <option value="5000+">5000€+</option>
                        <option value="a-discuter">À discuter</option>
                    </select>
                    <span class="form-line"></span>
                </div>
                
                <div class="form-group">
                    <label for="message">VOTRE MESSAGE</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Décrivez votre projet..."></textarea>
                    <span class="form-line"></span>
                </div>
                
                <button type="submit" class="cta-button submit-btn">
                    <span class="btn-text">ENVOYER</span>
                    <span class="btn-loading">
                        <i class="fas fa-spinner fa-spin"></i>
                        Envoi en cours...
                    </span>
                </button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>EDWYN LENGRAND</h4>
                <p>Développeur Full-Stack passionné, créant des solutions web modernes et performantes.</p>
            </div>
            <div class="footer-section">
                <h4>LIENS RAPIDES</h4>
                <ul>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#skills">Compétences</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>CONTACT</h4>
                <p><i class="fas fa-envelope"></i> contact.edwyn@gmail.com</p>
                <p><i class="fas fa-phone"></i> +33 6 03 08 60 36</p>
                <p><i class="fas fa-map-marker-alt"></i> Nord (59), France</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Edwyn Lengrand. Tous droits réservés.</p>
            <div class="footer-links">
                <a href="#" onclick="showModal('privacy')">Politique de confidentialité</a>
                <a href="#" onclick="showModal('terms')">Mentions légales</a>
            </div>
        </div>
    </footer>

    <!-- Modales -->
    <div id="privacy-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('privacy')">&times;</span>
            <h3>Politique de confidentialité</h3>
            <p>Vos données personnelles sont traitées dans le respect du RGPD. Elles ne sont utilisées que pour répondre à vos demandes de contact et ne sont jamais partagées avec des tiers.</p>
        </div>
    </div>

    <div id="terms-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('terms')">&times;</span>
            <h3>Mentions légales</h3>
            <p><strong>Éditeur :</strong> Edwyn Lengrand<br>
            <strong>Email :</strong> contact.edwyn@gmail.com<br>
            <strong>Hébergement :</strong> Hostinger</p>
        </div>
    </div>

    <!-- Bouton retour en haut -->
    <button id="back-to-top" class="back-to-top" aria-label="Retour en haut">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="../../assets/JS/home.js"></script>
</body>

</html>