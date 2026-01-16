/**
 * Gluon Theme - Optimized Particle System
 * Performance-focused with mobile optimizations.
 */
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.gluon-particles-container');
    if (!container) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isMobile = window.innerWidth < 768;

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
    let resizeTimeout;

    // Performance-optimized configuration
    const config = {
        particleCount: isMobile ? 30 : 100,        // Reduced from 60/150
        anchorCount: isMobile ? 2 : 5,             // Reduced from 3/7
        baseSpeed: 0.1,
        connectionDistance: isMobile ? 80 : 120,  // Reduced from 150
        connectionMinDepth: 0.4,                   // Skip more particles
        mouseAttractionDistance: isMobile ? 100 : 150,
        rotationSpeed: isMobile ? 0 : 0.00005,     // Slower rotation
        shootingStarInterval: isMobile ? 0 : 12000, // Disabled on mobile
        accentColor: 'rgba(8, 140, 219, ',
        enableGlow: !isMobile,                     // Disable shadows on mobile
    };

    let mouse = { x: 0.5, y: 0.5, realX: null, realY: null };
    let isDark = document.documentElement.classList.contains('gluon-dark');
    let lastShootingStar = 0;

    // Theme Observer
    const observer = new MutationObserver(() => {
        isDark = document.documentElement.classList.contains('gluon-dark');
    });
    observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

    // Debounced Resize Handler
    const resize = () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            width = container.offsetWidth;
            height = container.offsetHeight;
            canvas.width = width;
            canvas.height = height;
            initParticles();
        }, 100); // 100ms debounce
    };

    // Optimized Particle Class
    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.z = Math.random();
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = (Math.random() - 0.5) * config.baseSpeed;
            this.vy = (Math.random() - 0.5) * config.baseSpeed;
            this.size = 0.5 + this.z * 2;
            this.opacity = 0.2 + this.z * 0.5;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            if (this.x < 0 || this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;
        }

        draw() {
            const color = isDark ? `rgba(250,250,250,${this.opacity})` : `rgba(24,24,27,${this.opacity})`;
            ctx.fillStyle = color;
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    // Anchor Particle (pulsing)
    class AnchorParticle extends Particle {
        constructor() {
            super();
            this.z = 0.8 + Math.random() * 0.2;
            this.pulsePhase = Math.random() * Math.PI * 2;
            this.baseSize = 2 + Math.random() * 1.5;
        }

        update() {
            super.update();
            this.pulsePhase += 0.02;
            this.size = this.baseSize + Math.sin(this.pulsePhase) * 0.8;
            this.opacity = 0.5 + Math.sin(this.pulsePhase) * 0.2;
        }

        draw() {
            if (config.enableGlow) {
                ctx.shadowBlur = 10;
                ctx.shadowColor = config.accentColor + '0.5)';
            }
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
            this.vx = (Math.random() - 0.5) * 6 + 3;
            this.vy = Math.random() * 4 + 3;
            this.life = 1;
            this.decay = 0.025;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            this.life -= this.decay;
        }

        draw() {
            if (this.life <= 0) return;
            ctx.strokeStyle = `rgba(255,255,255,${this.life})`;
            ctx.lineWidth = 1.5;
            ctx.lineCap = 'round';
            ctx.beginPath();
            ctx.moveTo(this.x, this.y);
            ctx.lineTo(this.x - this.vx * 2, this.y - this.vy * 2);
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

    function animate(timestamp) {
        ctx.clearRect(0, 0, width, height);

        // Global rotation (desktop only)
        if (config.rotationSpeed > 0) {
            rotation += config.rotationSpeed;
            ctx.save();
            ctx.translate(width / 2, height / 2);
            ctx.rotate(rotation);
            ctx.translate(-width / 2, -height / 2);
        }

        // Update and draw particles
        const allParticles = [...particles, ...anchorParticles];
        for (let i = 0; i < allParticles.length; i++) {
            allParticles[i].update();
            allParticles[i].draw();
        }

        // Connection lines (optimized)
        for (let i = 0; i < allParticles.length; i++) {
            if (allParticles[i].z < config.connectionMinDepth) continue;

            for (let j = i + 1; j < allParticles.length; j++) {
                if (allParticles[j].z < config.connectionMinDepth) continue;

                const dx = allParticles[i].x - allParticles[j].x;
                const dy = allParticles[i].y - allParticles[j].y;

                // Quick distance check (avoid sqrt for far particles)
                if (Math.abs(dx) > config.connectionDistance || Math.abs(dy) > config.connectionDistance) continue;

                const distSq = dx * dx + dy * dy;
                const maxDistSq = config.connectionDistance * config.connectionDistance;

                if (distSq < maxDistSq) {
                    const opacity = (1 - distSq / maxDistSq) * 0.2;
                    ctx.beginPath();
                    ctx.strokeStyle = isDark ? `rgba(250,250,250,${opacity})` : `rgba(24,24,27,${opacity})`;
                    ctx.lineWidth = 0.5;
                    ctx.moveTo(allParticles[i].x, allParticles[i].y);
                    ctx.lineTo(allParticles[j].x, allParticles[j].y);
                    ctx.stroke();
                }
            }
        }

        // Mouse attraction lines + cursor particle
        if (mouse.realX !== null) {
            let linesDrawn = 0;
            const maxLines = isMobile ? 5 : 15; // Limit lines on mobile

            for (let i = 0; i < allParticles.length && linesDrawn < maxLines; i++) {
                if (allParticles[i].z < 0.4) continue;

                const dx = mouse.realX - allParticles[i].x;
                const dy = mouse.realY - allParticles[i].y;
                const distSq = dx * dx + dy * dy;
                const maxDistSq = config.mouseAttractionDistance * config.mouseAttractionDistance;

                if (distSq < maxDistSq) {
                    const opacity = (1 - distSq / maxDistSq) * 0.5;
                    ctx.beginPath();
                    ctx.strokeStyle = config.accentColor + opacity + ')';
                    ctx.lineWidth = 1;
                    ctx.moveTo(allParticles[i].x, allParticles[i].y);
                    ctx.lineTo(mouse.realX, mouse.realY);
                    ctx.stroke();
                    linesDrawn++;
                }
            }

            // Cursor particle
            const pulseSize = 3 + Math.sin(Date.now() / 250) * 1.5;
            const pulseOpacity = 0.5 + Math.sin(Date.now() / 250) * 0.2;
            if (config.enableGlow) {
                ctx.shadowBlur = 10;
                ctx.shadowColor = config.accentColor + '0.6)';
            }
            ctx.fillStyle = config.accentColor + pulseOpacity + ')';
            ctx.beginPath();
            ctx.arc(mouse.realX, mouse.realY, pulseSize, 0, Math.PI * 2);
            ctx.fill();
            ctx.shadowBlur = 0;
        }

        // Shooting stars (desktop only)
        if (config.shootingStarInterval > 0 && timestamp - lastShootingStar > config.shootingStarInterval) {
            shootingStars.push(new ShootingStar());
            lastShootingStar = timestamp;
        }

        shootingStars = shootingStars.filter(star => {
            star.update();
            star.draw();
            return !star.isDead();
        });

        if (config.rotationSpeed > 0) {
            ctx.restore();
        }

        animationId = requestAnimationFrame(animate);
    }

    // Event Listeners
    window.addEventListener('resize', resize);

    container.addEventListener('mousemove', (e) => {
        const rect = container.getBoundingClientRect();
        mouse.realX = e.clientX - rect.left;
        mouse.realY = e.clientY - rect.top;
    });

    container.addEventListener('mouseleave', () => {
        mouse.realX = null;
        mouse.realY = null;
    });

    // Initialize immediately (no debounce for first load)
    width = container.offsetWidth;
    height = container.offsetHeight;
    canvas.width = width;
    canvas.height = height;
    initParticles();
    animate(0);
});
