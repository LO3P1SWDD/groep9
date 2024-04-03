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
    
</head>
<body>

<header>
    <div class="logo">
        <img src="img/jouwlogo.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <?php
            foreach ($menuItems as $item => $url) {
                echo "<li><a href='$url'>$item</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>

<main>
    <h1>Gallery:</h1>
    <div class="gallery">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<div class='photo'><img src='img/Gallery$i.jpg' alt='Gallery$i'></div>";
        }
        ?>
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