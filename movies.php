<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies - MBO Cinema</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo">🎬 MBO Cinema</div>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="movies.php" class="active">Movies</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <main>
        <section class="search-bar">
            <input 
                type="text" 
                id="searchInput" 
                placeholder="Search for movies..." 
                onkeyup="searchMovies()"
            >
        </section>

        <section class="movies-page">
            <h1>Our Movie Collection</h1>
            <div class="movie-grid" id="movieGrid">
                <div class="movie-card">
                    <img src="img/kraven-the-hunter-poster.avif" alt="Movie 1">
                    <h3>Kraven: The Hunter</h3>
                </div>
                <div class="movie-card">
                    <img src="https://via.placeholder.com/300x450" alt="Movie 2">
                    <h3>Movie Title 2</h3>
                </div>
                <div class="movie-card">
                    <img src="https://via.placeholder.com/300x450" alt="Movie 3">
                    <h3>Movie Title 3</h3>
                </div>
                <div class="movie-card">
                    <img src="https://via.placeholder.com/300x450" alt="Movie 4">
                    <h3>Movie Title 4</h3>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 Cinema Paradise. All Rights Reserved.</p>
    </footer>

    <script>
        function searchMovies() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const movieGrid = document.getElementById("movieGrid");
            const movieCards = movieGrid.getElementsByClassName("movie-card");

            for (let i = 0; i < movieCards.length; i++) {
                const title = movieCards[i].getElementsByTagName("h3")[0];
                if (title.innerText.toLowerCase().includes(filter)) {
                    movieCards[i].style.display = "";
                } else {
                    movieCards[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
