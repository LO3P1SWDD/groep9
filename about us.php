<?php
$menuItems = array(
    "Home" => "index.php",
    "Our Menu" => "menu.php",
    "About Us" => "about.php",
    "Gallery" => "gallery.php"
);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Muhammed">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>About Us</title>

</head>
<body>
<header>
            <img src ="img/Logo3.png" alt = Logo>
            <nav>
                <?php
                $nav = array(
                    "Home" => "index.php",
                    "Our Menu" => "Our menu.php",
                    "About Us" => "about us.php",
                    "Gallery" => "gallery.php",
                    

                    
                );
                foreach ($nav as $title => $url) {
                    echo "<a href='$url'>$title</a>";
                    
                
                }
                ?>
            </nav>
        </header>

<main>
    <div style="text-align: center; margin-top: 20px;">
        <h1>About Us</h1>
    </div>
    <div class="about-section">
        <div class="about-text">
            <p>Welkom bij ons restaurant! Wij zijn toegewijd aan het leveren van uitmuntendheid in zowel service als gerechten. Onze passie voor kwaliteit zorgt ervoor dat elke maaltijd een culinaire ervaring is.</p>
            <br>
            <p>Ons team van ervaren koks streeft naar perfectie in elk gerecht dat we serveren. We geloven in het gebruik van alleen de beste en meest verse ingrediënten om de smaakpapillen van onze gasten te verwennen.</p>
            <br>
            <p>Kom bij ons langs en ontdek de unieke smaken die ons restaurant te bieden heeft. We kijken ernaar uit u te verwelkomen!</p>
        </div>
        <div class="about-image">
            <img src="img/about us1.jpg" alt="About Us Image 1">
            <p style="text-align: center;"></p>
        </div>
    </div>
    <div class="about-section">
        <div class="about-image">
            <img src="img/about us2.jpg" alt="About Us Image 2">
            <p style="text-align: center;"></p>
        </div>
        <div class="about-text">
            <p>We zijn trots op onze inzet voor duurzaamheid en gemeenschapsbetrokkenheid. Door lokale leveranciers te ondersteunen en de impact op het milieu te minimaliseren, streven we naar een positieve verandering in onze samenleving.</p>
            <br>
            <p>Onze toewijding aan eerlijke en transparante praktijken maakt ons een vertrouwde keuze voor liefhebbers van lekker eten die belang hechten aan ethische en verantwoorde bedrijfsvoering.</p>
            <br>
            <p>Kom meer te weten over onze inspanningen voor duurzaamheid en sluit je aan bij ons in onze missie om een betere wereld te creëren, één maaltijd tegelijk.</p>
        </div>
    </div>
    <div class="bottom-section">
        <iframe width="660" height="315" src="https://www.youtube.com/embed/NI7hFmtK_x0?si=mbXJ-ytrhNYGdAmY" frameborder="0" allowfullscreen></iframe>
    </div>
</main>

<?php
$restaurant_info = array(
        "name" => "Yummy Restaurant",
        "year" => date("Y"),
        "address" => "123 Main Street, City, Country",
        "phone" => "+123456789",
        "email" => "info@yummyrestaurant.com",
        "social_media" => array(
        "phone" => "#",
        "envelope" => "#",
        "map_pin" => "#"
    )
);
?>
 
<footer>
    <div class="footer-info">
        <p>&copy; <?php echo $restaurant_info['year']; ?> <?php echo $restaurant_info['name']; ?>. All rights reserved.</p>
        <p><?php echo $restaurant_info['address']; ?></p>
        <p>Phone: <?php echo $restaurant_info['phone']; ?> | Email: <?php echo $restaurant_info['email']; ?></p>
        <p>Follow us on social media:</p>
        <div class="social-icons">
            <a href="<?php echo $restaurant_info['social_media']['phone']; ?>" class="fa fa-phone"></a>
            <a href="<?php echo $restaurant_info['social_media']['envelope']; ?>" class="fa fa-envelope"></a>
            <a href="<?php echo $restaurant_info['social_media']['map_pin']; ?>" class="fa fa-map-pin"></a>
        </div>
    </div>
</footer>

</body>
</html>