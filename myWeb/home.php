<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .hero-section {
            background: url('images/music-bg.jpg') no-repeat center center/cover;
            height: 100vh;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin: 20px 0;
        }
        .hero-section a {
            color: white;
            background-color: #007bff;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 25px;
            text-decoration: none;
        }
        .featured-section {
            padding: 50px 0;
        }
        .featured-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }
        .album-card {
            transition: transform 0.3s;
        }
        .album-card:hover {
            transform: translateY(-10px);
        }
        .music-player {
            padding: 50px 0;
            background-color: #343a40;
            color: white;
            text-align: center;
        }
        .music-player audio {
            width: 100%;
            max-width: 600px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <h1>Welcome to Music World</h1>
        <p>Discover the latest hits, albums, and artists.</p>
        <a href="explore.php">Explore Now</a>
    </div>

    <!-- Featured Albums Section -->
    <div id="featured" class="featured-section">
        <div class="container">
            <h2>Featured Albums</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card album-card">
                        <img src="images/album1.jpg" class="card-img-top" alt="Album 1">
                        <div class="card-body">
                            <h5 class="card-title">Album 1</h5>
                            <p class="card-text">By Artist 1</p>
                            <a href="#" class="btn btn-primary">Listen Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card album-card">
                        <img src="images/album2.jpg" class="card-img-top" alt="Album 2">
                        <div class="card-body">
                            <h5 class="card-title">Album 2</h5>
                            <p class="card-text">By Artist 2</p>
                            <a href="#" class="btn btn-primary">Listen Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card album-card">
                        <img src="images/album3.jpg" class="card-img-top" alt="Album 3">
                        <div class="card-body">
                            <h5 class="card-title">Album 3</h5>
                            <p class="card-text">By Artist 3</p>
                            <a href="#" class="btn btn-primary">Listen Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Footer -->
    <?php
    include "footer.php";
    ?>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
