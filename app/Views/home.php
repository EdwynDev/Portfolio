<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edwyn Lengrand | Développeur Web & Logiciel</title>
    <meta name="description" content="Portfolio d'Edwyn Lengrand, développeur web et logiciel basé dans le Nord. Passionné par le code propre et les technologies modernes.">
    <meta name="keywords" content="Edwyn Lengrand, développeur web, full-stack, javascript, typescript, php, sql, css, html, python, lua, c++, nord">
    <meta name="author" content="Edwyn Lengrand">
    
    <!-- Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>💻</text></svg>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto+Mono:wght@300;400;500&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --primary: #1a1a2e;
            --secondary: #16213e;
            --accent: #0f3460;
            --highlight: #e94560;
            --text: #f1f1f1;
            --text-secondary: #b8b8b8;
            --card-bg: rgba(25, 25, 46, 0.7);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
            position: relative;
            min-height: 100vh;
        }
        
        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 10% 20%, rgba(233, 69, 96, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(15, 52, 96, 0.1) 0%, transparent 20%);
            z-index: -1;
        }
        
        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            padding: 1.5rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            backdrop-filter: blur(10px);
            background: rgba(10, 10, 20, 0.7);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
            text-decoration: none;
            letter-spacing: 1px;
            transition: var(--transition);
        }
        
        .logo:hover {
            color: var(--highlight);
        }
        
        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }
        
        .nav-links a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            position: relative;
            padding: 0.5rem 0;
            transition: var(--transition);
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--highlight);
            transition: var(--transition);
        }
        
        .nav-links a:hover {
            color: var(--highlight);
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 0 5%;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 900px;
            z-index: 10;
        }
        
        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--text), var(--highlight));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: fadeInUp 1s ease;
        }
        
        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            color: var(--text-secondary);
            animation: fadeInUp 1s ease 0.2s forwards;
            opacity: 0;
        }
        
        .cta-button {
            background: var(--highlight);
            color: white;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            animation: fadeInUp 1s ease 0.4s forwards;
            opacity: 0;
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 15px rgba(233, 69, 96, 0.3);
        }
        
        .cta-button:hover {
            background: #ff2e4f;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(233, 69, 96, 0.4);
        }
        
        /* Sections */
        .section {
            padding: 8rem 5%;
            position: relative;
        }
        
        .section h2 {
            font-size: 2.5rem;
            margin-bottom: 4rem;
            text-align: center;
            position: relative;
            display: inline-block;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: var(--highlight);
            border-radius: 2px;
        }
        
        /* About Section */
        .about-content {
            display: flex;
            gap: 4rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .about-text {
            flex: 1;
            padding: 2rem;
            background: var(--card-bg);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .about-text p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
            line-height: 1.8;
        }
        
        .about-text p:last-child {
            margin-bottom: 0;
        }
        
        .about-text strong {
            color: var(--highlight);
        }
        
        .skills-grid {
            flex: 1;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }
        
        .skill-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 1.5rem;
            text-align: center;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            border-color: rgba(233, 69, 96, 0.3);
        }
        
        .skill-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: var(--highlight);
        }
        
        .skill-card h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }
        
        .skill-level {
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            margin: 1rem 0;
            overflow: hidden;
        }
        
        .level-bar {
            height: 100%;
            border-radius: 4px;
            background: var(--highlight);
        }
        
        .skill-info {
            font-size: 0.9rem;
            color: var(--text-secondary);
            font-style: italic;
        }
        
        /* Experience Section */
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 2px;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            width: 50%;
            padding: 2rem 3rem;
            margin-bottom: 2rem;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
            padding-right: 0;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
            padding-left: 0;
        }
        
        .timeline-content {
            background: var(--card-bg);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .timeline-date {
            color: var(--highlight);
            font-weight: 600;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .timeline-title {
            font-size: 1.4rem;
            margin-bottom: 1rem;
            color: var(--text);
        }
        
        /* Contact Section */
        .contact-grid {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
        
        .contact-info {
            background: var(--card-bg);
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .contact-item {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .contact-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }
        
        .contact-item span:first-child {
            display: block;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
        }
        
        .contact-item span:last-child {
            font-size: 1.1rem;
            font-weight: 500;
        }
        
        .social-links {
            display: flex;
            gap: 1.5rem;
            margin-top: 2rem;
            justify-content: center;
        }
        
        .social-icon {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--card-bg);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: var(--text);
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-icon:hover {
            background: var(--highlight);
            transform: translateY(-5px);
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background: rgba(10, 10, 20, 0.7);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            opacity: 0;
            animation: fadeInUp 1s ease forwards;
        }
        
        .slide-in-left {
            opacity: 0;
            transform: translateX(-100px);
            animation: slideInLeft 0.8s ease forwards;
        }
        
        .slide-in-right {
            opacity: 0;
            transform: translateX(100px);
            animation: slideInRight 0.8s ease forwards;
        }
        
        @keyframes slideInLeft {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                flex-direction: column;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 0;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
            
            .skills-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .section {
                padding: 5rem 5%;
            }
        }
        
        @media (max-width: 480px) {
            .skills-grid {
                grid-template-columns: 1fr;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
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
            
            <!-- Section Compétences -->
            <div id="skills" class="skills-grid">
                <div class="skill-card slide-in-left" style="animation-delay: 0.1s">
                    <div class="skill-icon"><i class="fab fa-js"></i></div>
                    <h3>JavaScript</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.2s">
                    <div class="skill-icon"><i class="fab fa-php"></i></div>
                    <h3>PHP</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.3s">
                    <div class="skill-icon"><i class="fas fa-database"></i></div>
                    <h3>SQL</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.4s">
                    <div class="skill-icon"><i class="fab fa-css3-alt"></i></div>
                    <h3>CSS</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.5s">
                    <div class="skill-icon"><i class="fab fa-html5"></i></div>
                    <h3>HTML</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.6s">
                    <div class="skill-icon"><i class="fab fa-python"></i></div>
                    <h3>Python</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 70%"></div>
                    </div>
                    <p class="skill-info">En apprentissage - Bon niveau</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.7s">
                    <div class="skill-icon"><i class="fas fa-code"></i></div>
                    <h3>TypeScript</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 65%"></div>
                    </div>
                    <p class="skill-info">En apprentissage - Niveau intermédiaire</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.8s">
                    <div class="skill-icon"><i class="fas fa-gamepad"></i></div>
                    <h3>Lua</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
                </div>
                
                <div class="skill-card slide-in-left" style="animation-delay: 0.9s">
                    <div class="skill-icon"><i class="fas fa-plus"></i></div>
                    <h3>C++</h3>
                    <div class="skill-level">
                        <div class="level-bar" style="width: 100%"></div>
                    </div>
                    <p class="skill-info">Maîtrise parfaite - Expert</p>
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
            
            <div class="contact-info fade-in" style="animation-delay: 0.2s">
                <h3 style="margin-bottom: 1.5rem; font-size: 1.4rem;">Disponible pour :</h3>
                <div class="contact-item">
                    <span>DÉVELOPPEMENT WEB</span>
                    <span>Sites vitrines, applications web, e-commerce</span>
                </div>
                <div class="contact-item">
                    <span>DÉVELOPPEMENT LOGICIEL</span>
                    <span>Applications desktop, outils personnalisés</span>
                </div>
                <div class="contact-item">
                    <span>SOLUTIONS FULL-STACK</span>
                    <span>Intégration frontend et backend</span>
                </div>
                <div class="contact-item">
                    <span>OPTIMISATION & MAINTENANCE</span>
                    <span>Amélioration de code existant, débogage</span>
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
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2023 Edwyn Lengrand - Tous droits réservés</p>
        <p>Développeur Web & Logiciel | Nord (59), France</p>
    </footer>

    <script>
        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            const slideLeftElements = document.querySelectorAll('.slide-in-left');
            const slideRightElements = document.querySelectorAll('.slide-in-right');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            fadeElements.forEach(el => observer.observe(el));
            slideLeftElements.forEach(el => observer.observe(el));
            slideRightElements.forEach(el => observer.observe(el));
            
            // Smooth scrolling for navigation
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>