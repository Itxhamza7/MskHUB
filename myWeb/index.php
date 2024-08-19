<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Hero Section</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .hero {
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1629717961359-c7bb0bbb6aa7?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            padding: 0 20px;
            overflow: hidden;
        }

        .hero-content {
            max-width: 800px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease-out forwards;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out forwards 0.5s;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease-out forwards 1s;
        }

        .hero a {
            display: inline-block;
            padding: 15px 30px;
            font-size: 1.2rem;
            color: white;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            animation: fadeInUp 1s ease-out forwards 1.5s;
        }

        .hero a:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.2rem;
            }

            .hero a {
                font-size: 1rem;
                padding: 12px 25px;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* About Section Styles */
        .about {
            padding: 50px 20px;
            text-align: center;
            background-color: #f4f4f4;
            color: #333;
        }

        .about h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease-out forwards 0.5s;
        }

        .about p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease-out forwards 1s;
            max-width: 800px;
            margin: 0 auto 1.5rem;
        }

        .about img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            animation: fadeInUp 1s ease-out forwards 1.5s;
        }

        @media (max-width: 768px) {
            .about h2 {
                font-size: 2rem;
            }

            .about p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Website</h1>
            <p>Enjoy your Music,I Hope You Love It.</p>
            <a href="home.php">Get Started</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <h2>About Us</h2>
        <p>We are passionate about bringing you the best music experience possible. Our platform offers a wide variety of music genres to suit every taste, from the latest hits to classic tracks.</p>
        <p>Our mission is to create a space where music lovers can discover, enjoy, and share their favorite tunes.</p>
        <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="About Us">
    </section>

<?php
include "footer.php";
?>
</body>
</html>
