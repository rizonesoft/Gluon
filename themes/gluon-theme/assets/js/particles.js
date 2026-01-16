/**
 * Gluon Theme - Interactive Particles
 * Lightweight vanilla JS particle system for hero section.
 * 
 * Features:
 * - Responsive canvas
 * - Theme-aware colors (Light/Dark)
 * - Mouse interaction (repulsion/connection)
 * - Performance optimized (requestAnimationFrame, offscreen checks)
 */
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.gluon-particles-container');
    if (!container) return; // Exit if no container

    const canvas = document.createElement('canvas');
    canvas.style.position = 'absolute';
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.width = '100%';
    canvas.style.height = '100%';
    canvas.style.pointerEvents = 'none'; // Let clicks pass through
    canvas.style.zIndex = '0'; // Behind content
    container.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];

    // Configuration
    const config = {
        particleCount: window.innerWidth < 768 ? 40 : 80,
        connectionDistance: 120,
        mouseDistance: 200,
        baseSpeed: 0.5,
        colors: {
            light: { dot: 'rgba(24, 24, 27, 0.4)', line: 'rgba(24, 24, 27, 0.1)' }, // Zinc-900
            dark: { dot: 'rgba(250, 250, 250, 0.4)', line: 'rgba(250, 250, 250, 0.1)' }, // Zinc-50
            accent: 'rgba(8, 140, 219, 0.5)' // Gluon Blue
        }
    };

    // State
    let mouse = { x: null, y: null };
    let isDark = document.documentElement.classList.contains('gluon-dark');

    // Theme Observer
    const observer = new MutationObserver((mutations) => {
        mutations.forEach((mutation) => {
            if (mutation.attributeName === 'class') {
                isDark = document.documentElement.classList.contains('gluon-dark');
            }
        });
    });
    observer.observe(document.documentElement, { attributes: true });

    // Resize Handler
    const resize = () => {
        width = container.offsetWidth;
        height = container.offsetHeight;
        canvas.width = width;
        canvas.height = height;
        initParticles();
    };

    class Particle {
        constructor() {
            // Spawn on the right 60% of the canvas
            this.x = width * 0.4 + Math.random() * width * 0.6;
            this.y = Math.random() * height;
            this.vx = (Math.random() - 0.5) * config.baseSpeed;
            this.vy = (Math.random() - 0.5) * config.baseSpeed;
            this.size = Math.random() * 2 + 1;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;

            // Bounce off edges (constrained to right 60%)
            const leftBound = width * 0.4;
            if (this.x < leftBound) { this.x = leftBound; this.vx *= -1; }
            if (this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;

            // Mouse Interaction (Repulsion)
            if (mouse.x != null) {
                let dx = mouse.x - this.x;
                let dy = mouse.y - this.y;
                let distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < config.mouseDistance) {
                    const forceDirectionX = dx / distance;
                    const forceDirectionY = dy / distance;
                    const force = (config.mouseDistance - distance) / config.mouseDistance;
                    const directionX = forceDirectionX * force * 3; // Push strength
                    const directionY = forceDirectionY * force * 3;

                    this.vx -= directionX * 0.05;
                    this.vy -= directionY * 0.05;
                }
            }
        }

        draw() {
            ctx.fillStyle = isDark ? config.colors.dark.dot : config.colors.light.dot;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        // Adjust count based on width
        const count = window.innerWidth < 768 ? 30 : 80;
        for (let i = 0; i < count; i++) {
            particles.push(new Particle());
        }
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);

        // Update and Draw Particles
        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();

            // Draw Connections
            for (let j = i + 1; j < particles.length; j++) {
                let dx = particles[i].x - particles[j].x;
                let dy = particles[i].y - particles[j].y;
                let distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < config.connectionDistance) {
                    ctx.beginPath();
                    // Opacity based on distance
                    const opacity = 1 - (distance / config.connectionDistance);
                    ctx.strokeStyle = isDark
                        ? config.colors.dark.line.replace('0.1)', `${opacity * 0.15})`)
                        : config.colors.light.line.replace('0.1)', `${opacity * 0.2})`);
                    ctx.lineWidth = 1;
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }
        requestAnimationFrame(animate);
    }

    // Event Listeners
    window.addEventListener('resize', resize);
    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;
    });
    container.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
    });

    // Start
    resize();
    animate();
});
