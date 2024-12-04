
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewind-Kino</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
</head>
<body>
<?php require __DIR__ . '/header.php'; ?>

    <!----------------------------------INDEX HERE------------------------------------------------>
    <!------hero/carousel----->
    <section aria-label="hero" class="hero">
        <div class="hero-slide" data-carousel="item1">
            <img class="slide slide1 active" src="images/Trainspotting_large.jpg" alt="slide 1">
            <img class="slide slide2" src="images/blade_runner.jpg" alt="slide 2">
            <img class="slide slide3" src="images/lost_boys.jpg" alt="slide 3">
            <div class="arrow left" data-direction="-1">&#10094;</div>
            <div class="arrow right" data-direction="1">&#10095;</div>
            <div class="indicators">
                <span class="spanCircle circle1 active" data-index="0"></span>
                <span class="spanCircle circle2" data-index="1"></span>
                <span class="spanCircle circle3" data-index="2"></span>
            </div>

        </div>
        <!---Aktuellt/Movies out now--->
</section>
<article class="aktuellt">
    <h2>MOVIES OUT NOW</h2>
</article>
<main>
    <div class="grid-container-aktuellt">
      <div class="grid-item">  <a href="detail.php"><img src="images/seven.jpg" alt="photo1"></div></a>
      <div class="grid-item"><img src="images/rocky 1976.jpeg" alt="photo2"></div>
      <div class="grid-item"><img src="images/the_omen.jpg" alt="photo3"></div>
      <div class="grid-item"><img src="images/fight_club.jpg" alt="photo4"></div>
      <div class="grid-item"><img src="images/fear_vegas.jpg" alt="photo5"></div>
      <div class="grid-item"><img src="images/young_frankenstein.jpg" alt="photo6"></div>
        </div>
  </main>
<a href=""></a>
  <h2></h2>
  <article>
    <!----Coming soon----->
    <h3>COMING SOON * COMING SOON *  COMING SOON * COMING SOON </h3>
</article>

<main>
    <div class="grid-container-comingsoon">
        <div class="grid-item">
            <img src="images/pulp_fiction.jpg" alt="photo1">
            <p class="text-right">Check out this exciting movie, <strong>Pulp Fiction</strong>! It's a thrilling psychological drama that will keep you on the edge of your seat. With a gripping story and unforgettable performances, this movie is a must-see for fans of suspense and crime thrillers. Don't miss it!</p>
        </div>
        <div class="grid-item">
            <p class="text-left">Get ready for <strong>Kill Bill</strong>, a thrilling action-packed movie. This classic story of vengeance and redemption follows a former assassin on a mission to get revenge. With iconic fight scenes and a compelling storyline, Kill Bill is a must-watch for action fans!</p>
            <img src="images/kill_bill.webp" alt="photo2">
        </div>
    </div>
</main>



<!---------- pop up here---------- -->
<div class="popup-container">
    <div class="popup desktop">
      <div class="gray-box-popup"> <img src="images/godfather.jpg">
      </div>
      <div class="content-popup">
        <span class="close-btn">&times;</span>
        <img src="images/logo 1 5.png" alt="Logo" class="logo">
        <h2>FÅ 15% RABATT</h2>
        <p>på din första beställning genom att registrera dig på vårt nyhetsbrev nedan.</p>
        <form id="popup-form">
          <input type="text" placeholder="DITT NAMN" id="name">
          <input type="email" placeholder="DIN MEJLADRESS" id="email">
          <button>REGISTRERA DIG</button>
        </form>
        <p class="nej-tack">Nej Tack</p>
        <p class="terms">
          *Genom att registrera dig hos oss så accepterar du Rewind-Kino <a href="#">användarvillkor</a> och <a
            href="#">policy's</a>.

        </p>

      </div>
    </div>
  </div>


  <!----------------------------------- FOOTER----------------------------------------->
  <?php 
require __DIR__ .'/footer.php';
?>

    
</body>

</html>



