<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<!-- Header Section Starts -->
<header class="header">
<div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">
       <img src="asset/logo.png" class="logo" alt="image-logo">
    </a>
<nav class="navbar">
    <a href="#home"class="active">Home</a>
    <a href="#about">About me</a>
    <a href="#portfolio">portfolio</a>
    <a href="#contact">Contact me</a>
</nav>
<div class="follow">
<a href="#" class="fab fa-facebook"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-instagram"></a>
<a href="#" class="fab fa-linkedin"></a> 
<a href="#" class="fab fa-github"></a> 
</div>
</header>

<!-- Header Section Ends -->
<!-- Home Section Starts -->
<section class="home" id="home">
    <div class="image">
        <img src="asset/photo-femme.jpg" alt="photo-femme" class="image-profil" >
    </div>
 <div class="content">
    <h1>Welcome, i am hayfa</h1>
    <p class="developper">Web Developper</p>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat in molestias fuga voluptatem qui reiciendis vero doloribus consequatur recusandae! Natus.</p>
    <a href="#about" class="btn">About me</a>
 </div>
</section>
<!-- Home Section Ends -->
<!-- about Section Starts -->
<section class="about"  id="about">
    <h2 class="myBio">Biography</h2>
    <div class="biography">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Fugiat quas quis eius cupiditate ducimus ut id maxime sunt nobis magni? </p>
        <h3> Name : CHAABI Hayfa </h3>
        <h3> Email: developper@gmail.com </h3>
        <h3> Adresse: Paris, France </h3>
        <h3> Phone: 060202222 </h3>
        <h3> Experience: 3 years </h3>
    </div>
<div class="skills">
<h2 class="myskills">My Skills</h2>
<div class="progress">
    <div class="bar"><h3><span>HTML</span><span>90%</span></h3></div>
    <div class="bar"><h3><span>CSS</span><span>90%</span></h3></div>
    <div class="bar"><h3><span>PHP</span><span>70%</span></h3></div>
    <div class="bar"><h3><span>MYSQL</span><span>75%</span></h3></div>
</div>
</div>

<div class="education_experienes">
     <h2 class="myskills">Education & Experience</h2>
    <div class="row">
        <div class="box_container">
            <h3 class="education">Education</h3>
            <div class="box">
                <span>(2011-2014)</span>
                <h4>Administraion des affaires</h4>
                <p>Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit.</p>
            </div>

            <div class="box">
                <span>(2022-2023)</span>
                <h4>Develeppement Web et Web mobile</h4>
                <p>Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit.</p>
            </div>
        </div>

        <div class="box_container">
            <h3 class="Experience">Experience</h3>
            <div class="box">
                <span>(2014-)</span>
                <h4>Administraion des affaires</h4>
                <p>Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit.</p>
            </div>

            <div class="box">
                <span>(2022-2023)</span>
                <h4>Develeppement Web et Web mobile</h4>
                <p>Lorem ipsum, dolor sit amet consectetur 
                    adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- about Section Ends -->











<script src="js/script.js"></script>
</body>
</html>