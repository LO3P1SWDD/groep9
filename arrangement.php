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
<main class="arrangement-page">
    <div class="arrangement-section">
        <div class="arrangement1" id="diner-arrangement">
            <h2>Luxe Dinerarrangement</h2>
            <p>Een avond vol culinaire verwennerij in ons restaurant. Geniet van een gastronomisch meergangendiner in een luxe setting.</p>
            <p>Prijs: €80 per persoon</p>
            <p>Duur: 3 uur</p>
            <p>Inclusief:</p>
            <ul>
                <li>Welkomstdrankje</li>
                <li>Voorgerecht, hoofdgerecht en dessert</li>
                <li>Bijpassende wijnen bij elk gerecht</li>
                <li>Koffie of thee na het diner</li>
            </ul>
        </div>
        <div class="arrangement2" id="culinair-arrangement">
            <h2>Culinair Proeverijarrangement</h2>
            <p>Ontdek een scala aan smaken met ons culinaire proeverijarrangement. Laat onze chef-kok je verrassen met een selectie van kleine gerechten en bijpassende wijnen.</p>
            <p>Prijs: €100 per persoon</p>
            <p>Duur: 4 uur</p>
            <p>Inclusief:</p>
            <ul>
                <li>Proeverij van kleine gerechten</li>
                <li>Proefglaasje bijpassende wijnen bij elke gang</li>
                <li>Uitleg van onze chef-kok over elk gerecht</li>
                <li>Koffie of thee na afloop</li>
            </ul>
        </div>
        <div class="arrangement3" id="wijnproeverij-arrangement">
            <h2>Wijnproeverijarrangement</h2>
            <p>Ontdek de wereld van wijn met ons wijnproeverijarrangement. Proef een selectie van fijne wijnen, begeleid door heerlijke hapjes.</p>
            <p>Prijs: €60 per persoon</p>
            <p>Duur: 2 uur</p>
            <p>Inclusief:</p>
            <ul>
                <li>Proeverij van 5 verschillende wijnen</li>
                <li>Bijpassende hapjes</li>
                <li>Deskundige uitleg over elke wijn</li>
            </ul>
        </div>
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