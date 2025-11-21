<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreeSTAR Everywhere - VoIP Services</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 900px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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

        .description {
            text-align: center;
            margin-bottom: 50px;
        }

        .description h2 {
            font-size: 2em;
            color: #667eea;
            margin-bottom: 20px;
        }

        .description p {
            font-size: 1.1em;
            color: #666;
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
            background: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 2px solid transparent;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.2);
            border-color: #667eea;
        }

        .feature-icon {
            font-size: 3em;
            margin-bottom: 15px;
        }

        .feature-card h3 {
            font-size: 1.3em;
            color: #333;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: #666;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 87, 108, 0.4);
        }

        .footer {
            background: #f8f9fa;
            padding: 30px;
            text-align: center;
            color: #666;
            border-top: 1px solid #e0e0e0;
        }

        .footer p {
            margin: 5px 0;
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
            outline: 2px solid #667eea;
            outline-offset: 3px;
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
    <div class="container loading">
        <div class="header">
            <h1>FreeSTAR Everywhere</h1>
            <p>Your Trusted Public VoIP Server Solution</p>
        </div>

        <div class="content">
            <div class="description">
                <h2>Welcome to FreeSTAR Everywhere</h2>
                <p>
                    Experience crystal-clear voice communication with our reliable and feature-rich 
                    VoIP services. Join thousands of users who trust FreeSTAR Everywhere for their 
                    communication needs. Whether you're connecting with friends, family, or colleagues, 
                    we've got you covered.
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
                    <a href="https://support.freestar.network" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                        <span>Sign up</span>
                    </a>
                    <a href="https://pbx01.freestar.network/apps/phonebook/phonebook.php" class="btn btn-secondary" target="_blank" rel="noopener noreferrer">
                        <span>Phonebook</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>&copy; <?php echo date('Y'); ?> FreeSTAR Everywhere. All rights reserved.</p>
            <p>Empowering communication, one call at a time.</p>
        </div>
    </div>

    <script>
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
