/**
 * Gluon Theme - Ultimate Particle System
 * All wow-factor enhancements implemented.
 * 
 * Features:
 * - Depth-based starfield with parallax
 * - Accent anchor particles (Gluon Blue, pulsing)
 * - Glow effect on close particles
 * - Mouse attraction lines
 * - Strategic connection lines
 * - Shooting stars
 * - Click-to-burst
 * - Slow global rotation
 * - Reduced motion support
 */
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.gluon-particles-container');
    if (!container) return;

    // Respect reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    const canvas = document.createElement('canvas');
    canvas.style.cssText = 'position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;';
    container.appendChild(canvas);

    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];
    let anchorParticles = [];
    let shootingStars = [];
    let rotation = 0;
    let animationId;

    // Configuration
    const config = {
        particleCount: window.innerWidth < 768 ? 60 : 150,
        anchorCount: window.innerWidth < 768 ? 3 : 7,
        baseSpeed: prefersReducedMotion ? 0.05 : 0.15,
        parallaxFactor: prefersReducedMotion ? 10 : 30,
        connectionDistance: 150,
        mouseAttractionDistance: 200,
        rotationSpeed: prefersReducedMotion ? 0 : 0.0001, // radians per frame
        shootingStarInterval: 8000, // ms
        accentColor: 'rgba(8, 140, 219, ', // Gluon Blue
    };

    // State
    let mouse = { x: 0.5, y: 0.5, realX: null, realY: null };
    let isDark = document.documentElement.classList.contains('gluon-dark');
    let lastShootingStar = 0;

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

    // Regular Particle Class
    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.z = Math.random();
            this.baseX = Math.random() * width;
            this.baseY = Math.random() * height;
            this.x = this.baseX;
            this.y = this.baseY;
            this.vx = (Math.random() - 0.5) * config.baseSpeed;
            this.vy = (Math.random() - 0.5) * config.baseSpeed;
            this.size = 0.5 + this.z * 2.5;
            this.opacity = 0.2 + this.z * 0.6;
        }

        update() {
            this.baseX += this.vx;
            this.baseY += this.vy;

            if (this.baseX < 0 || this.baseX > width) this.vx *= -1;
            if (this.baseY < 0 || this.baseY > height) this.vy *= -1;

            const parallaxX = (mouse.x - 0.5) * config.parallaxFactor * this.z;
            const parallaxY = (mouse.y - 0.5) * config.parallaxFactor * this.z;

            this.x = this.baseX + parallaxX;
            this.y = this.baseY + parallaxY;
        }

        draw() {
            // Glow for close particles
            if (this.z > 0.8) {
                ctx.shadowBlur = 8;
                ctx.shadowColor = config.accentColor + '0.3)';
            } else {
                ctx.shadowBlur = 0;
            }

            const color = isDark ? `rgba(250, 250, 250, ${this.opacity})` : `rgba(24, 24, 27, ${this.opacity})`;
            ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.shadowBlur = 0;
        }
    }

    // Anchor Particle (Accent colored, pulsing)
    class AnchorParticle extends Particle {
        constructor() {
            super();
            this.z = 0.8 + Math.random() * 0.2; // Always close
            this.pulsePhase = Math.random() * Math.PI * 2;
            this.baseSize = 3 + Math.random() * 2;
        }

        update() {
            super.update();
            this.pulsePhase += 0.03;
            this.size = this.baseSize + Math.sin(this.pulsePhase) * 1;
            this.opacity = 0.5 + Math.sin(this.pulsePhase) * 0.3;
        }

        draw() {
            ctx.shadowBlur = 15;
            ctx.shadowColor = config.accentColor + '0.6)';
            ctx.fillStyle = config.accentColor + this.opacity + ')';
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
            ctx.shadowBlur = 0;
        }
    }

    // Shooting Star
    class ShootingStar {
        constructor() {
            this.x = Math.random() * width;
            this.y = 0;
            this.vx = (Math.random() - 0.5) * 8 + 4;
            this.vy = Math.random() * 6 + 4;
            this.life = 1;
            this.decay = 0.02;
            this.size = 2;
            this.tailLength = 30;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            this.life -= this.decay;
        }

        draw() {
            if (this.life <= 0) return;

            const gradient = ctx.createLinearGradient(
                this.x, this.y,
                this.x - this.vx * 3, this.y - this.vy * 3
            );
            gradient.addColorStop(0, `rgba(255, 255, 255, ${this.life})`);
            gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

            ctx.strokeStyle = gradient;
            ctx.lineWidth = this.size;
            ctx.lineCap = 'round';
            ctx.beginPath();
            ctx.moveTo(this.x, this.y);
            ctx.lineTo(this.x - this.vx * 3, this.y - this.vy * 3);
            ctx.stroke();
        }

        isDead() {
            return this.life <= 0 || this.x > width || this.y > height;
        }
    }

    function initParticles() {
        particles = [];
        anchorParticles = [];

        for (let i = 0; i < config.particleCount; i++) {
            particles.push(new Particle());
        }
        for (let i = 0; i < config.anchorCount; i++) {
            anchorParticles.push(new AnchorParticle());
        }
    }

    function spawnShootingStar() {
        shootingStars.push(new ShootingStar());
    }

    function animate(timestamp) {
        ctx.clearRect(0, 0, width, height);

        // Global rotation (subtle)
        if (!prefersReducedMotion) {
            rotation += config.rotationSpeed;
            ctx.save();
            ctx.translate(width / 2, height / 2);
            ctx.rotate(rotation);
            ctx.translate(-width / 2, -height / 2);
        }

        // Update and draw regular particles
        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();
        }

        // Update and draw anchor particles
        for (let i = 0; i < anchorParticles.length; i++) {
            anchorParticles[i].update();
            anchorParticles[i].draw();
        }

        // Connection lines (between close particles)
        const allParticles = [...particles, ...anchorParticles];
        for (let i = 0; i < allParticles.length; i++) {
            if (allParticles[i].z < 0.3) continue;

            for (let j = i + 1; j < allParticles.length; j++) {
                if (allParticles[j].z < 0.3) continue;

                const dx = allParticles[i].x - allParticles[j].x;
                const dy = allParticles[i].y - allParticles[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < config.connectionDistance) {
                    const opacity = (1 - distance / config.connectionDistance) * 0.25;
                    ctx.beginPath();
                    ctx.strokeStyle = isDark
                        ? `rgba(250, 250, 250, ${opacity})`
                        : `rgba(24, 24, 27, ${opacity})`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(allParticles[i].x, allParticles[i].y);
                    ctx.lineTo(allParticles[j].x, allParticles[j].y);
                    ctx.stroke();
                }
            }
        }

        // Mouse attraction lines
        if (mouse.realX !== null) {
            for (let i = 0; i < allParticles.length; i++) {
                const dx = mouse.realX - allParticles[i].x;
                const dy = mouse.realY - allParticles[i].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < config.mouseAttractionDistance && allParticles[i].z > 0.4) {
                    const opacity = (1 - distance / config.mouseAttractionDistance) * 0.2;
                    ctx.beginPath();
                    ctx.strokeStyle = config.accentColor + opacity + ')';
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(allParticles[i].x, allParticles[i].y);
                    ctx.lineTo(mouse.realX, mouse.realY);
                    ctx.stroke();
                }
            }
        }

        // Shooting stars
        if (!prefersReducedMotion && timestamp - lastShootingStar > config.shootingStarInterval) {
            spawnShootingStar();
            lastShootingStar = timestamp;
        }

        shootingStars = shootingStars.filter(star => {
            star.update();
            star.draw();
            return !star.isDead();
        });

        if (!prefersReducedMotion) {
            ctx.restore();
        }

        animationId = requestAnimationFrame(animate);
    }

    // Click-to-burst
    container.addEventListener('click', (e) => {
        if (prefersReducedMotion) return;

        const rect = container.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const clickY = e.clientY - rect.top;

        // Scatter nearby particles
        for (let i = 0; i < particles.length; i++) {
            const dx = particles[i].x - clickX;
            const dy = particles[i].y - clickY;
            const distance = Math.sqrt(dx * dx + dy * dy);

            if (distance < 150) {
                const force = (150 - distance) / 150;
                particles[i].vx += (dx / distance) * force * 2;
                particles[i].vy += (dy / distance) * force * 2;
            }
        }

        // Spawn 5 new particles at click location
        for (let i = 0; i < 5; i++) {
            const p = new Particle();
            p.baseX = clickX + (Math.random() - 0.5) * 50;
            p.baseY = clickY + (Math.random() - 0.5) * 50;
            p.z = 0.7 + Math.random() * 0.3;
            p.vx = (Math.random() - 0.5) * 3;
            p.vy = (Math.random() - 0.5) * 3;
            particles.push(p);
        }

        // Keep particle count reasonable
        while (particles.length > config.particleCount + 20) {
            particles.shift();
        }
    });

    // Event Listeners
    window.addEventListener('resize', resize);

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouse.x = (e.clientX - rect.left) / rect.width;
        mouse.y = (e.clientY - rect.top) / rect.height;
        mouse.realX = e.clientX - rect.left;
        mouse.realY = e.clientY - rect.top;
    });

    container.addEventListener('mouseleave', () => {
        mouse.x = 0.5;
        mouse.y = 0.5;
        mouse.realX = null;
        mouse.realY = null;
    });

    // Start
    resize();
    animate(0);
});
