<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Moderne</title>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize:wght@400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #ffffff;
            --secondary-color: #f8f9fa;
            --accent-color: #6c757d;
            --text-primary: #212529;
            --text-secondary: #6c757d;
            --border-color: #e9ecef;
            --shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            --shadow-hover: 0 8px 40px rgba(0, 0, 0, 0.1);
        }

        body {
            font-family: 'Electrolize', monospace;
            background: var(--primary-color);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 1rem 0;
            border-bottom: 1px solid var(--border-color);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 400;
            color: var(--text-primary);
            text-decoration: none;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--text-primary);
            transition: width 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--text-primary);
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
            position: relative;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 400;
            margin-bottom: 1.5rem;
            letter-spacing: 3px;
            opacity: 0;
            transform: translateY(30px);
        }

        .hero p {
            font-size: clamp(1rem, 2vw, 1.2rem);
            color: var(--text-secondary);
            margin-bottom: 3rem;
            letter-spacing: 1px;
            opacity: 0;
            transform: translateY(20px);
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: var(--text-primary);
            color: var(--primary-color);
            text-decoration: none;
            border: none;
            font-family: 'Electrolize', monospace;
            font-size: 0.9rem;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(20px);
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-hover);
        }

        /* Sections */
        .section {
            padding: 8rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section h2 {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 400;
            margin-bottom: 3rem;
            text-align: center;
            letter-spacing: 2px;
            position: relative;
        }

        .section h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 1px;
            background: var(--text-primary);
        }

        /* Cards Grid */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .card {
            background: var(--primary-color);
            border: 1px solid var(--border-color);
            padding: 2.5rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: var(--text-primary);
            transition: left 0.3s ease;
        }

        .card:hover::before {
            left: 0;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-hover);
        }

        .card h3 {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            letter-spacing: 1px;
            color: var(--text-primary);
        }

        .card p {
            color: var(--text-secondary);
            line-height: 1.8;
            font-size: 0.95rem;
        }

        /* Three.js Canvas */
        #threejs-canvas {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            opacity: 0.05;
        }

        /* Floating geometric elements */
        .geometric-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        .geo-element {
            position: absolute;
            border: 1px solid var(--border-color);
            opacity: 0.3;
        }

        .geo-element:nth-child(1) {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            transform: rotate(45deg);
        }

        .geo-element:nth-child(2) {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            border-radius: 50%;
        }

        .geo-element:nth-child(3) {
            width: 80px;
            height: 80px;
            bottom: 20%;
            left: 15%;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }

        /* About Section */
        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-secondary);
        }

        .about-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .stat {
            text-align: center;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 400;
            color: var(--text-primary);
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            letter-spacing: 1px;
        }

        /* Timeline */
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 4rem auto;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 1px;
            height: 100%;
            background: var(--border-color);
        }

        .timeline-item {
            position: relative;
            margin-bottom: 3rem;
            display: flex;
            align-items: center;
        }

        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }

        .timeline-content {
            flex: 1;
            padding: 2rem;
            background: var(--primary-color);
            border: 1px solid var(--border-color);
            margin: 0 2rem;
            position: relative;
        }

        .timeline-content::before {
            content: '';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border: 10px solid transparent;
        }

        .timeline-item:nth-child(odd) .timeline-content::before {
            left: -20px;
            border-right-color: var(--border-color);
        }

        .timeline-item:nth-child(even) .timeline-content::before {
            right: -20px;
            border-left-color: var(--border-color);
        }

        .timeline-date {
            font-size: 0.9rem;
            color: var(--text-secondary);
            margin-bottom: 0.5rem;
        }

        .timeline-title {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: var(--text-primary);
        }

        /* Contact Section */
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 4rem;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            background: var(--secondary-color);
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            font-size: 0.9rem;
            color: var(--text-secondary);
            letter-spacing: 1px;
        }

        .form-group input,
        .form-group textarea {
            padding: 1rem;
            border: 1px solid var(--border-color);
            background: var(--primary-color);
            font-family: 'Electrolize', monospace;
            font-size: 0.9rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--text-primary);
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-container {
                padding: 0 1rem;
            }

            .nav-links {
                display: none;
            }

            .section {
                padding: 4rem 1rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .timeline::before {
                left: 20px;
            }

            .timeline-item {
                flex-direction: row !important;
            }

            .timeline-content {
                margin-left: 40px;
                margin-right: 0;
            }

            .timeline-content::before {
                left: -20px !important;
                right: auto !important;
                border-right-color: var(--border-color) !important;
                border-left-color: transparent !important;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: all 0.8s ease;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.8s ease;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--secondary-color);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--text-secondary);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-primary);
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <a href="#" class="logo">PORTFOLIO</a>
            <ul class="nav-links">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#work">WORK</a></li>
                <li><a href="#experience">EXPERIENCE</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </div>
    </nav>

    <!-- Three.js Canvas -->
    <canvas id="threejs-canvas"></canvas>

    <!-- Geometric Background -->
    <div class="geometric-bg">
        <div class="geo-element"></div>
        <div class="geo-element"></div>
        <div class="geo-element"></div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>CREATIVE DEVELOPER</h1>
            <p>Crafting digital experiences through clean code and modern design</p>
            <button class="cta-button">EXPLORE WORK</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <h2 class="fade-in">ABOUT</h2>
        <div class="about-content">
            <div class="about-text fade-in">
                <p>I'm a creative developer passionate about building exceptional digital experiences. With a focus on clean, efficient code and modern design principles, I create solutions that are both functional and beautiful.</p>
                <p>My approach combines technical expertise with creative vision, ensuring every project delivers optimal performance and user experience.</p>
            </div>
            <div class="about-stats fade-in">
                <div class="stat">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">PROJECTS</span>
                </div>
                <div class="stat">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">YEARS</span>
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

    <!-- Work Section -->
    <section id="work" class="section">
        <h2 class="fade-in">SELECTED WORK</h2>
        <div class="cards-grid">
            <div class="card fade-in">
                <h3>E-COMMERCE PLATFORM</h3>
                <p>Modern e-commerce solution with advanced filtering, real-time inventory management, and seamless checkout experience.</p>
            </div>
            <div class="card fade-in">
                <h3>CORPORATE WEBSITE</h3>
                <p>Responsive corporate website with custom CMS, interactive elements, and optimized performance for global audiences.</p>
            </div>
            <div class="card fade-in">
                <h3>MOBILE APPLICATION</h3>
                <p>Cross-platform mobile app with intuitive UI/UX, real-time data synchronization, and offline functionality.</p>
            </div>
            <div class="card fade-in">
                <h3>DATA VISUALIZATION</h3>
                <p>Interactive dashboard for complex data visualization with real-time updates and customizable reporting features.</p>
            </div>
            <div class="card fade-in">
                <h3>BRAND IDENTITY</h3>
                <p>Complete brand identity design including logo, typography, color palette, and brand guidelines documentation.</p>
            </div>
            <div class="card fade-in">
                <h3>WEB APPLICATION</h3>
                <p>Full-stack web application with modern architecture, API integration, and advanced user management system.</p>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="section">
        <h2 class="fade-in">EXPERIENCE</h2>
        <div class="timeline">
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2023 - PRESENT</div>
                    <h3 class="timeline-title">SENIOR DEVELOPER</h3>
                    <p>Leading development team and architecting scalable solutions for enterprise clients. Focus on modern frameworks and performance optimization.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2021 - 2023</div>
                    <h3 class="timeline-title">FULL-STACK DEVELOPER</h3>
                    <p>Developed and maintained web applications using modern technologies. Collaborated with design teams to implement pixel-perfect interfaces.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-left">
                <div class="timeline-content">
                    <div class="timeline-date">2020 - 2021</div>
                    <h3 class="timeline-title">FRONTEND DEVELOPER</h3>
                    <p>Specialized in creating responsive and interactive user interfaces. Focused on performance optimization and cross-browser compatibility.</p>
                </div>
            </div>
            <div class="timeline-item slide-in-right">
                <div class="timeline-content">
                    <div class="timeline-date">2019 - 2020</div>
                    <h3 class="timeline-title">JUNIOR DEVELOPER</h3>
                    <p>Started career building foundational skills in web development. Contributed to various projects and learned best practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <h2 class="fade-in">GET IN TOUCH</h2>
        <div class="contact-grid">
            <div class="contact-info fade-in">
                <div class="contact-item">
                    <span>EMAIL</span>
                    <span>contact@example.com</span>
                </div>
                <div class="contact-item">
                    <span>PHONE</span>
                    <span>+33 1 23 45 67 89</span>
                </div>
                <div class="contact-item">
                    <span>LOCATION</span>
                    <span>Paris, France</span>
                </div>
                <div class="contact-item">
                    <span>AVAILABILITY</span>
                    <span>Available for new projects</span>
                </div>
            </div>
            <form class="contact-form fade-in">
                <div class="form-group">
                    <label for="name">NAME</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">EMAIL</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">MESSAGE</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="cta-button">SEND MESSAGE</button>
            </form>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script>
        // Three.js minimal geometric background
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
        const renderer = new THREE.WebGLRenderer({
            canvas: document.getElementById('threejs-canvas'),
            alpha: true
        });

        renderer.setSize(window.innerWidth, window.innerHeight);
        renderer.setPixelRatio(window.devicePixelRatio);

        // Minimal geometric shapes
        const geometry = new THREE.BoxGeometry(1, 1, 1);
        const material = new THREE.MeshBasicMaterial({
            color: 0x6c757d,
            wireframe: true,
            transparent: true,
            opacity: 0.1
        });

        const cubes = [];
        for (let i = 0; i < 20; i++) {
            const cube = new THREE.Mesh(geometry, material);
            cube.position.set(
                (Math.random() - 0.5) * 50,
                (Math.random() - 0.5) * 50,
                (Math.random() - 0.5) * 50
            );
            cube.rotation.set(
                Math.random() * Math.PI,
                Math.random() * Math.PI,
                Math.random() * Math.PI
            );
            scene.add(cube);
            cubes.push(cube);
        }

        camera.position.z = 30;

        function animate() {
            requestAnimationFrame(animate);

            cubes.forEach(cube => {
                cube.rotation.x += 0.001;
                cube.rotation.y += 0.001;
            });

            renderer.render(scene, camera);
        }
        animate();

        window.addEventListener('resize', () => {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        });

        // Hero animations
        anime.timeline({
                easing: 'easeOutExpo',
                duration: 1000
            })
            .add({
                targets: '.hero h1',
                opacity: [0, 1],
                translateY: [30, 0],
                delay: 500
            })
            .add({
                targets: '.hero p',
                opacity: [0, 1],
                translateY: [20, 0],
                delay: 200
            }, '-=800')
            .add({
                targets: '.hero .cta-button',
                opacity: [0, 1],
                translateY: [20, 0],
                delay: 100
            }, '-=600');

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Floating geometric elements animation
        anime({
            targets: '.geo-element',
            translateY: [{
                    value: -20,
                    duration: 3000
                },
                {
                    value: 20,
                    duration: 3000
                }
            ],
            rotate: [{
                    value: 5,
                    duration: 2000
                },
                {
                    value: -5,
                    duration: 2000
                }
            ],
            loop: true,
            easing: 'easeInOutSine',
            delay: anime.stagger(1000)
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(255,255,255,0.98)';
                nav.style.boxShadow = '0 2px 20px rgba(0,0,0,0.1)';
            } else {
                nav.style.background = 'rgba(255,255,255,0.95)';
                nav.style.boxShadow = 'none';
            }
        });

        // Form submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();

            // Animate button
            anime({
                targets: '.contact-form .cta-button',
                scale: [1, 0.95, 1],
                duration: 200,
                easing: 'easeInOutQuad'
            });

            // Simulate form submission
            setTimeout(() => {
                alert('Message envoyé avec succès !');
                document.querySelector('.contact-form').reset();
            }, 500);
        });

        // Parallax effect for geometric elements
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.geo-element');

            parallaxElements.forEach((element, index) => {
                const speed = 0.1 + (index * 0.05);
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.02}deg)`;
            });
        });

        // Card hover animations
        document.querySelectorAll('.card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                anime({
                    targets: card,
                    translateY: -5,
                    duration: 300,
                    easing: 'easeOutQuad'
                });
            });

            card.addEventListener('mouseleave', () => {
                anime({
                    targets: card,
                    translateY: 0,
                    duration: 300,
                    easing: 'easeOutQuad'
                });
            });
        });
    </script>
</body>

</html>