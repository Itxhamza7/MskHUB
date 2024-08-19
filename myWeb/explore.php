<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Albums & Playlists</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .search-section {
            padding: 20px 0;
            background-color: #007bff;
            color: white;
        }
        .search-section input {
            width: 100%;
            padding: 10px;
            font-size: 1.2rem;
            border-radius: 5px;
            border: none;
        }
        .explore-section {
            padding: 50px 0;
        }
        .explore-section h2 {
            text-align: center;
            margin-bottom: 40px;
            font-size: 2.5rem;
        }
        .album-card, .playlist-card, .song-card {
            transition: transform 0.3s;
            height: 400px;
            width: 100%;
        }
        .album-card:hover, .playlist-card:hover, .song-card:hover {
            transform: translateY(-10px);
        }
        .playlist-section, .song-section {
            padding: 50px 0;
        }
    </style>
    <script>
        function searchSongs() {
            // Get the input value
            let input = document.getElementById('songSearch').value.toLowerCase();
            let songCards = document.getElementsByClassName('song-card');

            // Loop through the song cards and hide those that don't match the search query
            for (let i = 0; i < songCards.length; i++) {
                let title = songCards[i].getElementsByClassName('card-title')[0].innerText.toLowerCase();
                if (title.includes(input)) {
                    songCards[i].style.display = "block";
                } else {
                    songCards[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>
    <!-- Search Section -->
    <div class="search-section text-center">
        <div class="container">
            <h2>Search for Songs</h2>
            <input type="text" id="songSearch" onkeyup="searchSongs()" placeholder="Enter song title or keyword">
        </div>
    </div>

    <!-- Explore Albums Section -->
    <div class="explore-section">
        <div class="container">
            <h2>Explore Albums</h2>
            <div class="row">
                <?php
                $albums = [
                    ['image' => 'data:image/jpeg;base64,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', 'title' => 'Last Ride', 'artist' => 'Sidhu Mose Wala'],
                    ['image' => 'images/album2.jpg', 'title' => 'Album 2', 'artist' => 'Artist 2'],
                    ['image' => 'images/album3.jpg', 'title' => 'Album 3', 'artist' => 'Artist 3'],
                    // Additional albums...
                    ['image' => 'images/album4.jpg', 'title' => 'Album 4', 'artist' => 'Artist 4'],
                    ['image' => 'images/album5.jpg', 'title' => 'Album 5', 'artist' => 'Artist 5'],
                    ['image' => 'images/album6.jpg', 'title' => 'Album 6', 'artist' => 'Artist 6'],
                    ['image' => 'images/album7.jpg', 'title' => 'Album 7', 'artist' => 'Artist 7'],
                    ['image' => 'images/album8.jpg', 'title' => 'Album 8', 'artist' => 'Artist 8'],
                    ['image' => 'images/album9.jpg', 'title' => 'Album 9', 'artist' => 'Artist 9'],
                    ['image' => 'images/album10.jpg', 'title' => 'Album 10', 'artist' => 'Artist 10'],
                    ['image' => 'images/album11.jpg', 'title' => 'Album 11', 'artist' => 'Artist 11'],
                    ['image' => 'images/album12.jpg', 'title' => 'Album 12', 'artist' => 'Artist 12'],
                    ['image' => 'images/album13.jpg', 'title' => 'Album 13', 'artist' => 'Artist 13'],
                    ['image' => 'images/album14.jpg', 'title' => 'Album 14', 'artist' => 'Artist 14'],
                    ['image' => 'images/album15.jpg', 'title' => 'Album 15', 'artist' => 'Artist 15'],
                ];
                    

                foreach ($albums as $album) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card album-card">
                            <img src="' . $album['image'] . '" class="card-img-top" alt="' . $album['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $album['title'] . '</h5>
                                <p class="card-text">By ' . $album['artist'] . '</p>
                                <a href="https://www.youtube.com/watch?v=6xoB4ZiKKn0" class="btn btn-primary">Listen Now</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Playlist Section -->
    <div class="playlist-section">
        <div class="container">
            <h2>Explore Playlists</h2>
            <div class="row">
                <?php
                $playlists = [
                    ['image' => 'images/playlist1.jpg', 'title' => 'Chill Vibes', 'description' => 'Relax and unwind with these chill tracks.'],
                    // Add other playlists here...
                ];

                foreach ($playlists as $playlist) {
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card playlist-card">
                            <img src="' . $playlist['image'] . '" class="card-img-top" alt="' . $playlist['title'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $playlist['title'] . '</h5>
                                <p class="card-text">' . $playlist['description'] . '</p>
                                <a href="#" class="btn btn-primary">View Playlist</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Song Section -->
    <div class="song-section">
        <div class="container">
            <h2>Explore Songs</h2>
            <div class="row">
                <?php
                $songs = [
                    ['title' => 'Song 1', 'artist' => 'Artist 1'],
                    ['title' => 'Song 2', 'artist' => 'Artist 2'],
                    ['title' => 'Song 3', 'artist' => 'Artist 3'],
                    ['title' => 'Song 4', 'artist' => 'Artist 4'],
                    ['title' => 'Song 5', 'artist' => 'Artist 5'],
                    // Add more songs here...
                ];

                foreach ($songs as $song) {
                    echo '
                    <div class="col-md-4 mb-4 song-card">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">' . $song['title'] . '</h5>
                                <p class="card-text">By ' . $song['artist'] . '</p>
                                <a href="#" class="btn btn-primary">Play Song</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
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
