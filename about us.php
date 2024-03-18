<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel van de pagina</title>
    <style>
        /* Stijl voor de header */
        header {
            background-color: #D7D7D7; /* Header kleur */
            color: #fff;
            padding: 50px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Stijl voor de body */
        body {
            background-color: #B2B0B0; /* Body kleur */
            margin: 0;
            padding: 0;
        }

        /* Stijl voor de footer */
        footer {
            background-color: #000; /* Footer kleur */
            color: #fff;
            text-align: center;
            padding: 50px 50px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Stijl voor de logo afbeelding */
        .logo img {
            height: 50px; /* Pas aan naar wens */
            width: auto; /* Houdt de verhoudingen van de afbeelding */
        }

        /* Stijl voor de navigatiekopjes */
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li:first-child {
            margin-left: 0;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
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
            <li><a href="#">Home</a></li>
            <li><a href="#">Our Menu</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
    </nav>
</header>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Jouw bedrijfsnaam. Alle rechten voorbehouden.</p>
</footer>

</body>
</html>
