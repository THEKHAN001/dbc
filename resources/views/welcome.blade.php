<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V.B.C.I. Church - Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2c5e92;
            --secondary: #d4af37;
            --accent: #8b4513;
            --light: #f8f9fa;
            --dark: #343a40;
            --success: #28a745;
            --warning: #ffc107;
            --danger: #dc3545;
            --light-blue: #e9f2f9;
            --shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #f9fafb;
            color: var(--dark);
            line-height: 1.6;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, var(--primary) 0%, #1a3a5f 100%);
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo-icon {
            font-size: 2.5rem;
            color: var(--secondary);
        }

        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
        }

        .logo-subtext {
            font-size: 0.9rem;
            opacity: 0.8;
            font-weight: 300;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: var(--transition);
            position: relative;
        }

        nav a:hover {
            color: var(--secondary);
        }

        nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary);
            transition: var(--transition);
        }

        nav a:hover::after {
            width: 100%;
        }

        .auth-buttons {
            display: flex;
            gap: 15px;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            font-size: 1rem;
        }

        .btn-login {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-login:hover {
            background-color: white;
            color: var(--primary);
        }

        .btn-register {
            background-color: var(--secondary);
            color: var(--dark);
        }

        .btn-register:hover {
            background-color: #c19d2d;
            transform: translateY(-2px);
        }

        /* Main Content Sections */
        .page-section {
            display: none;
            /* Hidden by default, shown by JS */
            padding: 80px 0;
            min-height: calc(100vh - 150px);
            /* Adjust based on header/footer height */
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(44, 94, 146, 0.85), rgba(26, 58, 95, 0.9)), url('https://placehold.co/1200x600/2c5e92/ffffff?text=Church+Background') no-repeat center center/cover;
            color: white;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .btn-hero {
            background-color: var(--secondary);
            color: var(--dark);
            padding: 15px 35px;
            font-size: 1.2rem;
            margin: 0 10px;
        }

        .btn-hero-outline {
            background-color: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-hero-outline:hover {
            background-color: white;
            color: var(--primary);
        }

        /* Features Section */
        .features {
            background-color: var(--light);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            padding: 40px 25px;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 3.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--primary);
        }

        /* Testimonials Section */
        .testimonials {
            background-color: var(--light-blue);
            /* Lighter background for testimonials */
            padding: 80px 0 150px;
            /* Increased bottom padding */
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .testimonial-content {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
            font-style: italic;
            flex-grow: 1;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-top: auto;
            /* Pushes author to the bottom */
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: 600;
            flex-shrink: 0;
        }

        .author-info h4 {
            font-size: 1.2rem;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .author-info p {
            font-size: 0.9rem;
            color: #777;
        }


        /* Events Section (New Styles) */
        .page-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .page-title h2 {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .page-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 4px;
            background: var(--secondary);
            border-radius: 2px;
        }

        .events-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
        }

        .event-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .event-image {
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .event-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-date {
            font-size: 0.95rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .event-date i {
            color: var(--secondary);
        }

        .event-title {
            font-size: 1.7rem;
            color: var(--primary);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .event-description {
            font-size: 1rem;
            color: #555;
            margin-bottom: 20px;
            flex-grow: 1;
            /* Allows description to take available space */
        }

        .event-details {
            display: flex;
            flex-wrap: wrap;
            /* Allows details to wrap on smaller screens */
            gap: 15px;
            margin-top: auto;
            /* Pushes details to the bottom */
            margin-bottom: 20px;
            font-size: 0.9rem;
            color: #666;
        }

        .event-time,
        .event-location {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .event-time i,
        .event-location i {
            color: var(--secondary);
        }

        .btn-event {
            display: inline-block;
            padding: 10px 20px;
            background-color: var(--primary);
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: var(--transition);
            font-weight: 500;
            text-align: center;
        }

        .btn-event:hover {
            background-color: #1a3a5f;
        }

        /* Members List Specific Styles */
        .member-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .member-card {
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            text-align: center;
            transition: var(--transition);
        }

        .member-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }

        .member-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: var(--light-blue);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: var(--primary);
            margin: 0 auto 20px;
            border: 3px solid var(--secondary);
        }

        .member-info h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .member-info p {
            color: #666;
            margin-bottom: 15px;
        }

        .member-contact-btn {
            display: inline-block;
            padding: 8px 18px;
            background-color: var(--secondary);
            color: var(--dark);
            text-decoration: none;
            border-radius: 20px;
            font-weight: 500;
            transition: var(--transition);
        }

        .member-contact-btn:hover {
            background-color: #c19d2d;
        }

        /* Donation Form Specific Styles */
        .form-container {
            background: white;
            width: 100%;
            max-width: 600px;
            /* Increased max-width for better form layout */
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .payment-options {
            display: flex;
            justify-content: space-around;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
            /* Allow wrapping on smaller screens */
        }

        .payment-option {
            flex: 1;
            /* Distribute space evenly */
            min-width: 120px;
            /* Minimum width for each option */
            padding: 20px 15px;
            border: 2px solid #ddd;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
            color: #666;
            font-weight: 500;
        }

        .payment-option i {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .payment-option:hover {
            border-color: var(--secondary);
            color: var(--primary);
        }

        .payment-option.active {
            border-color: var(--primary);
            background-color: var(--light-blue);
            color: var(--primary);
            box-shadow: inset 0 0 0 2px var(--primary);
        }

        .payment-form {
            /* Styles for the payment details form */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(44, 94, 146, 0.2);
        }

        .btn-form {
            /* Renamed from btn-donate to btn-form for consistency with user's new code */
            width: 100%;
            padding: 14px;
            background: var(--secondary);
            color: var(--dark);
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 10px;
        }

        .btn-form:hover {
            background: #c19d2d;
            transform: translateY(-2px);
        }

        .donation-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: 500;
            display: none;
            /* Hidden by default */
        }

        .donation-message.success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .donation-message.error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Contact Section Specific Styles */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
            margin-top: 40px;
        }

        .contact-info,
        .contact-form-container {
            background: white;
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .contact-info h3,
        .contact-form-container h3 {
            font-size: 1.8rem;
            color: var(--primary);
            margin-bottom: 25px;
            border-bottom: 2px solid var(--light-blue);
            padding-bottom: 10px;
        }

        .contact-info ul {
            list-style: none;
        }

        .contact-info ul li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            font-size: 1.1rem;
            color: #555;
        }

        .contact-info ul li i {
            color: var(--secondary);
            font-size: 1.5rem;
            margin-right: 15px;
            margin-top: 3px;
            /* Align icon with text */
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }

        .contact-form .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: var(--transition);
        }

        .contact-form textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .contact-form .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(44, 94, 146, 0.2);
        }

        .btn-send-message {
            display: inline-block;
            padding: 12px 25px;
            background: var(--primary);
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 10px;
        }

        .btn-send-message:hover {
            background: #1a3a5f;
        }

        /* Form Page Specific Styles (for login/register pages) */
        .form-page-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            background-color: var(--light-blue);
        }

        .form-card {
            background: white;
            width: 100%;
            max-width: 500px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .form-card-header {
            background: var(--primary);
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            margin: -30px -30px 30px -30px;
            /* Adjust to sit flush with card */
        }

        .form-card-header h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }

        .btn-form-submit {
            width: 100%;
            padding: 14px;
            background: var(--primary);
            color: white;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 10px;
        }

        .btn-form-submit:hover {
            background: #1a3a5f;
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }

        .form-footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.4rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--secondary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #ddd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--secondary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            transition: var(--transition);
            text-decoration: none;
            font-size: 1.2rem;
        }

        .social-links a:hover {
            background: var(--secondary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        .text-center {
            /* Added missing class */
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 900px) {
            .header-container {
                flex-direction: column;
                gap: 20px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .payment-options {
                flex-direction: column;
                align-items: center;
            }

            .payment-option {
                width: 80%;
                /* Make options wider on small screens */
            }
        }

        @media (max-width: 600px) {
            .auth-buttons {
                flex-direction: column;
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
            }

            .btn {
                width: 100%;
            }

            .hero-buttons {
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .btn-hero {
                margin: 5px 0;
            }

            .form-card,
            .form-container {
                margin: 0 20px;
                padding: 20px;
                /* Reduce padding on small screens */
            }

            .contact-grid {
                grid-template-columns: 1fr;
                /* Stack columns on small screens */
            }
        }
    </style>
</head>

<body>
    <!-- Header with Navigation -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon">
                    <i class="fas fa-church"></i>
                </div>
                <div>
                    <div class="logo-text">VICTORY BIBLE CHURCH INTERNATIONAL</div>
                    <div class="logo-subtext">Management System</div>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="#home"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#events"><i class="fas fa-calendar-alt"></i> Events</a></li>
                    <li><a href="#members"><i class="fas fa-users"></i> Members</a></li>
                    <li><a href="#donations"><i class="fas fa-donate"></i> Donations</a></li>
                    <li><a href="#contact"><i class="fas fa-envelope"></i> Contact</a></li>
                </ul>
            </nav>

            <div class="auth-buttons">
                <a href="#login" class="btn btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
                <a href="#register" class="btn btn-register"><i class="fas fa-user-plus"></i> Register</a>
            </div>
        </div>
    </header>

    <!-- Main Content Area -->
    <main>
        <!-- Home Section -->
        <section id="home" class="page-section hero">
            <div class="container hero-content">
                <h1>Welcome to V.B.C.I. Church Management</h1>
                <p>Streamline your church operations and strengthen your community with our comprehensive management
                    solution</p>
                <div class="hero-buttons">
                    <button class="btn btn-hero"><i class="fas fa-play-circle"></i> Watch Video</button>
                    <button class="btn btn-hero btn-hero-outline"><i class="fas fa-book"></i> Learn More</button>
                </div>
            </div>
        </section>

        <!-- Features Section (part of Home for this merged version) -->
        <section id="features-section" class="page-section features">
            <div class="container">
                <div class="section-title">
                    <h2>Church Management Features</h2>
                    <p>Everything you need to manage your church effectively</p>
                </div>

                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h3>Member Directory</h3>
                        <p>Track member information, attendance, and involvement in a secure, searchable database.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3>Event Management</h3>
                        <p>Schedule services, meetings, and special events with automated reminders and RSVP tracking.
                        </p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-donate"></i>
                        </div>
                        <h3>Donation Tracking</h3>
                        <p>Record and report on tithes, offerings, and other contributions with tax-compliant
                            statements.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <h3>Ministry Coordination</h3>
                        <p>Organize volunteers, assign tasks, and manage resources for all your church ministries.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Reporting & Analytics</h3>
                        <p>Gain insights with customizable reports on attendance, giving, and member engagement.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h3>Mobile Access</h3>
                        <p>Access your church management system from anywhere with our responsive mobile platform.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section (part of Home for this merged version) -->
        <section id="testimonials-section" class="page-section testimonials">
            <div class="container">
                <div class="section-title">
                    <h2>What Church Leaders Say</h2>
                    <p>Hear from churches that are transforming their ministries</p>
                </div>

                <div class="testimonial-grid">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            This system has revolutionized how we manage our congregation. Attendance tracking that used
                            to take hours now happens automatically, and our members love the mobile app.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">PR</div>
                            <div class="author-info">
                                <h4>Pastor Kingsley Asare</h4>
                                <p>Victory Bible Church International</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            The donation tracking features have been a game-changer for our finance team. Generating
                            year-end statements is now effortless, and our members appreciate the transparency.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">MS</div>
                            <div class="author-info">
                                <h4>MAVIS BAOHENE</h4>
                                <p>Finance Director, VIWOF Fellowship</p>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            Coordinating our 20+ ministries was overwhelming before we implemented this system. Now we
                            have visibility into all activities and resources are properly allocated.
                        </div>
                        <div class="testimonial-author">
                            <div class="author-avatar">DW</div>
                            <div class="author-info">
                                <h4>REV PROVIDENCE MIREKU</h4>
                                <p>Ministry Coordinator, Faith Cathedral</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events Section (Updated) -->
        <section id="events" class="page-section">
            <div class="container">
                <div class="page-title">
                    <h2><i class="fas fa-calendar-alt"></i> Church Events</h2>
                    <p>Join us for our upcoming services and special events</p>
                </div>

                <div class="events-container">
                    <!-- Event 1 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Sunday, July 28, 2025
                            </div>
                            <h3 class="event-title">Sunday Worship Service</h3>
                            <p class="event-description">Join us for our weekly worship service with inspiring music and
                                a powerful message from Pastor Kingsley Asare.</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 9:00 AM - 11:30 AM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Main Sanctuary
                                </div>
                            </div>
                            <a href="#" class="btn-event">RSVP Now</a>
                        </div>
                    </div>

                    <!-- Event 2 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Tuesday, July 30, 2025
                            </div>
                            <h3 class="event-title">Youth Bible Study</h3>
                            <p class="event-description">Special Bible study session for our youth members. Topic:
                                "Living with Purpose in a Digital Age".</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 6:00 PM - 8:00 PM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Youth Chapel
                                </div>
                            </div>
                            <a href="#" class="btn-event">Join Study</a>
                        </div>
                    </div>

                    <!-- Event 3 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Saturday, August 3, 2025
                            </div>
                            <h3 class="event-title">Community Outreach Program</h3>
                            <p class="event-description">Help us serve our community by distributing food and supplies
                                to families in need.</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 10:00 AM - 2:00 PM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Community Center
                                </div>
                            </div>
                            <a href="#" class="btn-event">Volunteer</a>
                        </div>
                    </div>

                    <!-- Event 4 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1566566220367-af8d77269124?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Sunday, August 4, 2025
                            </div>
                            <h3 class="event-title">Baptism Service</h3>
                            <p class="event-description">Celebrate with us as new believers publicly declare their
                                faith through water baptism.</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 2:00 PM - 4:00 PM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Baptismal Pool
                                </div>
                            </div>
                            <a href="#" class="btn-event">Learn More</a>
                        </div>
                    </div>

                    <!-- Event 5 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Friday, August 9, 2025
                            </div>
                            <h3 class="event-title">Couples Night</h3>
                            <p class="event-description">An evening of fellowship and encouragement for married
                                couples. Special guest speakers on "Building Strong Marriages".</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 7:00 PM - 9:30 PM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Fellowship Hall
                                </div>
                            </div>
                            <a href="#" class="btn-event">Register Now</a>
                        </div>
                    </div>

                    <!-- Event 6 -->
                    <div class="event-card">
                        <div class="event-image"
                            style="background-image: url('https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80');">
                        </div>
                        <div class="event-content">
                            <div class="event-date">
                                <i class="fas fa-calendar"></i> Sunday, August 11, 2025
                            </div>
                            <h3 class="event-title">Leadership Conference</h3>
                            <p class="event-description">Annual leadership conference for church leaders and ministry
                                coordinators. Theme: "Leading with Vision and Integrity".</p>
                            <div class="event-details">
                                <div class="event-time">
                                    <i class="fas fa-clock"></i> 9:00 AM - 4:00 PM
                                </div>
                                <div class="event-location">
                                    <i class="fas fa-map-marker-alt"></i> Conference Center
                                </div>
                            </div>
                            <a href="#" class="btn-event">Get Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Members Section -->
        <section id="members" class="page-section">
            <div class="container">
                <div class="section-title">
                    <h2>Our Beloved Church Members</h2>
                    <p>A directory of our vibrant and growing community.</p>
                </div>

                <div class="member-list">
                    <!-- Member Card 1 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>John Doe</h3>
                            <p>Elder & Head of Missions</p>
                            <a href="mailto:john.doe@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>

                    <!-- Member Card 2 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>Jane Smith</h3>
                            <p>Deaconess & Worship Leader</p>
                            <a href="mailto:jane.smith@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>

                    <!-- Member Card 3 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>David Lee</h3>
                            <p>Youth Ministry Coordinator</p>
                            <a href="mailto:david.lee@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>

                    <!-- Member Card 4 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>Sarah Chen</h3>
                            <p>Children's Ministry Volunteer</p>
                            <a href="mailto:sarah.chen@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>

                    <!-- Member Card 5 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>Michael Brown</h3>
                            <p>Usher & Greeter</p>
                            <a href="mailto:michael.brown@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>

                    <!-- Member Card 6 -->
                    <div class="member-card">
                        <div class="member-avatar"><i class="fas fa-user"></i></div>
                        <div class="member-info">
                            <h3>Emily White</h3>
                            <p>Choir Member</p>
                            <a href="mailto:emily.white@example.com" class="member-contact-btn"><i
                                    class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Donations Section -->
        <section id="donations" class="page-section">
            <div class="container">
                <div class="page-title">
                    <h2><i class="fas fa-donate"></i> Make a Donation</h2>
                    <p>Support our ministry with your generous contributions</p>
                </div>

                <div class="form-container">
                    <form id="donationForm">
                        <div class="form-group">
                            <label for="donationAmount">Donation Amount ($)</label>
                            <input type="number" id="donationAmount" class="form-control"
                                placeholder="Enter donation amount" min="1" step="0.01" required>
                        </div>

                        <div class="form-group">
                            <label>Payment Method</label>
                            <div class="payment-options">
                                <div class="payment-option active" data-method="card">
                                    <i class="fas fa-credit-card"></i>
                                    <div>Credit Card</div>
                                </div>
                                <div class="payment-option" data-method="paypal">
                                    <i class="fab fa-paypal"></i>
                                    <div>PayPal</div>
                                </div>
                                <div class="payment-option" data-method="bank">
                                    <i class="fas fa-university"></i>
                                    <div>Bank Transfer</div>
                                </div>
                            </div>
                        </div>

                        <div class="payment-form" id="cardPaymentForm">
                            <div class="form-group">
                                <label for="cardName">Name on Card</label>
                                <input type="text" id="cardName" class="form-control"
                                    placeholder="Full name as on card" required>
                            </div>

                            <div class="form-group">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" id="cardNumber" class="form-control"
                                    placeholder="0000 0000 0000 0000" required>
                            </div>

                            <div class="form-group">
                                <label for="cardExpiry">Expiry Date</label>
                                <input type="text" id="cardExpiry" class="form-control" placeholder="MM/YY"
                                    required>
                            </div>

                            <div class="form-group">
                                <label for="cardCVC">CVC</label>
                                <input type="text" id="cardCVC" class="form-control" placeholder="CVC"
                                    required>
                            </div>
                        </div>

                        <div class="payment-form" id="paypalPaymentForm" style="display: none;">
                            <p class="text-center">You will be redirected to PayPal to complete your donation securely.
                            </p>
                            <div class="form-group">
                                <label for="paypalEmail">PayPal Email (Optional)</label>
                                <input type="email" id="paypalEmail" class="form-control"
                                    placeholder="Your PayPal email">
                            </div>
                        </div>

                        <div class="payment-form" id="bankPaymentForm" style="display: none;">
                            <p class="text-center">Please use the following bank details for your transfer:</p>
                            <ul style="list-style: none; padding: 0; margin-top: 15px; text-align: left;">
                                <li style="margin-bottom: 8px;"><strong>Bank Name:</strong> VBCI Bank</li>
                                <li style="margin-bottom: 8px;"><strong>Account Name:</strong> Victory Bible Church
                                    International</li>
                                <li style="margin-bottom: 8px;"><strong>Account Number:</strong> 1234567890</li>
                                <li style="margin-bottom: 8px;"><strong>SWIFT/BIC:</strong> VBCIGHAC</li>
                                <li style="margin-bottom: 8px;"><strong>Reference:</strong> Donation - [Your
                                    Name/Email]</li>
                            </ul>
                            <p style="margin-top: 20px; font-style: italic; color: #777;">Kindly send us a confirmation
                                email after your transfer.</p>
                        </div>

                        <div class="form-group">
                            <label for="donationNote">Donation Note (Optional)</label>
                            <textarea id="donationNote" class="form-control" placeholder="Add a note about your donation" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-form">Donate Now</button>
                        </div>
                    </form>
                    <div id="donationMessage" class="donation-message"></div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="page-section">
            <div class="container">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <p>We'd love to hear from you! Reach out to us with any questions or inquiries.</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i>
                                <div>T-JUNCTION , SHILOH CITY, ACCRA, GHANA</div>
                            </li>
                            <li><i class="fas fa-phone"></i>
                                <div>+233 (555) 123-4567</div>
                            </li>
                            <li><i class="fas fa-envelope"></i>
                                <div>info@vbci-church.com</div>
                            </li>
                            <li><i class="fas fa-clock"></i>
                                <div>Office Hours: Mon-Fri, 9:00 AM - 12:00 PM</div>
                            </li>
                        </ul>
                        <div style="margin-top: 30px;">
                            <h4>Follow Us:</h4>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form-container">
                        <h3>Send Us a Message</h3>
                        <form id="contactForm" class="contact-form">
                            <div class="form-group">
                                <label for="contactName">Your Name</label>
                                <input type="text" id="contactName" class="form-control"
                                    placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <label for="contactEmail">Your Email</label>
                                <input type="email" id="contactEmail" class="form-control"
                                    placeholder="Enter your email" required>
                            </div>

                            <div class="form-group">
                                <label for="contactSubject">Subject</label>
                                <input type="text" id="contactSubject" class="form-control"
                                    placeholder="Subject of your message" required>
                            </div>

                            <div class="form-group">
                                <label for="contactMessage">Message</label>
                                <textarea id="contactMessage" class="form-control" placeholder="Write your message here..." required></textarea>
                            </div>

                            <button type="submit" class="btn-send-message"><i class="fas fa-paper-plane"></i> Send
                                Message</button>
                        </form>
                        <div id="contactMessageStatus"
                            style="margin-top: 20px; text-align: center; font-weight: bold;"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Login Section -->
        <section id="login" class="page-section form-page-container">
            <div class="form-card">
                <div class="form-card-header">
                    <h2><i class="fas fa-sign-in-alt"></i> Member Login</h2>
                    <p>Access your V.B.C.I. Church Management account</p>
                </div>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="loginEmail">Email Address</label>
                        <input type="email" id="loginEmail" class="form-control" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" id="loginPassword" class="form-control"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-form-submit">Login to Your Account</button>
                    </div>

                    <div class="form-footer">
                        <p>Forgot your password? <a href="#">Reset Password</a></p>
                        <p>Don't have an account? <a href="#register">Register Now</a></p>
                    </div>
                </form>
                <div id="loginStatusMessage"
                    style="margin-top: 20px; text-align: center; font-weight: bold; color: red;"></div>
            </div>
        </section>

        <!-- Register Section -->
        <section id="register" class="page-section form-page-container">
            <div class="form-card">
                <div class="form-card-header">
                    <h2><i class="fas fa-user-plus"></i> Create Account</h2>
                    <p>Join our community and get access to member features</p>
                </div>
                <form id="registerForm">
                    <div class="form-group">
                        <label for="registerName">Full Name</label>
                        <input type="text" id="registerName" class="form-control"
                            placeholder="Enter your full name" required>
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Email Address</label>
                        <input type="email" id="registerEmail" class="form-control" placeholder="Enter your email"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="registerPhone">Phone Number</label>
                        <input type="tel" id="registerPhone" class="form-control"
                            placeholder="Enter your phone number">
                    </div>

                    <div class="form-group">
                        <label for="registerPassword">Password</label>
                        <input type="password" id="registerPassword" class="form-control"
                            placeholder="Create a password" required>
                    </div>

                    <div class="form-group">
                        <label for="registerConfirmPassword">Confirm Password</label>
                        <input type="password" id="registerConfirmPassword" class="form-control"
                            placeholder="Confirm your password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-form-submit">Create Account</button>
                    </div>

                    <div class="form-footer">
                        <p>Already have an account? <a href="#login">Login Now</a></p>
                    </div>
                </form>
                <div id="registerStatusMessage"
                    style="margin-top: 20px; text-align: center; font-weight: bold; color: green;"></div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>V.B.C.I. CHURCH</h3>
                    <p>Providing comprehensive church management solutions since 2025. Our mission is to help churches
                        focus on ministry by simplifying administration.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="#features-section"><i class="fas fa-chevron-right"></i> Features</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Pricing</a></li>
                        <li><a href="#contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Resources</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Help Center</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Documentation</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Tutorial Videos</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Community Forum</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Church Blog</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> T-JUNCTION , SHILOH CITY</li>
                        <li><i class="fas fa-phone"></i> (555) 123-4567</li>
                        <li><i class="fas fa-envelope"></i> info@V.B.C.I church.com</li>
                        <li><i class="fas fa-clock"></i> Mon-Fri: 9AM - 12NOON</li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2025 Victory Bible Church International Management System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Function to show a specific section and hide others
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.page-section');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                // For form pages, ensure the container styles are applied
                if (sectionId === 'login' || sectionId === 'register' || sectionId === 'donations') {
                    targetSection.style.display = 'flex'; // Use flex for centering
                } else {
                    targetSection.style.display = 'block';
                }
                window.scrollTo(0, 0); // Scroll to top of the page
            } else {
                // Fallback to home if section not found (e.g., invalid hash)
                showSection('home');
                document.getElementById('features-section').style.display = 'block';
                document.getElementById('testimonials-section').style.display = 'block';
            }
        }

        // Handle navigation clicks
        document.querySelectorAll('nav a, .auth-buttons a, .form-footer a').forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href.startsWith('#')) {
                    e.preventDefault(); // Prevent default link behavior
                    const sectionId = href.substring(1); // Get section ID from hash
                    window.location.hash = sectionId; // Update URL hash
                }
            });
        });

        // Handle initial page load and hash changes
        function handleHashChange() {
            const hash = window.location.hash.substring(1); // Get hash without '#'
            if (hash) {
                showSection(hash);
            } else {
                // Default to home page if no hash
                showSection('home');
                document.getElementById('features-section').style.display = 'block';
                document.getElementById('testimonials-section').style.display = 'block';
            }
        }

        window.addEventListener('hashchange', handleHashChange);
        window.addEventListener('load', handleHashChange); // Initial load

        // --- Form Submission Handlers ---

        // Donation Form
        document.getElementById('donationForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const amount = document.getElementById('donationAmount').value;
            const messageDiv = document.getElementById('donationMessage');
            const activeMethod = document.querySelector('.payment-option.active').dataset.method;

            messageDiv.style.display = 'none'; // Hide previous messages

            if (amount <= 0) {
                messageDiv.textContent = 'Please enter a valid donation amount.';
                messageDiv.className = 'donation-message error';
                messageDiv.style.display = 'block';
                return;
            }

            messageDiv.textContent = 'Processing your donation...';
            messageDiv.className = 'donation-message'; // Neutral state
            messageDiv.style.display = 'block';

            let paymentDetails = {
                amount: parseFloat(amount)
            };
            let successMessage = '';

            switch (activeMethod) {
                case 'card':
                    paymentDetails.cardName = document.getElementById('cardName').value;
                    paymentDetails.cardNumber = document.getElementById('cardNumber').value;
                    paymentDetails.cardExpiry = document.getElementById('cardExpiry').value;
                    paymentDetails.cardCVC = document.getElementById('cardCVC').value;

                    if (!paymentDetails.cardName || !paymentDetails.cardNumber || !paymentDetails.cardExpiry ||
                        !paymentDetails.cardCVC) {
                        messageDiv.textContent = 'Please fill in all credit card details.';
                        messageDiv.className = 'donation-message error';
                        messageDiv.style.display = 'block';
                        return;
                    }
                    successMessage =
                        `Thank you for your $${parseFloat(amount).toFixed(2)} donation via Credit Card! Transaction ID: TXN${Date.now()}`;
                    break;
                case 'paypal':
                    paymentDetails.paypalEmail = document.getElementById('paypalEmail').value;
                    successMessage =
                        `Thank you for your $${parseFloat(amount).toFixed(2)} donation via PayPal! You would be redirected now.`;
                    // In a real app, you'd redirect to PayPal here
                    break;
                case 'bank':
                    successMessage =
                        `Thank you for your $${parseFloat(amount).toFixed(2)} donation via Bank Transfer! Please complete the transfer using the provided details.`;
                    break;
            }

            // Simulate API call
            try {
                // This is where a real fetch call to your backend payment API would go
                // const response = await fetch('/api/process-donation', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({ ...paymentDetails, method: activeMethod })
                // });
                // const result = await response.json();

                // For simulation:
                const response = {
                    ok: true
                }; // Simulate success
                if (response.ok) {
                    messageDiv.textContent = successMessage;
                    messageDiv.className = 'donation-message success';
                    document.getElementById('donationForm').reset(); // Clear form on success
                    // Reset active payment method to card and show card form if successful
                    document.querySelectorAll('.payment-option').forEach(opt => opt.classList.remove('active'));
                    document.querySelector('[data-method="card"]').classList.add('active');
                    document.getElementById('cardPaymentForm').style.display = 'block';
                    document.getElementById('paypalPaymentForm').style.display = 'none';
                    document.getElementById('bankPaymentForm').style.display = 'none';
                } else {
                    // Handle actual API error response here
                    messageDiv.textContent = `Donation failed. Please try again.`;
                    messageDiv.className = 'donation-message error';
                }
            } catch (error) {
                console.error('Donation API error:', error);
                messageDiv.textContent =
                    'An error occurred while processing your donation. Please try again later.';
                messageDiv.className = 'donation-message error';
            } finally {
                messageDiv.style.display = 'block';
            }
        });

        // Payment Method Selection Logic
        document.querySelectorAll('.payment-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.payment-option').forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');

                const method = this.dataset.method;
                document.getElementById('cardPaymentForm').style.display = 'none';
                document.getElementById('paypalPaymentForm').style.display = 'none';
                document.getElementById('bankPaymentForm').style.display = 'none';

                if (method === 'card') {
                    document.getElementById('cardPaymentForm').style.display = 'block';
                } else if (method === 'paypal') {
                    document.getElementById('paypalPaymentForm').style.display = 'block';
                } else if (method === 'bank') {
                    document.getElementById('bankPaymentForm').style.display = 'block';
                }
            });
        });


        // Contact Form
        document.getElementById('contactForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const statusDiv = document.getElementById('contactMessageStatus');
            statusDiv.style.color = 'green';
            statusDiv.textContent = 'Message sent successfully! We will get back to you soon.';
            document.getElementById('contactForm').reset(); // Clear the form
            console.log('Contact form submitted. In a real application, this data would be sent to a backend.');
        });

        // Login Form
        document.getElementById('loginForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const statusDiv = document.getElementById('loginStatusMessage');
            // In a real application, you would send this data to a backend for authentication
            console.log('Login attempt with:', {
                email: document.getElementById('loginEmail').value,
                password: document.getElementById('loginPassword').value
            });
            statusDiv.style.color = 'red';
            statusDiv.textContent = 'Login functionality is not yet implemented. This is a placeholder.';
            // For a real login, you'd redirect on success or show specific error messages
        });

        // Register Form
        document.getElementById('registerForm').addEventListener('submit', (e) => {
            e.preventDefault();
            const statusDiv = document.getElementById('registerStatusMessage');
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('registerConfirmPassword').value;

            if (password !== confirmPassword) {
                statusDiv.style.color = 'red';
                statusDiv.textContent = 'Passwords do not match!';
                return;
            }

            // In a real application, you would send this data to a backend for registration
            console.log('Registration attempt with:', {
                name: document.getElementById('registerName').value,
                email: document.getElementById('registerEmail').value,
                phone: document.getElementById('registerPhone').value,
                password: password
            });
            statusDiv.style.color = 'green';
            statusDiv.textContent = 'Registration successful! You can now log in.';
            document.getElementById('registerForm').reset(); // Clear the form after successful registration
            // For a real registration, you'd redirect to login or a dashboard on success
        });

        console.log("Script loaded and executed successfully."); // Added for debugging
    </script>
</body>

</html>
