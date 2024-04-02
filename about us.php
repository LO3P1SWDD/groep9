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
    <style>
        body {
            background-color: #B2B0B0;
            margin: 0;
            padding-top: 70px; /* Ruimte maken voor de header */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Minimale hoogte van de viewport */
            overflow: hidden; /* Voorkom scrollen in de pagina */
        }

        header {
            background-color: #D7D7D7;
            color: #000;
            padding: 20px;
            width: 100%;
            height: 70px; /* Hoogte van de header vergroten */
            display: flex;
            justify-content: space-between; /* Verplaats de elementen naar de uiteinden van de header */
            align-items: center; /* Centreer verticaal */
            position: fixed;
            top: 0;
            left: 0;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 20px; /* Padding voor inhoud */
            width: 100%;
            height: 25px; /* Hoogte van de footer */
            margin-top: auto; /* Plaats de footer onderaan */
            position: fixed;
            bottom: 0;
            left: 0;
        }

        .logo img {
            height: 50px;
            width: auto;
        }

        nav {
            margin-left: auto; /* Plaats de navigatie naar rechts */
            margin-right: 20px; /* Voeg een rechtermarge toe aan de navigatie */
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            height: 100%; /* Zorg ervoor dat de navigatie de volledige hoogte van de header heeft */
            align-items: center; /* Centreer verticaal */
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            color: #000;
            text-decoration: none;
        }

        .content {
            text-align: center;
            margin-top: 100px; /* Ruimte maken onder de header */
            padding: 0 20px; /* Voeg horizontale padding toe */
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <img src="jouwlogo.jpg" alt="Logo">
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

<div class="content">
    <h1>Over Ons</h1>
    <p>
        <?php echo "Welkom bij [Naam van het restaurant], waar passie voor lekker eten en gastvrijheid samenkomen. Ons verhaal begon [jaar van oprichting] toen [eigenaar(s)naam] zijn/haar/hun liefde voor koken en gastvrijheid omzette in een culinaire bestemming. Sindsdien hebben we ons gericht op het creëren van een unieke culinaire ervaring voor elke gast die onze deuren binnenstapt."; ?>
    </p>
    <p>
        <?php echo "Bij [Naam van het restaurant] draait alles om hoogwaardige ingrediënten, creatieve gerechten en een warme sfeer. Ons getalenteerde team van chefs combineert klassieke technieken met moderne smaken om gerechten te creëren die de zintuigen prikkelen en het hart verwarmen. We streven ernaar om onze gasten te verrassen en te inspireren met elke hap die ze nemen."; ?>
    </p>
</div>

<footer>
    Dit is de footer
</footer>

</body>
</html>