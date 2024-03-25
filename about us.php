<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        header {
            background-color: #D7D7D7;
            color: #000;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 999; /* Zorgt ervoor dat de header bovenaan blijft */
        }

        body {
            background-color: #B2B0B0;
            margin: 0;
            padding-top: 80px; /* Voeg padding-top toe om ruimte te maken voor de header */
            text-align: center; /* Om de tekst van "About Us:" te centreren */
        }

        footer {
            background-color: #000; 
            color: #fff; 
            text-align: center;
            padding: 50px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .logo img {
            height: 50px;
            width: auto; 
        }

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
            color: #000;
            text-decoration: none;
        }

        .about-us {
            padding: 20px;
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

<div class="about-us">
    <h1>About Us:</h1>
</div>

<footer>
    Dit is de footer
</footer>

</body>
</html>