<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Muhammed">
    <title>Arrangement</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    main {
        height:700px;
    }
</style>
<body>
<header>
    <img src="img/Logo3.png" alt="Logo">
    <nav>
        <?php
        $nav = array(
            "Home" => "index.php",
            "Our Menu" => "Our menu.php",
            "About Us" => "about us.php",
            "Gallery" => "gallery.php",
            "Other" => array(
            "Vacature" => "Vacatures.php",
            "Drinks" => "Drankjes.php",
            "Arrangement" => "arrangement.php",
            "Reviews" => "review.php"
            )
        );

        foreach ($nav as $title => $url) {
            if (is_array($url)) {
                echo "<div class='dropdown'>";
                echo "<button class='dropbtn'>$title</button>";
                echo "<div class='dropdown-content'>";
                foreach ($url as $submenu_title => $submenu_url) {
                    echo "<a href='$submenu_url'>$submenu_title</a>";
                }
                echo "</div>";
                echo "</div>";
            } else {
                echo "<a href='$url'>$title</a>";
            }
        }
        ?>
    </nav>
</header>
</head>
<body>
<main class="review-main">
    <h2>Laat een Review Achter</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="naam">Naam:</label>
        <input type="text" id="naam" name="naam" required><br><br>
        <label for="beoordeling">Beoordeling:</label>
        <select id="beoordeling" name="beoordeling" required>
            <option value="1">1 - Slecht</option>
            <option value="2">2 - Matig</option>
            <option value="3">3 - Redelijk</option>
            <option value="4">4 - Goed</option>
            <option value="5">5 - Uitstekend</option>
        </select><br><br>
        <label for="review">Review:</label><br>
        <textarea id="review" name="review" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Verzenden">
    </form>
    <h2>Recente Reviews</h2>
    <div class="reviews-container">
        <?php
        
        $reviews = array(
            array("naam" => "Arda Ilhan", "beoordeling" => 5, "review" => "Dodelijke eten clear van city burger."),
            array("naam" => "Emirtos", "beoordeling" => 4, "review" => "zo lekker gegeten heel erg schoon ook en hele goeie service van een medewerker genaamd Muhammed Yesilkaya."),
            array("naam" => "Ali Ince", "beoordeling" => 3, "review" => "het eten was heel lekker alleen was de service wat minder door een medewerker genaamd Arda Ilhan.")
        );

        
        foreach ($reviews as $index => $review) {
            $class = "review" . ($index + 1);
            echo "<div class='review $class'>";
            echo "<h3>{$review['naam']} - Beoordeling: {$review['beoordeling']}/5</h3>";
            echo "<p>{$review['review']}</p>";
            echo "</div>";
        }

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $new_review = array(
                "naam" => $_POST['naam'],
                "beoordeling" => $_POST['beoordeling'],
                "review" => $_POST['review']
            );
            array_unshift($reviews, $new_review);
        }
        ?>
    </div>
</main>
<footer>
    <div class="footer-info">
        <p>&copy; <?php echo date("Y"); ?> Your Restaurant. All rights reserved.</p>
        <p>123 Main Street, City, Country</p>
        <p>Phone: +123456789 | Email: info@yourrestaurant.com</p>
        <p>Follow us on social media:</p>
        <div class="social-icons">
            <a href="#" class="fa fa-phone"></a>
            <a href="#" class="fa fa-envelope"></a>
            <a href="#" class="fa fa-map-pin"></a>
        </div>
    </div>
</footer>
</body>
</html>