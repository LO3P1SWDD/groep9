<!DOCTYPE html>
<html lang="nl">
<head>
<body class = "drankjes-body">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href="css/style.css">
    <meta name="author" content="Arda I">
    <title>Yummy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>

    </style>
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
 
     
<main class= "drankjes-main">
<div class="drinks">
    <div class="drink">
        <h2>Wijnen</h2>
        <p>Rode wijn</p>
        <p>Witte wijn</p>
        <p>Rosé</p>
        <p>Champagne</p>
        <p>Prosecco</p>
        <p>Merlot</p>
        <p>Chardonnay</p>
    </div>
    <div class="drink">
        <h2>Bieren</h2>
        <p>Pilsener</p>
        <p>Speciaalbier</p>
        <p>Witbier</p>
        <p>IPA</p>
        <p>Stout</p>
        <p>Porter</p>
        <p>Blond</p>
        <p>Amber</p>
    </div>
    <div class="drink">
        <h2>Frisdranken</h2>
        <p>Cola</p>
        <p>Sinas</p>
        <p>Spa rood</p>
        <p>Limonade</p>
        <p>IJsthee</p>
        <p>Fanta</p>
        <p>Tonic</p>
        <p>Gemberbier</p>
    </div>
    <div class="drink">
        <h2>Cocktails</h2>
        <p>Mojito</p>
        <p>Sex on the Beach</p>
        <p>Piña Colada</p>
        <p>Margarita</p>
        <p>Cosmopolitan</p>
        <p>Daiquiri</p>
        <p>Mai Tai</p>
        <p>Long Island Iced Tea</p>
    </div>
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