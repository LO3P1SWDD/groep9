    <!DOCTYPE html>
    <html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel= "stylesheet" type= "text/css" href="css/style.css">
        <meta name="author" content="Arda">
        <title>Yummy</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <style>
         


        </style>
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
        


    
    <div class="slideshow-container">


    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/Eten1.avif" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/Eten2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/Eten3.jpg" style="width:100%">
    </div>

    

    
    <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 3000); //
    }
    </script>

    <div class="container-wrapper">
        <div class="container">
            <img src="img/Eten1.avif" alt="Tacos">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies urna vitae ipsum fermentum, ut ultrices risus fermentum.</p>
            <button class="btn">Order Now</button>
        </div>
        <div class="container">
            <img src="img/Eten2.jpg" alt="Burritos">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies urna vitae ipsum fermentum, ut ultrices risus fermentum.</p>
            <button class="btn">Order Now</button>
        </div>
        <div class="container">
            <img src="img/Eten3.jpg" alt="Beef tacos">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ultricies urna vitae ipsum fermentum, ut ultrices risus fermentum.</p>
            <button class="btn">Order Now</button>
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

    