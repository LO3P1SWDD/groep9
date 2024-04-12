<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Yummy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <style>
       
        .vacancy-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        .vacancy {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
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




<div class="vacancy-container">
        <!-- Vacature 1 -->
        <div class="vacancy">
            <h2>Vacature Titel 1</h2>
            <p>Beschrijving van vacature 1.</p>
            <p>Locatie: Stad</p>
            <p>Salaris: €XXXXX per jaar</p>
            <p>Werktijden: Fulltime/Parttime</p>
        </div>

        <!-- Vacature 2 -->
        <div class="vacancy">
            <h2>Vacature Titel 2</h2>
            <p>Beschrijving van vacature 2.</p>
            <p>Locatie: Stad</p>
            <p>Salaris: €XXXXX per jaar</p>
            <p>Werktijden: Fulltime/Parttime</p>
        </div>

        <!-- Voeg meer vacatures toe zoals bovenstaande voorbeeld -->
    </div>


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

    