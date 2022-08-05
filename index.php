<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/basseDeLaPage.css">
</head>
<body>
<header id="Accueil">
    <div class="banner front" id="banner">
        <div class="bannerPart" style=" width: 2000px; height: 900px;">
            <img src="image/Wallpaper%20Esthétique.jpg" >
        </div>

        <div class="bannerText container">
            <h1>Luka FAUGIER</h1>
            <h3>Développeur Junior</h3>

        </div>
    </div>
</header>
<section id ="menuStyle">
    <nav >
        <?php
        include 'php/menu.php';
        menu();
        ?>
    </nav>
</section>

<section class="aboutme" id="aboutme">
    <div class="heading" >
        <br>
        <br>
        <h2>À PROPOS</h2>
        <div id ="canva">
            <div id="textPropo" style="display: inline-block">
                <?php
                include 'php/propos.php';
                propos();
                ?>
            </div>
            </div>
    </div>

</section>

<section class="diplome" id="diplome">
    <?php
    include "php/diplome.php";
    diplome();
    ?>

</section>

<section class="experience" id ="experience">
    <?php
    include "php/experience.php";
    experience();
    ?>
</section>

<section class="conctater" id="conctater">
    <?php
    include "php/conctater.php";
    conctater();
    ?>
</section>

<section class="endWeb" id ="endWeb">
    <div class="heading">
        <br>
        <ul>
            <div class="diplomeImage">
                <br>
                <div style="float: end; display: inline-block; position: center">
                   <a href="https://github.com/Faugier-luka"> <img title="GitHub"  id="diploImage" style="width: 100px; height: 100px" alt="img" src="image/LogoGitHub.png" ></a>
                    <a href="https://linkedin.com/in/luka-faugier-05879b236/"> <img title="linkedin" id="diploImage" style="width: 70px; height: 70px" alt="img" src="image/LogoLinkedin.png"></a>
                </div>
            </div>
            <br>
        </ul>
</section>
</body>
</html>

