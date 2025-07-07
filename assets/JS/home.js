
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
    anchor.addEventListener('click', function (e) {
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