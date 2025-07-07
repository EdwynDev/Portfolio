<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Moderne</title>
    <link rel="stylesheet" href="../../assets/CSS/home.css?v=2">
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
    <script src="../../assets/JS/home.js?v=2"></script>
</body>

</html>