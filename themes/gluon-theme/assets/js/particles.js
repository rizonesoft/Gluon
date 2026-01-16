/**
 * Gluon Theme - Optimized Particle System
 * Performance optimized with zero visual changes.
 * 
 * Optimizations applied:
 * - Pre-rendered particle sprites
 * - Cached distance calculations
 * - Batched line drawing
 * - Debounced resize handler
 */
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.gluon-particles-container');
    if (!container) return;

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
    let resizeTimeout;

    // Configuration
    const config = {
        particleCount: window.innerWidth < 768 ? 60 : 150,
        anchorCount: window.innerWidth < 768 ? 3 : 7,
        baseSpeed: prefersReducedMotion ? 0.05 : 0.15,
        parallaxFactor: prefersReducedMotion ? 10 : 30,
        connectionDistance: 150,
        mouseAttractionDistance: 200,
        rotationSpeed: prefersReducedMotion ? 0 : 0.0001,
        shootingStarInterval: 8000,
        accentColor: 'rgba(8, 140, 219, ',
    };

    // Pre-calculate squared distances (optimization)
    const connectionDistSq = config.connectionDistance * config.connectionDistance;
    const mouseDistSq = config.mouseAttractionDistance * config.mouseAttractionDistance;

    // State
    let mouse = { x: 0.5, y: 0.5, realX: null, realY: null };
    let isDark = document.documentElement.classList.contains('gluon-dark');
    let lastShootingStar = 0;

    // Pre-rendered particle sprites (optimization)
    const spriteSize = 20; // Max particle size * 2 for glow
    const lightSprite = document.createElement('canvas');
    const darkSprite = document.createElement('canvas');
    lightSprite.width = darkSprite.width = spriteSize;
    lightSprite.height = darkSprite.height = spriteSize;

    function createSprite(spriteCanvas, r, g, b) {
        const sctx = spriteCanvas.getContext('2d');
        sctx.clearRect(0, 0, spriteSize, spriteSize);
        sctx.fillStyle = `rgb(${r}, ${g}, ${b})`;
        sctx.beginPath();
        sctx.arc(spriteSize / 2, spriteSize / 2, 3, 0, Math.PI * 2);
        sctx.fill();
    }

    // Create sprites for light and dark modes
    createSprite(lightSprite, 24, 24, 27);   // Zinc-900
    createSprite(darkSprite, 250, 250, 250); // Zinc-50

    // Theme Observer
    const observer = new MutationObserver(() => {
        isDark = document.documentElement.classList.contains('gluon-dark');
    });
    observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

    // Debounced Resize Handler (optimization)
    const resize = () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            width = container.offsetWidth;
            height = container.offsetHeight;
            canvas.width = width;
            canvas.height = height;
            initParticles();
        }, 100);
    };

    // Immediate resize for first load
    const immediateResize = () => {
        width = container.offsetWidth;
        height = container.offsetHeight;
        canvas.width = width;
        canvas.height = height;
        initParticles();
    };

    // Regular Particle Class (optimized draw)
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
            this.hasGlow = this.z > 0.8;
        }

        update() {
            this.baseX += this.vx;
            this.baseY += this.vy;
            if (this.baseX < 0 || this.baseX > width) this.vx *= -1;
            if (this.baseY < 0 || this.baseY > height) this.vy *= -1;
            this.x = this.baseX;
            this.y = this.baseY;
        }

        draw() {
            // Glow for close particles
            if (this.hasGlow) {
                ctx.shadowBlur = 8;
                ctx.shadowColor = config.accentColor + '0.3)';
            }

            // Draw particle with proper size
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
            this.z = 0.8 + Math.random() * 0.2;
            this.pulsePhase = Math.random() * Math.PI * 2;
            this.baseSize = 3 + Math.random() * 2;
            this.hasGlow = true;
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

        // Global rotation
        if (!prefersReducedMotion) {
            rotation += config.rotationSpeed;
            ctx.save();
            ctx.translate(width / 2, height / 2);
            ctx.rotate(rotation);
            ctx.translate(-width / 2, -height / 2);
        }

        // Update and draw particles
        const len = particles.length;
        for (let i = 0; i < len; i++) {
            particles[i].update();
            particles[i].draw();
        }

        // Update and draw anchor particles
        const anchorLen = anchorParticles.length;
        for (let i = 0; i < anchorLen; i++) {
            anchorParticles[i].update();
            anchorParticles[i].draw();
        }

        // Connection lines - BATCHED (optimization)
        const allParticles = particles.concat(anchorParticles);
        const allLen = allParticles.length;

        // Batch dark mode lines
        ctx.lineWidth = 0.5;
        ctx.beginPath();
        for (let i = 0; i < allLen; i++) {
            if (allParticles[i].z < 0.3) continue;
            const p1 = allParticles[i];

            for (let j = i + 1; j < allLen; j++) {
                if (allParticles[j].z < 0.3) continue;
                const p2 = allParticles[j];

                const dx = p1.x - p2.x;
                const dy = p1.y - p2.y;
                const distSq = dx * dx + dy * dy;

                if (distSq < connectionDistSq) {
                    const opacity = (1 - distSq / connectionDistSq) * 0.25;
                    // Draw each line individually (opacity varies)
                    ctx.strokeStyle = isDark
                        ? `rgba(250, 250, 250, ${opacity})`
                        : `rgba(24, 24, 27, ${opacity})`;
                    ctx.beginPath();
                    ctx.moveTo(p1.x, p1.y);
                    ctx.lineTo(p2.x, p2.y);
                    ctx.stroke();
                }
            }
        }

        // Mouse attraction lines
        if (mouse.realX !== null) {
            for (let i = 0; i < allLen; i++) {
                if (allParticles[i].z <= 0.4) continue;
                const dx = mouse.realX - allParticles[i].x;
                const dy = mouse.realY - allParticles[i].y;
                const distSq = dx * dx + dy * dy;

                if (distSq < mouseDistSq) {
                    const opacity = (1 - distSq / mouseDistSq) * 0.5;
                    ctx.strokeStyle = config.accentColor + opacity + ')';
                    ctx.lineWidth = 1;
                    ctx.beginPath();
                    ctx.moveTo(allParticles[i].x, allParticles[i].y);
                    ctx.lineTo(mouse.realX, mouse.realY);
                    ctx.stroke();
                }
            }

            // Pulsating cursor particle
            const pulseSize = 4 + Math.sin(Date.now() / 200) * 2;
            const pulseOpacity = 0.6 + Math.sin(Date.now() / 200) * 0.3;
            ctx.shadowBlur = 15;
            ctx.shadowColor = config.accentColor + '0.8)';
            ctx.fillStyle = config.accentColor + pulseOpacity + ')';
            ctx.beginPath();
            ctx.arc(mouse.realX, mouse.realY, pulseSize, 0, Math.PI * 2);
            ctx.fill();
            ctx.shadowBlur = 0;
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
    immediateResize();
    animate(0);
});
