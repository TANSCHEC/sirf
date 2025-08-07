<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State Institutional Ranking Framework - Government of Tamil Nadu</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2fd84bff 0%, #2d2d2d 50%, #000000 100%);
            min-height: 100vh;
            color: #10ef2aff;
            line-height: 1.6;
        }

        /* Animated background elements */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .particle {
            position: absolute;
            /* background: rgba(255, 255, 255, 0.05); */
            background: rgba(47, 255, 0, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 8s ease-in-out infinite;
        }

        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            left: 10%;
            animation-delay: 0s;
        }

        .particle:nth-child(2) {
            width: 120px;
            height: 120px;
            left: 20%;
            animation-delay: 2s;
        }

        .particle:nth-child(3) {
            width: 60px;
            height: 60px;
            left: 35%;
            animation-delay: 4s;
        }

        .particle:nth-child(4) {
            width: 100px;
            height: 100px;
            left: 50%;
            animation-delay: 1s;
        }

        .particle:nth-child(5) {
            width: 40px;
            height: 40px;
            left: 70%;
            animation-delay: 3s;
        }

        .particle:nth-child(6) {
            width: 90px;
            height: 90px;
            left: 85%;
            animation-delay: 5s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.3;
            }

            50% {
                transform: translateY(-80px) rotate(180deg);
                opacity: 0.1;
            }
        }

        /* Glass morphism with high contrast */
        .glass {
            /* background: rgba(255, 255, 255, 0.95);  */
            background: rgba(0, 0, 255, 0.95);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            color: #ffffff;
        }

        .glass-dark {
            background: rgba(0, 0, 255, 0.75);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            color: #ffffff;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        /* Header */
        .header {
            text-align: center;
            margin-bottom: 40px;
            padding: 40px 30px;
            animation: slideDown 1s ease-out;
        }

        .logo {
            width: 80px;
            height: 80px;
            background: #000000;
            border: 3px solid #ffffff;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
            color: #ffffff;
            animation: pulse 2s infinite;
        }

        .title {
            font-size: 2.8rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
            letter-spacing: -0.5px;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #ffffff;
            font-weight: 500;
        }

        /* Navigation */
        .nav {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .nav-item {
            padding: 12px 24px;
            background: #ffffff;
            border: 2px solid #1a1a1a;
            border-radius: 8px;
            color: #1a1a1a;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            font-size: 0.95rem;
        }

        .nav-item:hover {
            background: #1a1a1a;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .nav-item.active {
            background: #1a1a1a;
            color: #ffffff;
        }

        .login-btn {
            background: #000000 !important;
            color: #ffffff !important;
            border: 2px solid #ffffff !important;
        }

        .login-btn:hover {
            background: #ffffff !important;
            color: #000000 !important;
            border: 2px solid #000000 !important;
        }

        /* Statistics section */
        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            text-align: center;
            padding: 30px 25px;
            animation: scaleIn 0.6s ease-out;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            color: #ffffff;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .stat-label {
            color: #ffffff;
            font-size: 1.1rem;
            font-weight: 600;
        }

        /* Carousel Styles */
        .carousel-section {
            margin-bottom: 40px;
        }

        .carousel-container {
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .carousel-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .carousel-header h2 {
            color: #ffffff;
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .carousel-header p {
            color: #cccccc;
            font-size: 1.1rem;
            font-weight: 500;
        }

        .carousel {
            position: relative;
            width: 100%;
            height: 400px;
            overflow: hidden;
            border-radius: 15px;
            border: 2px solid rgba(255, 255, 255, 0.1);
        }

        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
            height: 100%;
        }

        .carousel-slide {
            min-width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .carousel-slide.active {
            opacity: 1;
        }

        .slide-content {
            display: flex;
            height: 100%;
            align-items: center;
            gap: 30px;
            padding: 30px;
            background: rgba(255, 255, 255, 0.95);
        }

        .slide-image {
            flex: 1;
            height: 100%;
        }

        .placeholder-image {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            border: 3px solid #1a1a1a;
        }

        .image-overlay {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background: rgba(0, 0, 0, 0.9);
            color: #ffffff;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 700;
            border: 1px solid #ffffff;
        }

        .slide-info {
            flex: 1;
            color: #1a1a1a;
            padding: 20px;
        }

        .slide-info h3 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 800;
            color: #000000;
        }

        .slide-info p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #333333;
            font-weight: 500;
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.8);
            border: 2px solid #ffffff;
            color: #ffffff;
            font-size: 2rem;
            padding: 15px 20px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: bold;
        }

        .carousel-btn:hover {
            background: #ffffff;
            color: #000000;
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-btn.prev {
            left: 20px;
        }

        .carousel-btn.next {
            right: 20px;
        }

        .carousel-indicators {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .indicator {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.4);
            border: 2px solid #ffffff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .indicator.active {
            background: #ffffff;
            transform: scale(1.2);
        }

        .indicator:hover {
            background: rgba(255, 255, 255, 0.8);
        }

        /* Main content */
        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .card {
            padding: 30px;
            transition: all 0.3s ease;
            animation: fadeInUp 0.8s ease-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .card h3 {
            color: #ffffff;
            font-size: 1.5rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }

        .card-icon {
            width: 35px;
            height: 35px;
            background: #1abf57ff;
            color: #ffffff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            border: 2px solid #1a1a1a;
        }

        .card p {
            color: #ffffff;
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 1rem;
            font-weight: 500;
        }

        .btn {
            background: #000000;
            color: #ffffff;
            border: 2px solid #000000;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .btn:hover {
            background: #ffffff;
            color: #000000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(5px);
            animation: fadeIn 0.3s ease-out;
        }

        .modal-content {
            position: relative;
            margin: 5% auto;
            padding: 0;
            width: 90%;
            max-width: 500px;
            border-radius: 15px;
            animation: slideInDown 0.3s ease-out;
        }

        .close {
            position: absolute;
            right: 20px;
            top: 15px;
            color: #ffffff;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
            z-index: 1001;
        }

        .close:hover {
            color: #cccccc;
        }

        .modal-header {
            text-align: center;
            padding: 30px 30px 20px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }

        .modal-header h2 {
            color: #ffffff;
            margin-bottom: 10px;
            font-size: 1.8rem;
            font-weight: 700;
        }

        .modal-header p {
            color: #cccccc;
            font-weight: 500;
        }

        .login-form {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #ffffff;
            margin-bottom: 8px;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.95);
            color: #1a1a1aff;
            font-size: 1rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus {
            outline: none;
            border-color: #ffffff;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.2);
        }

        .form-group input::placeholder {
            color: #666666;
            font-weight: 500;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checkbox-group input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .login-btn-submit {
            width: 100%;
            padding: 15px;
            background: #ffffff;
            border: 2px solid #ffffff;
            border-radius: 8px;
            color: #000000;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
        }

        .login-btn-submit:hover {
            background: #000000;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .login-links {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
        }

        .login-links a {
            color: #ffffff;
            text-decoration: underline;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-links a:hover {
            color: #cccccc;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 30px;
            color: #ffffff;
            border-top: 2px solid rgba(255, 255, 255, 0.1);
            font-weight: 500;
        }

        /* Animations */
        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .title {
                font-size: 2.2rem;
            }

            .nav {
                flex-direction: column;
                align-items: center;
            }

            .main-content {
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .slide-content {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .slide-image {
                height: 200px;
            }

            .carousel-btn {
                font-size: 1.5rem;
                padding: 10px 15px;
            }

            .modal-content {
                width: 95%;
                margin: 10% auto;
            }

            .carousel {
                height: 350px;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }

            .card {
                padding: 20px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .title {
                font-size: 1.8rem;
            }

            .carousel {
                height: 300px;
            }

            .slide-info h3 {
                font-size: 1.5rem;
            }

            .slide-info p {
                font-size: 1rem;
            }
        }

        .circle-image {
            width: 200px;
            /* or any fixed width */
            height: 200px;
            /* same as width */
            object-fit: cover;
            /* ensures the image fills the circle */
            border-radius: 50%;
            /* makes it circular */
            border: 2px solid #fff;
            /* optional: adds a white border */
        }

        .circle-image1 {
            width: 125px;
            /* or any fixed width */
            height: 125px;
            /* same as width */
            object-fit: cover;
            /* ensures the image fills the circle */
            border-radius: 50%;
            /* makes it circular */
            border: 2px solid #fff;
            /* optional: adds a white border */
        }
    </style>

<body>
    <div class="bg-animation">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <header class="header glass">
            <!-- <div class="logo">TN</div> -->
            <div>
                <h1 class="title"><img class="circle-image" src="cmsir.jpg">State Institutional Ranking Framework</h1>
                <p class="subtitle">Government of Tamil Nadu</p>
            </div>
    </div>
    </header>

    <nav class="nav">
        <a href="#overview" class="nav-item active">Overview</a>
        <a href="#rankings" class="nav-item">Rankings</a>
        <a href="#methodology" class="nav-item">Methodology</a>
        <a href="#institutions" class="nav-item">Institutions</a>
        <a href="#reports" class="nav-item">Reports</a>
        <a href="#contact" class="nav-item">Contact</a>
        <!-- <button onclick="openLoginModal()" class="nav-item login-btn">🔐 Login</button>
    --> <a href="login_modal.php" class="nav-item">🔐 Login</a>
        <a href="navbar.php" class "nav-item">Nav-Bar</a>
    </nav>

    <section class="stats">
        <div class="stat-card glass-dark">
            <div class="stat-number">1632</div>
            <div class="stat-label">Institutions Ranked</div>
        </div>
        <div class="stat-card glass-dark">
            <div class="stat-number">5</div>
            <div class="stat-label">Categories</div>
        </div>
        <div class="stat-card glass-dark">
            <div class="stat-number">12</div>
            <div class="stat-label">Parameters</div>
        </div>
        <div class="stat-card glass-dark">
            <div class="stat-number">2025</div>
            <div class="stat-label">Current Year</div>
        </div>
    </section>

    <!-- Image Carousel -->
    <section class="carousel-section">
        <div class="carousel-container glass-dark">
            <div class="carousel-header">
                <h2>Featured Institutions & Achievements</h2>
                <p>Showcasing excellence in Tamil Nadu's educational landscape</p>
            </div>
            <div class="carousel">
                <div class="carousel-track">
                    <div class="carousel-slide active ">
                        <div class="slide-content">
                            <div class="slide-image">
                                <div class="placeholder-image" style="background: linear-gradient(45deg, #2d2d2d, #1a1a1a);">
                                    <span>🏛️</span>
                                    <div class="image-overlay">IIT Madras</div>
                                </div>
                            </div>
                            <div class="slide-info">
                                <h3>Indian Institute of Technology Madras</h3>
                                <p>Premier engineering institution leading in research and innovation with world-class faculty and state-of-the-art facilities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide active">
                        <div class="slide-content">
                            <div class="slide-image">
                                <div class="placeholder-image" style="background: linear-gradient(45deg, #3d3d3d, #2a2a2a);">
                                    <span>🏥</span>
                                    <div class="image-overlay">AIIMS Chennai</div>
                                </div>
                            </div>
                            <div class="slide-info">
                                <h3>All Institute of Medical Sciences</h3>
                                <p>Excellence in medical education and healthcare services, providing comprehensive medical training and patient care.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide active">
                        <div class="slide-content">
                            <div class="slide-image">
                                <div class="placeholder-image" style="background: linear-gradient(45deg, #4a4a4a, #333333);">
                                    <span>🎓</span>
                                    <div class="image-overlay">Anna University</div>
                                </div>
                            </div>
                            <div class="slide-info">
                                <h3>Anna University</h3>
                                <p>Leading technical university with outstanding academic programs, research initiatives, and industry partnerships.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide active">
                        <div class="slide-content">
                            <div class="slide-image">
                                <div class="placeholder-image" style="background: linear-gradient(45deg, #555555, #3c3c3c);">
                                    <span>💼</span>
                                    <div class="image-overlay">IIM Tiruchirappalli</div>
                                </div>
                            </div>
                            <div class="slide-info">
                                <h3>Indian Institute of Management</h3>
                                <p>Top-tier management education and business leadership development with innovative curriculum and expert faculty.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-slide active">
                        <div class="slide-content">
                            <div class="slide-image">
                                <div class="placeholder-image" style="background: linear-gradient(45deg, #666666, #454545);">
                                    <span>🔬</span>
                                    <div class="image-overlay">Research Excellence</div>
                                </div>
                            </div>
                            <div class="slide-info">
                                <h3>Research & Innovation Hub</h3>
                                <p>Advancing scientific research and technological innovation through collaborative projects and cutting-edge facilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn prev" onclick="changeSlide(-1)">❮</button>
                <button class="carousel-btn next" onclick="changeSlide(1)">❯</button>
            </div>
            <div class="carousel-indicators">
                <span class="indicator active" onclick="currentSlide(1)"></span>
                <span class="indicator" onclick="currentSlide(2)"></span>
                <span class="indicator" onclick="currentSlide(3)"></span>
                <span class="indicator" onclick="currentSlide(4)"></span>
                <span class="indicator" onclick="currentSlide(5)"></span>
            </div>
        </div>
    </section>

    <main class="main-content">
        <div class="card glass">
            <h3>
                <span class="card-icon">🎯</span>
                About the Framework
            </h3>
            <p>The Tamil Nadu State Institutional Ranking Framework is a comprehensive evaluation system designed to assess and rank educational institutions across various parameters including teaching quality, research output, infrastructure, and student outcomes.</p>
            <a href="#" class="btn">Learn More</a>
        </div>

        <div class="card glass">
            <h3>
                <span class="card-icon">📊</span>
                Ranking Methodology
            </h3>
            <p>Our robust methodology incorporates multiple indicators across five key dimensions: Teaching, Learning & Resources; Research and Professional Practice; Graduation Outcomes; Outreach and Inclusivity; and Perception.</p>
            <a href="#" class="btn">View Methodology</a>
        </div>

        <div class="card glass">
            <h3>
                <span class="card-icon">🏆</span>
                Latest Rankings
            </h3>
            <p>Access the most recent institutional rankings across engineering, medical, management, pharmacy, and other professional education categories. Rankings are updated annually based on comprehensive data analysis.</p>
            <a href="#" class="btn">View Rankings</a>
        </div>

        <div class="card glass">
            <h3>
                <span class="card-icon">📈</span>
                Performance Analytics
            </h3>
            <p>Detailed performance analytics and comparative studies help institutions identify areas for improvement and track their progress over time through interactive dashboards and reports.</p>
            <a href="#" class="btn">View Analytics</a>
        </div>

        <div class="card glass">
            <h3>
                <span class="card-icon">🔍</span>
                Institution Search
            </h3>
            <p>Find and compare institutions by category, location, ranking, and specific parameters. Our advanced search helps students and stakeholders make informed decisions.</p>
            <a href="#" class="btn">Search Institutions</a>
        </div>

        <div class="card glass">
            <h3>
                <span class="card-icon">📋</span>
                Resources & Guidelines
            </h3>
            <p>Access comprehensive resources including evaluation guidelines, data submission formats, quality assurance frameworks, and best practices for institutional excellence.</p>
            <a href="#" class="btn">Access Resources</a>
        </div>
    </main>

    <footer class="footer glass-dark">
        <p>&copy; 2025 Government of Tamil Nadu. All rights reserved.</p>
        <p>State Institutional Ranking Framework | Tamil Nadu State Council for Higher Education {TANSCHE}</p>
    </footer>
    </div>
    <script>
        let slideIndex = 0;

        const track = document.querySelector('.carousel-track');
        const slides = document.querySelectorAll('.carousel-slide');
        const indicators = document.querySelectorAll('.indicator');

        function updateCarousel() {
            const slideWidth = slides[0].offsetWidth;
            track.style.transform = `translateX(-${slideIndex * slideWidth}px)`;

            indicators.forEach((dot, i) => {
                dot.classList.toggle('active', i === slideIndex);
            });
        }

        function changeSlide(n) {
            slideIndex += n;
            if (slideIndex < 0) {
                slideIndex = slides.length - 1;
            } else if (slideIndex >= slides.length) {
                slideIndex = 0;
            }
            updateCarousel();
        }

        function currentSlide(n) {
            slideIndex = n - 1;
            updateCarousel();
        }

        // Initialize on page load
        window.addEventListener('load', () => {
            updateCarousel();
            window.addEventListener('resize', updateCarousel); // responsive
        });
    </script>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content glass-dark">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <div class="modal-header">
                <h2>🔐 Login Portal</h2>
                <p>Access your institutional dashboard</p>
            </div>
            <form class="login-form" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="userType">Login As:</label>
                    <select id="userType" name="userType" required>
                        <option value="">Select User Type</option>
                        <option value="institution">Institution Admin</option>
                        <option value="government">Government Official</option>
                        <option value="evaluator">Evaluator</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="username">Username / Email:</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username or email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">👁️</button>
                    </div>
                </div>

                <div class="remember-forgot">
                    <label class="remember-me">
                        <input type="checkbox" id="rememberMe" name="rememberMe">
                        Remember me
                    </label>
                    <a href="#" class="forgot-password" onclick="showForgotPassword()">Forgot Password?</a>
                </div>

                <button type="submit" class="login-button" id="loginButton">
                    Login
                    <div class="loading-spinner" id="loadingSpinner"></div>
                </button>

                <div class="error-message" id="errorMessage"></div>
                <div class="success-message" id="successMessage"></div>
            </form>
        </div>
    </div>

    <script>
        // Demo credentials for testing
        const demoCredentials = {
            institution: {
                username: 'admin@institution.edu',
                password: 'admin123'
            },
            government: {
                username: 'gov.official@ministry.gov',
                password: 'gov123'
            },
            evaluator: {
                username: 'evaluator@assessment.org',
                password: 'eval123'
            }
        };

        // Modal functions
        function openLoginModal() {
            document.getElementById('loginModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').classList.remove('show');
            document.body.style.overflow = 'auto';
            clearMessages();
            resetForm();
        }

        // Password toggle
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.password-toggle');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = '👁️';
            }
        }

        // Form validation
        function validateForm(userType, username, password) {
            if (!userType) {
                throw new Error('Please select a user type');
            }

            if (!username || username.length < 3) {
                throw new Error('Username must be at least 3 characters long');
            }

            if (!password || password.length < 6) {
                throw new Error('Password must be at least 6 characters long');
            }

            return true;
        }

        // Authentication function
        function authenticateUser(userType, username, password) {
            const demo = demoCredentials[userType];

            if (demo && demo.username === username && demo.password === password) {
                return {
                    success: true,
                    user: {
                        type: userType,
                        username: username,
                        fullName: getFullName(userType),
                        permissions: getPermissions(userType)
                    }
                };
            }

            return {
                success: false,
                error: 'Invalid credentials. Please check your username and password.'
            };
        }

        // Helper functions
        function getFullName(userType) {
            const names = {
                institution: 'Dr. Sarah Johnson',
                government: 'Michael Chen',
                evaluator: 'Prof. Emily Rodriguez'
            };
            return names[userType] || 'User';
        }

        function getPermissions(userType) {
            const permissions = {
                institution: ['manage_courses', 'view_reports', 'student_management'],
                government: ['policy_review', 'audit_access', 'compliance_monitoring'],
                evaluator: ['assessment_tools', 'evaluation_reports', 'quality_assurance']
            };
            return permissions[userType] || [];
        }

        // Main login handler
        async function handleLogin(event) {
            event.preventDefault();

            const loginButton = document.getElementById('loginButton');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const form = event.target;

            // Get form data
            const formData = new FormData(form);
            const userType = formData.get('userType');
            const username = formData.get('username');
            const password = formData.get('password');
            const rememberMe = formData.get('rememberMe');

            // Clear previous messages
            clearMessages();

            try {
                // Validate form
                validateForm(userType, username, password);

                // Show loading state
                loginButton.disabled = true;
                loadingSpinner.style.display = 'inline-block';

                // Simulate API call delay
                await new Promise(resolve => setTimeout(resolve, 1500));

                // Authenticate user
                const result = authenticateUser(userType, username, password);

                if (result.success) {
                    showSuccessMessage(`Welcome back, ${result.user.fullName}!`);

                    // Store user session (in a real app, this would be handled securely)
                    sessionStorage.setItem('currentUser', JSON.stringify(result.user));

                    if (rememberMe) {
                        localStorage.setItem('rememberedUser', username);
                    }

                    // Redirect to dashboard after success
                    setTimeout(() => {
                        closeLoginModal();
                        showDashboard(result.user);
                    }, 1000);

                } else {
                    showErrorMessage(result.error);
                }

            } catch (error) {
                showErrorMessage(error.message);
            } finally {
                // Hide loading state
                loginButton.disabled = false;
                loadingSpinner.style.display = 'none';
            }
        }

        // Message functions
        function showErrorMessage(message) {
            const errorElement = document.getElementById('errorMessage');
            errorElement.textContent = message;
            errorElement.style.display = 'block';

            // Auto-hide after 5 seconds
            setTimeout(() => {
                errorElement.style.display = 'none';
            }, 5000);
        }

        function showSuccessMessage(message) {
            const successElement = document.getElementById('successMessage');
            successElement.textContent = message;
            successElement.style.display = 'block';
        }

        function clearMessages() {
            document.getElementById('errorMessage').style.display = 'none';
            document.getElementById('successMessage').style.display = 'none';
        }

        // Reset form
        function resetForm() {
            document.querySelector('.login-form').reset();
            document.getElementById('password').type = 'password';
            document.querySelector('.password-toggle').textContent = '👁️';
        }

        // Forgot password handler
        function showForgotPassword() {
            alert('Forgot password functionality would typically send a reset link to your email. For demo purposes, use the credentials shown in the console.');
            console.log('Demo Credentials:');
            console.log('Institution Admin: admin@institution.edu / admin123');
            console.log('Government Official: gov.official@ministry.gov / gov123');
            console.log('Evaluator: evaluator@assessment.org / eval123');
        }

        // Dashboard simulation
        function showDashboard(user) {
            alert(`Dashboard loaded for ${user.fullName} (${user.type})\nPermissions: ${user.permissions.join(', ')}`);
        }

        // Close modal when clicking outside
        document.getElementById('loginModal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeLoginModal();
            }
        });

        // Handle ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeLoginModal();
            }
        });

        // Auto-fill remembered user on page load
        window.addEventListener('load', function() {
            const rememberedUser = localStorage.getItem('rememberedUser');
            if (rememberedUser) {
                document.getElementById('username').value = rememberedUser;
                document.getElementById('rememberMe').checked = true;
            }
        });

        // Show demo credentials in console
        console.log('=== DEMO CREDENTIALS ===');
        console.log('Institution Admin: admin@institution.edu / admin123');
        console.log('Government Official: gov.official@ministry.gov / gov123');
        console.log('Evaluator: evaluator@assessment.org / eval123');
    </script>



</body>

</html>