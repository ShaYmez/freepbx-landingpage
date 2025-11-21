<?php
/**
 * FreeSTAR Branding Configuration
 * Customize these variables to match your brand
 */

// Brand Settings
$brand_name = "BRAND";
$brand_tagline = "TAGLINE";
$brand_logo = ""; // Optional: Path to logo image (e.g., "images/logo.png")
$brand_url = "https://freestar.network"; // URL for logo/brand name link
$server_name = "SERVER1"; // Server name for this landing page

// Color Settings (hex colors)
$primary_color = "#667eea";
$secondary_color = "#764ba2";
$accent_color_1 = "#f093fb";
$accent_color_2 = "#f5576c";

// Content Settings
$welcome_heading = "Welcome to FreeSTAR";
$welcome_text = "Connecting you to the World! Through Ham Radio!";

// Button Settings
$button_1_text = "Sign up";
$button_1_url = "";
$button_2_text = "Button1";
$button_2_url = "";

// Footer Settings
$footer_text = "Freedom to Connect";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes, viewport-fit=cover">
    
    <!-- iOS Specific Meta Tags -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="<?php echo htmlspecialchars($brand_name); ?>">
    
    <!-- Android Specific Meta Tags -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="<?php echo $primary_color; ?>">
    
    <!-- General Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($brand_tagline); ?>">
    <meta name="format-detection" content="telephone=yes">
    
    <title><?php echo htmlspecialchars($brand_name); ?> - VoIP Services</title>
    <style>
        :root {
            --primary-color: <?php echo $primary_color; ?>;
            --secondary-color: <?php echo $secondary_color; ?>;
            --accent-color-1: <?php echo $accent_color_1; ?>;
            --accent-color-2: <?php echo $accent_color_2; ?>;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent; /* Remove tap highlight on mobile */
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            min-height: 100vh;
            min-height: -webkit-fill-available; /* iOS Safari fix */
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-top: max(20px, env(safe-area-inset-top)); /* iOS notch support */
            padding-bottom: max(20px, env(safe-area-inset-bottom)); /* iOS home indicator */
            padding-left: max(20px, env(safe-area-inset-left));
            padding-right: max(20px, env(safe-area-inset-right));
            -webkit-font-smoothing: antialiased; /* Better font rendering on iOS */
            -moz-osx-font-smoothing: grayscale;
            overflow-x: hidden;
        }

        .container {
            max-width: 900px;
            width: 100%;
            background: rgba(20, 20, 30, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            animation: fadeInUp 0.8s ease-out;
        }

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

        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 60px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: pulse 15s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .header h1 {
            font-size: 3em;
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
        }

        .header a {
            color: inherit;
            text-decoration: none;
            transition: opacity 0.3s ease;
        }

        .header a:hover {
            opacity: 0.85;
        }

        .brand-logo {
            max-width: 200px;
            max-height: 80px;
            margin-bottom: 20px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 1;
        }

        .header p {
            font-size: 1.3em;
            font-weight: 300;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }

        .content {
            padding: 50px 40px;
        }

        .server-name {
            text-align: center;
            padding: 30px 40px 20px;
            background: linear-gradient(to bottom, rgba(102, 126, 234, 0.1), transparent);
        }

        .server-name h2 {
            font-size: 1.8em;
            font-weight: 600;
            color: var(--primary-color);
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        body.light-theme .server-name h2 {
            color: var(--secondary-color);
        }

        .description {
            text-align: center;
            margin-bottom: 50px;
        }

        .description h2 {
            font-size: 2em;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .description p {
            font-size: 1.1em;
            color: #b0b0b0;
            line-height: 1.8;
            max-width: 700px;
            margin: 0 auto;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .feature-card {
            background: rgba(40, 40, 55, 0.6);
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid rgba(102, 126, 234, 0.3);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            border-color: var(--primary-color);
            background: rgba(50, 50, 65, 0.8);
        }

        .feature-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            font-size: 1.3em;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #b0b0b0;
            font-size: 0.95em;
        }

        .cta-section {
            text-align: center;
            padding: 40px 0;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 18px 45px;
            min-height: 44px; /* iOS minimum touch target */
            min-width: 44px;
            font-size: 1.1em;
            font-weight: 600;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            cursor: pointer;
            border: none;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            -webkit-touch-callout: none; /* Disable iOS callout */
            -webkit-user-select: none;
            user-select: none;
            touch-action: manipulation; /* Prevent double-tap zoom */
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn span {
            position: relative;
            z-index: 1;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, var(--accent-color-1) 0%, var(--accent-color-2) 100%);
            color: white;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
        }

        .footer {
            background: rgba(30, 30, 40, 0.8);
            padding: 30px;
            text-align: center;
            color: #b0b0b0;
            border-top: 1px solid rgba(102, 126, 234, 0.2);
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            transition: all 0.3s ease;
        }

        .footer a:hover {
            color: var(--primary-color) !important;
            border-bottom-color: var(--primary-color) !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header {
                padding: 40px 20px;
            }

            .header h1 {
                font-size: 2em;
            }

            .header p {
                font-size: 1.1em;
            }

            .server-name {
                padding: 20px 20px 15px;
            }

            .server-name h2 {
                font-size: 1.4em;
            }

            .content {
                padding: 30px 20px;
            }

            .description h2 {
                font-size: 1.5em;
            }

            .description p {
                font-size: 1em;
            }

            .features {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                padding: 15px 35px;
                font-size: 1em;
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.8em;
            }

            .header p {
                font-size: 1em;
            }

            .server-name h2 {
                font-size: 1.2em;
            }

            .feature-card {
                padding: 20px;
            }

            .btn {
                padding: 12px 30px;
                font-size: 0.95em;
            }
        }

        /* Loading Animation */
        .loading {
            opacity: 0;
            animation: fadeIn 0.5s ease-in forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
            }
        }

        /* Ripple Effect */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            pointer-events: none;
            animation: rippleEffect 0.6s ease-out;
        }

        @keyframes rippleEffect {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }

        /* Keyboard Navigation */
        .keyboard-nav *:focus {
            outline: 2px solid var(--primary-color);
            outline-offset: 3px;
        }

        /* Theme Switcher */
        .theme-switcher {
            position: fixed;
            top: max(20px, env(safe-area-inset-top, 20px));
            right: max(20px, env(safe-area-inset-right, 20px));
            z-index: 1000;
        }

        .theme-toggle {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px); /* iOS Safari */
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            width: 50px;
            height: 50px;
            min-width: 44px; /* iOS minimum touch target */
            min-height: 44px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5em;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            user-select: none;
            touch-action: manipulation;
        }

        .theme-toggle:hover {
            transform: scale(1.1);
            background: rgba(255, 255, 255, 0.3);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .theme-toggle:active {
            transform: scale(0.95);
        }

        /* Light Theme Styles */
        body.light-theme {
            background: linear-gradient(135deg, #e0e7ff 0%, #f3e7ff 100%);
        }

        body.light-theme .container {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        body.light-theme .description h2 {
            color: var(--primary-color);
        }

        body.light-theme .description p {
            color: #555;
        }

        body.light-theme .feature-card {
            background: #f8f9fa;
            border: 2px solid rgba(102, 126, 234, 0.2);
        }

        body.light-theme .feature-card:hover {
            background: #ffffff;
            border-color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
        }

        body.light-theme .feature-card h3 {
            color: #333;
        }

        body.light-theme .feature-card p {
            color: #666;
        }

        body.light-theme .footer {
            background: #f8f9fa;
            color: #666;
            border-top: 1px solid #e0e0e0;
        }

        body.light-theme .theme-toggle {
            background: rgba(0, 0, 0, 0.1);
            border-color: rgba(0, 0, 0, 0.2);
            color: #333;
        }

        body.light-theme .theme-toggle:hover {
            background: rgba(0, 0, 0, 0.15);
        }

        /* Animation classes for feature cards */
        .feature-card-animate {
            opacity: 1;
            transform: translateY(0);
            transition: all 0.6s ease;
        }

        .feature-card-hidden {
            opacity: 0;
            transform: translateY(20px);
        }
    </style>
</head>
<body>
    <!-- Theme Switcher -->
    <div class="theme-switcher">
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle theme">
            <span id="themeIcon">🌙</span>
        </button>
    </div>

    <div class="container loading">
        <div class="header">
            <a href="<?php echo htmlspecialchars($brand_url); ?>" target="_blank" rel="noopener noreferrer">
                <?php if (!empty($brand_logo)): ?>
                    <img src="<?php echo htmlspecialchars($brand_logo); ?>" alt="<?php echo htmlspecialchars($brand_name); ?>" class="brand-logo">
                <?php endif; ?>
                <h1><?php echo htmlspecialchars($brand_name); ?></h1>
            </a>
            <p><?php echo htmlspecialchars($brand_tagline); ?></p>
        </div>

        <div class="server-name">
            <h2><?php echo htmlspecialchars($server_name); ?></h2>
        </div>

        <div class="content">
            <div class="description">
                <h2><?php echo htmlspecialchars($welcome_heading); ?></h2>
                <p>
                    <?php echo htmlspecialchars($welcome_text); ?>
                </p>
            </div>

            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3>Crystal Clear Calls</h3>
                    <p>High-quality voice communication with minimal latency and maximum reliability.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🌍</div>
                    <h3>Global Reach</h3>
                    <p>Connect with anyone, anywhere in the world with our extensive network coverage.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h3>Secure & Private</h3>
                    <p>Your communications are protected with enterprise-grade encryption and security.</p>
                </div>
            </div>

            <div class="cta-section">
                <div class="cta-buttons">
                    <a href="<?php echo htmlspecialchars($button_1_url); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                        <span><?php echo htmlspecialchars($button_1_text); ?></span>
                    </a>
                    <a href="<?php echo htmlspecialchars($button_2_url); ?>" class="btn btn-secondary" target="_blank" rel="noopener noreferrer">
                        <span><?php echo htmlspecialchars($button_2_text); ?></span>
                    </a>
                </div>
            </div>
        </div>

        
 /**
 * Please consider donating to the FreeSTAR Network if you wish to remove this footer... contact email: shane@freestar.network
 * Retain copyright on footer to use this landing page v1.00 Aka ShaYmez - M0VUB All right reserved.
 */
        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> <a href="https://freestar.network" target="_blank" rel="noopener noreferrer" style="color: inherit; text-decoration: none; border-bottom: 1px dotted;">FreeSTAR Network</a>. All rights reserved.</p>
            <p><?php echo htmlspecialchars($footer_text); ?></p>
        </div>
    </div>

    <script>
        // Theme Switcher Functionality
        const themeToggle = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const body = document.body;

        // Check for saved theme preference or default to dark
        const savedTheme = localStorage.getItem('theme') || 'dark';
        if (savedTheme === 'light') {
            body.classList.add('light-theme');
            themeIcon.textContent = '☀️';
        } else {
            themeIcon.textContent = '🌙';
        }

        // Toggle theme
        themeToggle.addEventListener('click', function() {
            body.classList.toggle('light-theme');
            
            if (body.classList.contains('light-theme')) {
                themeIcon.textContent = '☀️';
                localStorage.setItem('theme', 'light');
            } else {
                themeIcon.textContent = '🌙';
                localStorage.setItem('theme', 'dark');
            }
        });

        // Smooth loading animation
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.querySelector('.container');
            setTimeout(() => {
                container.classList.add('loading');
            }, 100);

            // Add smooth scroll behavior for any internal links
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

            // Button ripple effect enhancement
            const buttons = document.querySelectorAll('.btn');
            buttons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const ripple = document.createElement('span');
                    const rect = this.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');
                    
                    this.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });

            // Add parallax effect to header on scroll with throttling
            let ticking = false;
            window.addEventListener('scroll', function() {
                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        const header = document.querySelector('.header');
                        const scrolled = window.pageYOffset;
                        if (header) {
                            header.style.transform = 'translateY(' + (scrolled * 0.5) + 'px)';
                        }
                        ticking = false;
                    });
                    ticking = true;
                }
            });

            // Animate feature cards on scroll using CSS classes
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('feature-card-hidden');
                        setTimeout(() => {
                            entry.target.classList.remove('feature-card-hidden');
                            entry.target.classList.add('feature-card-animate');
                        }, 100);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.feature-card').forEach(card => {
                observer.observe(card);
            });

            // Console message for developers
            console.log('%cFreeSTAR Everywhere', 'color: #667eea; font-size: 24px; font-weight: bold;');
            console.log('%cWelcome to our VoIP platform!', 'color: #764ba2; font-size: 14px;');
        });

        // Add keyboard accessibility
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-nav');
            }
        });

        document.addEventListener('mousedown', function() {
            document.body.classList.remove('keyboard-nav');
        });
    </script>
</body>
</html>
