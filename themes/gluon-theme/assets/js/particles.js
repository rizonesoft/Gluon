/**
 * Gluon Theme - Starfield Particles
 * ReactBits-inspired cosmos effect with depth and parallax.
 * 
 * Features:
 * - No connection lines (clean starfield)
 * - Varied sizes + opacity for depth
 * - 3D Parallax on mouse move
 * - Theme-aware colors
 * - Right-aligned spawn (60% right)
 */
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.gluon-particles-container');
    if (!container) return;

    const canvas = document.createElement('canvas');
    canvas.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;';
    container.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];
    let animationId;

    // Configuration
    const config = {
        particleCount: window.innerWidth < 768 ? 60 : 150,
        baseSpeed: 0.15, // Very slow drift
        parallaxFactor: 30, // How much parallax shift
        spawnRight: 0, // Spawn across entire width (0 = full, 0.3 = right 70%)
    };

    // State
    let mouse = { x: 0.5, y: 0.5 }; // Normalized (0-1), center default
    let isDark = document.documentElement.classList.contains('gluon-dark');

    // Theme Observer
    const observer = new MutationObserver(() => {
        isDark = document.documentElement.classList.contains('gluon-dark');
    });
    observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

    // Resize Handler
    const resize = () => {
        width = container.offsetWidth;
        height = container.offsetHeight;
        canvas.width = width;
        canvas.height = height;
        initParticles();
    };

    // Particle Class (Depth-based)
    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            // Depth (0 = far, 1 = close)
            this.z = Math.random();

            // Position (full width)
            this.baseX = Math.random() * width;
            this.baseY = Math.random() * height;
            this.x = this.baseX;
            this.y = this.baseY;

            // Movement
            this.vx = (Math.random() - 0.5) * config.baseSpeed;
            this.vy = (Math.random() - 0.5) * config.baseSpeed;

            // Size based on depth (closer = bigger)
            this.size = 0.5 + this.z * 2.5;

            // Opacity based on depth (closer = brighter)
            this.opacity = 0.2 + this.z * 0.6;
        }

        update() {
            // Slow drift
            this.baseX += this.vx;
            this.baseY += this.vy;

            // Constrain to canvas
            if (this.baseX < 0) { this.baseX = 0; this.vx *= -1; }
            if (this.baseX > width) { this.vx *= -1; this.baseX = width; }
            if (this.baseY < 0 || this.baseY > height) this.vy *= -1;

            // Parallax offset based on mouse and depth
            const parallaxX = (mouse.x - 0.5) * config.parallaxFactor * this.z;
            const parallaxY = (mouse.y - 0.5) * config.parallaxFactor * this.z;

            this.x = this.baseX + parallaxX;
            this.y = this.baseY + parallaxY;
        }

        draw() {
            const color = isDark ? `rgba(250, 250, 250, ${this.opacity})` : `rgba(24, 24, 27, ${this.opacity})`;
            ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        const count = window.innerWidth < 768 ? 50 : 150;
        for (let i = 0; i < count; i++) {
            particles.push(new Particle());
        }
    }

    function animate() {
        ctx.clearRect(0, 0, width, height);

        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();
        }

        // Strategic Connection Lines (between close particles)
        const connectionDistance = 150; // Increased from 100
        const minDepth = 0.3; // Lowered from 0.5 for more connections

        for (let i = 0; i < particles.length; i++) {
            if (particles[i].z < minDepth) continue; // Skip far particles

            for (let j = i + 1; j < particles.length; j++) {
                if (particles[j].z < minDepth) continue;

                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < connectionDistance) {
                    const opacity = (1 - distance / connectionDistance) * 0.3;
                    ctx.beginPath();
                    ctx.strokeStyle = isDark
                        ? `rgba(250, 250, 250, ${opacity})`
                        : `rgba(24, 24, 27, ${opacity})`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }

        animationId = requestAnimationFrame(animate);
    }

    // Event Listeners
    window.addEventListener('resize', resize);

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouse.x = (e.clientX - rect.left) / rect.width;
        mouse.y = (e.clientY - rect.top) / rect.height;
    });

    container.addEventListener('mouseleave', () => {
        // Smoothly return to center
        mouse.x = 0.5;
        mouse.y = 0.5;
    });

    // Start
    resize();
    animate();
});
