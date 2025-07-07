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
    <title>Edwyn Lengrand | Développeur Full-Stack</title>
    <meta name="description" content="Portfolio d'Edwyn Lengrand, développeur full-stack basé dans le Nord. Spécialisé en JS, PHP, SQL, HTML/CSS, Python, Lua et C++.">
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
    <!-- Navigation -->
    <nav role="navigation" aria-label="Navigation principale">
        <div class="nav-container">
            <a href="#" class="logo" aria-label="Accueil du portfolio">EDWYN LENGRAND</a>
            <ul class="nav-links">
                <li><a href="#about" aria-label="Section À propos">À PROPOS</a></li>
                <li><a href="#skills" aria-label="Section Compétences">COMPÉTENCES</a></li>
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
            <h1>DEV FULL-STACK</h1>
            <p>10 ans d'expérience en programmation, spécialisé dans les technologies web modernes</p>
            <a href="#contact" class="cta-button" aria-label="Me contacter">ME CONTACTER</a>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="about" class="section" role="main">
        <h2 class="fade-in">À PROPOS</h2>
        <div class="about-content">
            <div class="about-text fade-in">
                <p>Développeur passionné depuis 10 ans, je me suis spécialisé dans le développement web depuis 2 ans après l'obtention de mon diplôme Bac+2 Développeur Web et Web Mobile.</p>
                <p>Je maîtrise un large éventail de technologies, du front-end au back-end.</p>
                <p>Basé dans le Nord (59), je suis disponible pour tout type de projet de développement, qu'il s'agisse de création de sites web, d'applications ou de solutions sur mesure.</p>
            </div>
            <div class="about-stats fade-in">
                <div class="stat">
                    <span class="stat-number"><?php echo date('Y')-2015 ?></span>
                    <span class="stat-label">ANNÉES DE CODE</span>
                </div>
                <div class="stat">
                    <span class="stat-number">8</span>
                    <span class="stat-label">LANGAGES</span>
                </div>
                <div class="stat">
                    <span class="stat-number"><?php echo date('Y')-2023 ?></span>
                    <span class="stat-label">ANS DE WEB</span>
                </div>
                <div class="stat">
                    <span class="stat-number">100%</span>
                    <span class="stat-label">PASSION</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Compétences -->
    <section id="skills" class="section">
        <h2 class="fade-in">MES COMPÉTENCES</h2>
        <div class="cards-grid">
            <div class="card fade-in">
                <h3>
                    <i class="devicon-javascript-plain colored" title="JavaScript" style="font-size:2em;vertical-align:middle;"></i>
                    JavaScript
                </h3>
                <div class="skill-level">Très bon niveau</div>
                <p>Expérience approfondie en développement front-end et back-end avec Node.js. Maîtrise des frameworks modernes comme React et Vue.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-php-plain colored" title="PHP" style="font-size:2em;vertical-align:middle;"></i>
                    PHP
                </h3>
                <div class="skill-level">Très bon niveau</div>
                <p>Développement back-end robuste avec PHP, expérience avec le frameworks Symfony.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-mysql-plain colored" title="SQL" style="font-size:2em;vertical-align:middle;"></i>
                    SQL
                </h3>
                <div class="skill-level">Bon niveau</div>
                <p>Conception et optimisation de bases de données relationnelles. Expérience avec MySQL, PostgreSQL et MongoDB.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-html5-plain colored" title="HTML5" style="font-size:2em;vertical-align:middle;"></i>
                    <i class="devicon-css3-plain colored" title="CSS3" style="font-size:2em;vertical-align:middle;"></i>
                    HTML/CSS
                </h3>
                <div class="skill-level">Expert</div>
                <p>Création d'interfaces responsive et accessibles. Maîtrise de CSS (Flexbox, Grid, animations) et préprocesseurs comme SASS.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-typescript-plain colored" title="TypeScript" style="font-size:2em;vertical-align:middle;"></i>
                    TypeScript
                </h3>
                <div class="skill-level">En apprentissage</div>
                <p>Actuellement en phase d'apprentissage approfondi pour appliquer les types à mes projets JavaScript existants.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-python-plain colored" title="Python" style="font-size:2em;vertical-align:middle;"></i>
                    Python
                </h3>
                <div class="skill-level">Premises</div>
                <p>Le language qui m'as fais découvrir la programmation.</p>
            </div>
            <div class="card fade-in">
                <h3>
                    <i class="devicon-lua-plain colored" title="Lua" style="font-size:2em;vertical-align:middle;"></i>
                    Lua
                </h3>
                <div class="skill-level">En apprentissage</div>
                <p>Expérience dans le développement de scripts et de mods pour diverses plateformes et moteurs de jeu. Roblox Studio notamment.</p>
            </div>
            <div class="card fade-in">
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
        <h2 class="fade-in">CONTACTEZ-MOI</h2>
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
            <form class="contact-form fade-in" method="POST" action="#contact">
                <?php if ($message_envoye): ?>
                    <div style="color:green;margin-bottom:1rem;">Votre message a bien été envoyé !</div>
                <?php elseif ($message_erreur): ?>
                    <div style="color:red;margin-bottom:1rem;"><?= $message_erreur ?></div>
                <?php endif; ?>
                <div class="form-group">
                    <label for="name">VOTRE NOM</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">VOTRE EMAIL</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">VOTRE MESSAGE</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="cta-button" aria-label="Envoyer le message" style="opacity:1;transform:none;">ENVOYER</button>
            </form>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="../../assets/JS/home.js"></script>
</body>

</html>