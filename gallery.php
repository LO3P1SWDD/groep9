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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: rgb(28, 28, 28);
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
        }

        .logo img {
            height: 80px; 
            width: auto;
            margin-right: 20px;
        }

        header > nav > ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        header > nav > ul > li {
            margin-left: 20px;
        }

        header > nav > ul > li:first-child {
            margin-left: 0;
        }

        header > nav > ul > li > a {
            color: #fff;
            text-decoration: none;
        }

        main {
            flex: 1;
            background-color: #f2f2f2;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        main h1 {
            margin-top: 0;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .photo {
            width: 30%;
            margin: 10px;
        }

        .photo img {
            width: 100%;
            height: auto;
        }

        footer {
            height: 300px;
            background-image: linear-gradient(white, rgb(130, 245, 35));
            text-align: center;
            color: #333;
            padding-top: 50px;
        }
 
        footer p {
            margin: 0;
        }
 
        .footer-info {
            text-align: center;
        }
 
        .footer-info p {
            margin: 5px 0;
            font-size: 16px;
        }
 
        .social-icons {
            margin-top: 10px;
        }
 
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
        }
 
        .social-icons img {
            width: 30px;
            height: 30px;
        }

        * {
            box-sizing: border-box;
        }
    </style>
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