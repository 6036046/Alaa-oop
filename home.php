<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Paradise</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="logo">🎬 MBO Cinema</div>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="movies.php">Movies</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </nav>

    </header>
    <main>
        <section class="slideshow">
            <div class="slides">
                <img src="img/moana-2-first-look-banner.jpg" alt="Movie 1">
                <img src="img/76e2dc8a-ccf0-4565-8cda-a9c03f86a501.__CR0,0,970,300_PT0_SX970_V1___.jpg" alt="Movie 2">
                <img src="img/Venom-the-last-dance-tom-hardy-sony2.jpg" alt="Movie 3">
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </section>
        <section id="movies" class="movies-section">
            <h2>Now Showing</h2>
            <div class="movie-grid">
                <div class="movie-card">
                    <img src="https://media.pathe.nl/nocropthumb/620x955/gfx_content/posterhr/Smile-2_ps_2_jpg_sd-low_2024-Paramount-Pictures-All-Rights-Reserverd.jpg" alt="Movie 1">
                    <h3>Smile 2</h3>
                </div>
                <div class="movie-card">
                    <img src="https://m.media-amazon.com/images/M/MV5BZDMyYWU4NzItZDY0MC00ODE2LTkyYTMtMzNkNDdmYmFhZDg0XkEyXkFqcGc@._V1_.jpg" alt="Movie 2">
                    <h3>Venom: The Last Dance</h3>
                </div>
                <div class="movie-card">
                    <img src="https://m.media-amazon.com/images/M/MV5BZDUxNThhYTUtYjgxNy00MGQ4LTgzOTEtZjg1YTU5NTcwNThlXkEyXkFqcGc@._V1_.jpg" alt="Movie 3">
                    <h3>Moana 2</h3>
                </div>
            </div>
        </section>
        <section id="about" class="about-section">
            <h2>About Us</h2>
            <p>Welcome to MBO Cinema, your ultimate destination for movies. We bring you the best films from around the world.</p>
        </section>
        <section id="contact" class="contact-section">
            <h2>Contact Us</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message"></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 MBO Cin. All Rights Reserved.</p>
    </footer>
    <script src="style.js"></script>
</body>
</html>
