<?php
    require 'functions.php';
    $connection = dbconnect();
     
    $result = $connection->query("SELECT * FROM `projecten`")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amir's portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time() ?>">
    <script src="js/main.js" defer ></script>
    <script src="js/speech.js" defer ></script>
 
</head>
<body--index>
    
<header>

    <div class="user">
        <img src="img/pic.jpg" alt="Picture of myself">
        <h3 class="name">Amir Crljenkovic</h3>
        <p class="post">Software Developer</p>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#skills">skills</a></li>
            <li><a href="#portfolio">work</a></li>
            <li><a href="#contact">contact</a></li>
            <li><a href="#reviews">reviews</a></li>
            <li><a href="#text2speech">Text to speech</a></li>
        </ul>
    </nav>

</header>

<div id="menu" class="fas fa-bars"></div>

<section class="home" id="home">

    <h3>HI THERE !</h3>
    <h1>I'M <span>Amir Crljenkovic</span></h1>
    <p> I am 17 years old and live in the Netherlands.
        I am learning HTML CSS PHP and Java.
    </p>
    <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>

</section>

<section class="about" id="about">

<h1 class="heading"> <span>about</span> me </h1>

<div class="row">

    <div class="info">
        <h3> <span> name : </span> Amir Crljenkovic </h3>
        <h3> <span> age : </span> 17 </h3>
        <h3> <span> qualification : </span> MBO Niveau 4 </h3>
        <h3> <span> post : </span> Software Developer </h3>
        <h3> <span> language's : </span> English, Dutch, Bosnian </h3>
        <a href="cv/cv van Amir Crljenkovic.pdf"><button class="btn"> download CV <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>7+</span>
            <h3>Months of experience</h3>
        </div>

        <div class="box">
            <span>15+</span>
            <h3> HTML/CSS websites completed</h3>
        </div>

        <div class="box">
            <span>20+</span>
            <h3>Python projects finished</h3>
        </div>

        <div class="box">
            <span>7+</span>
            <h3>css art projects finished</h3>
        </div>

    </div>

</div>

</section>

<section class="skills" id="skills">

<h1 class="heading"> my <span>skills</span> </h1>

<figure class=" col-4">
    <img src="img/skills1.webp" alt="">
    <img src="img/skills2.webp" alt="">
    <img src="img/skills3.webp" alt="">
</figure>



</section>

<section class="portfolio" id="portfolio">

<h1 class="heading"> my <span>portfolio</span> </h1>



<div class="box-container">

    <section class="testimonial">
                <div class="small-container">
                    <div class="row--projects">
                    <?php foreach($result as $row): ?>
                        <div class="col-3">
                            <i class="quote"></i>
                            <p class="text--title1"><?php echo $row['intro'] ?></p>
                            
                            <figure  class="projects-img" style="background-image: url(./img/<?php echo $row['foto'];?>)"  > </figure>
                            <h3 class="h3--title"><?php echo $row['titel']?></h3>
                            <a target="_blank" href="details.php?id=<?php echo $row['id'];?>" class="btn--projects">Full Project</a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>

</section>

<section class="contact" id="contact">

<h1 class="heading"> <span>contact</span> me </h1>

<div class="row">

    <div class="content">

        <h3 class="title">contact info</h3>

        <div class="info">
            <h3> <i class="fas fa-envelope"></i> 32700@ma-web.nl </h3>
            <h3> <i class="fas fa-phone"></i> +31 621803724 </h3>
            <h3> <i class="fas fa-map-marker-alt"></i> Purmerend, Netherlands - 1443LV. </h3>
        </div>

    </div>

    <form action="contact.php" method="POST" novalidate >

        <input type="text" placeholder="name" class="box">
        <input type="email" placeholder="email" class="box">
        <input type="text" placeholder="project" class="box">
        <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>

    </form>

</div>

</section>

<section class="portfolio" id="portfolio">

<section class="reviews" id="reviews">

    <h1 class="heading"> <span>My</span> reviews </h1>
    
    <div class="row">
    
    <section class="inputs">
            <div>
                <input id="checkbox-good" checked type="checkbox" class="filter">
                <label for="good" class="label">Positive Reviews</label>
            </div>
            <div>
                <input id="checkbox-bad" checked type="checkbox" class="filter">
                <label for="bad" class="label">Negavtive Reviews</label>
            </div>

            
    </section>    
    
    <section class="counter">
        <div class=" box" data-category="good">                
            <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
            <p>Hele goede Service! Heb mijn product snel ontvangen en zonder enkele fout. 
                de communicatie ging redelijk soepel een aanrader dus!
                </p> 
        </div>

        <div class=" box" data-category="bad">                
            <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span>
            <p>Ik heb een tijdje moeten wachten door de lange wachtrij, maar het eindresultaat was goed.
                </p> 
        </div>

        <div class="box" data-category="good">                
            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
            <p>Top service En voor een lage prijs ook! heel tevreden met mijn website. alleen kon de communicatie wat beter!
                </p> 
        </div>

        <div class="box" data-category="bad">                
            <span>&#9733;&#9733;&#9733;&#9734;&#9734;</span>
            <p>mijn verwachtingen waren veel hoger dan dat het moest, toch heeft hij geleverd waar ik om vroeg.
                de communicatie kon wat soepeler.
                </p> 
        </div>

        <div class=" box" data-category="bad">                
            <span>&#9733;&#9733;&#9734;&#9734;&#9734;</span>
            <p>de communicatie kon wat beter, moest een langere tijd wachten op reacties.
                voor de rest was het geleverde werk wel na verwachtingen.
                </p> 
        </div>

        <div class=" box" data-category="good">                
            <span>&#9733;&#9733;&#9733;&#9733;&#9734;</span>
            <p>Geweldige kerel! communicatie was uitstekend en hield me constant op de hoogte.
                eindresultaat was geweldig een echte aanrader!
                </p> 
        </div>

    </section>

</section>

<section class="text2speech" id="text2speech">

<div class="texttospeech">  
    <h2 class="text--speech">Make it Rain Speech to Text</h2>
    <h4 class="text--h4" id="message">Press the button below, and start speaking</h4>
    <button class="text--button" onclick="startRecognition()">Speech to text</button>
    <div id="result" class="hide"></div>
    <div><img id="image1" class="hide"></div>
</div>


</section>

</body>
</html>