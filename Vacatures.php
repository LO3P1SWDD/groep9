<!DOCTYPE html>
<html lang="nl">
<head>
<body>
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
 
        <main class="vacature-main">
        <div class="vacature-container">
            <div class="vacature">
                <h2>Chef de Partie</h2>
                <p>We zoeken een ervaren Chef de Partie om ons team te versterken. Je zult verantwoordelijk zijn voor het bereiden van gerechten, het coördineren van de keukenactiviteiten en het trainen van junior keukenpersoneel.</p>
                <p>Locatie: Amsterdam</p>
                <p>Salaris: €3000 per maand</p>
                <p>Werktijden: Fulltime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
         
            <div class="vacature">
                <h2>Serveerster</h2>
                <p>Wij zijn op zoek naar een vriendelijke en gemotiveerde serveerster om ons team te versterken. Je zult verantwoordelijk zijn voor het bedienen van gasten, het opnemen van bestellingen en het verzorgen van een uitstekende klantenservice.</p>
                <p>Locatie: Rotterdam</p>
                <p>Salaris: €10 per uur + fooi</p>
                <p>Werktijden: Parttime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
         
            <div class="vacature">
                <h2>Barista</h2>
                <p>We hebben een ervaren barista nodig om ons team te komen versterken. Je zult verantwoordelijk zijn voor het bereiden van koffiedranken, het beheren van de koffievoorraad en het bieden van uitstekende klantenservice aan onze gasten.</p>
                <p>Locatie: Utrecht</p>
                <p>Salaris: €11 per uur</p>
                <p>Werktijden: Parttime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
           
            <div class="vacature">
                <h2>Restaurant Manager</h2>
                <p>We zijn op zoek naar een ervaren restaurant manager om ons team te leiden. Je zult verantwoordelijk zijn voor het operationele beheer van het restaurant, het aansturen van het personeel en het waarborgen van een uitstekende service.</p>
                <p>Locatie: Den Haag</p>
                <p>Salaris: €4000 per maand</p>
                <p>Werktijden: Fulltime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
           
            <div class="vacature">
                <h2>Kok</h2>
                <p>We hebben een ervaren kok nodig om ons team te versterken. Je zult verantwoordelijk zijn voor het bereiden van diverse gerechten volgens recept en het handhaven van de hygiëne in de keuken.</p>
                <p>Locatie: Groningen</p>
                <p>Salaris: €12 per uur</p>
                <p>Werktijden: Fulltime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
            <div class="vacature">
                <h2>Bartender</h2>
                <p>We zoeken een ervaren bartender om ons team te versterken. Je zult verantwoordelijk zijn voor het mixen en serveren van drankjes, het onderhouden van de bar en het bieden van uitstekende klantenservice.</p>
                <p>Locatie: Eindhoven</p>
                <p>Salaris: €11 per uur + fooi</p>
                <p>Werktijden: Parttime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
            <div class="vacature">
                <h2>Receptionist</h2>
                <p>We zoeken een vriendelijke receptionist om ons team te versterken. Je zult verantwoordelijk zijn voor het verwelkomen van gasten, het aannemen van telefoongesprekken en het verstrekken van algemene informatie.</p>
                <p>Locatie: Maastricht</p>
                <p>Salaris: €10 per uur</p>
                <p>Werktijden: Parttime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
            <div class="vacature">
                <h2>Taco Chef</h2>
                <p>We zijn op zoek naar een gepassioneerde Taco Chef om ons team te versterken. Je zult verantwoordelijk zijn voor het bereiden van heerlijke en authentieke Mexicaanse taco's, het beheren van de taco-voorraad en het creëren van nieuwe smaakcombinaties.</p>
                <p>Locatie: Mexico-Stad, Mexico</p>
                <p>Salaris: MXN 15.000 per maand</p>
                <p>Werktijden: Fulltime</p>
                <button class="apply-button">Solliciteren</button>
           </div>
 
            <div class="vacature">
                <h2>Guacamole Specialist</h2>
                <p>Wij zijn op zoek naar een Guacamole Specialist met een passie voor het bereiden van verse en smaakvolle guacamole. Je zult verantwoordelijk zijn voor het maken van guacamole volgens traditionele recepten en het bieden van een unieke eetervaring aan onze gasten.</p>
                <p>Locatie: Cancún, Mexico</p>
                <p>Salaris: MXN 12.000 per maand</p>
                <p>Werktijden: Fulltime</p>
                <button class="apply-button">Solliciteren</button>
            </div>
 
            <div class="vacature">
               <h2>Margarita Bartender</h2>
               <p>We zoeken een ervaren Margarita Bartender om ons team te versterken. Je zult verantwoordelijk zijn voor het mixen en serveren van verfrissende Margarita-cocktails, het beheren van de bar en het bieden van een levendige sfeer in ons restaurant.</p>
               <p>Locatie: Tijuana, Mexico</p>
               <p>Salaris: MXN 11.000 per maand + fooi</p>
               <p>Werktijden: Parttime</p>
               <button class="apply-button">Solliciteren</button>
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