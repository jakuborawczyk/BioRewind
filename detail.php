<?php

$bookData = [
    ["day" => "Monday", "date" => "2025-03-03 16:30", "price" => "90:-"],
    ["day" => "Tuesday", "date" => "2025-03-04 19:30", "price" => "100:-"],
    ["day" => "Friday", "date" => "2024-03-07 19:30", "price" => "120:-"],
    ["day" => "Saturday", "date" => "2024-03-08 20:30", "price" => "160:-"],
    ["day" => "Wednesday", "date" => "2024-03-12 16:30", "price" => "100:-"],
    ["day" => "Thursday", "date" => "2024-03-13 18:30", "price" => "100:-"],
    ["day" => "Friday", "date" => "2024-03-14 20:30", "price" => "120:-"],
    ["day" => "Sunday", "date" => "2024-03-16 20:30", "price" => "140:-"],
    ["day" => "Monday", "date" => "2024-03-17 16:30", "price" => "90:-"],
    ["day" => "Wednesday", "date" => "2024-03-19 09:30", "price" => "100:-"],
    ["day" => "Thursday", "date" => "2024-03-20 12:30", "price" => "100:-"],
    ["day" => "Friday", "date" => "2024-03-21 15:30", "price" => "120:-"],
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ewert&family=Mouse+Memoirs&family=Podkova:wght@400..800&display=swap" rel="stylesheet">
    <script src="detail.js" defer></script>
    <title>Detailed</title>
</head>

<body>
    <div class="videoContainer">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/KPOuJGkpblk?si=QIzquVZmvjOrqQq6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <section class="sevenBanner">
        <img class="sevenBannerIMG" src="assets/sevenBanner.png" alt="A man standing bexing white SE7EN text on red background with white tshirt">
    </section>

    <div class="movieImages">
        <img class="movieImage" src="assets/firstMovie.png" alt="two detectives and one prisoner in chaincuffs waling in a deser">
        <img class ="movieImage" src="assets/secondMovie.png" alt="two detectives looking att photos of a crime scene">
    </div>
    <main>
        <div class="movieContainer">
            <section class="movieInfo">
                <h1 class="movieTitle">SE7EN</h1>
                <p class="movieDescription">In a dark, rain-soaked city, two detectives veteran So merset (Morgan Freeman) and impulsive Mills (Brad Pitt)—hunt a serial killer who chooses victims based on the Seven Deadly Sins. As the case unfolds, they’re drawn into a chilling game that tests their morality and resolve.</p>
                <button class="bookNowBTN">Book Now</button>
            </section>
        </div>
        <article class="articleContainer">
            <img class="articleIMG" src="assets/articleIMG.png" alt="Two Detectives on black background and red Se7en text">
            <aside class="articleInfo">
                <h2>Se7en (1995) | 127 min</h2>
                <h2>Main Cast</h2>
                <ul>
                    <li class="mainCast">Morgan Freeman as Detective William Somerset</li>
                    <li class="mainCast">Brad Pitt as Detective David Mills</li>
                    <li class="mainCast">Gwyneth Paltrow as Tracy Mills</li>
                    <li class="mainCast">Kevin Spacey as John Doe</li>
                    <li class="mainCast">R. Lee Ermey as Police Captain</li>
                    <li class="mainCast">John C. McGinley as California</li>
                </ul>
            </aside>
        </article>
        <h1 class="bookTitle">BOOK TICKETS</h1>
        <div class="bookContainer">
        <div class="bookContainers">
            <?php foreach ($bookData as $item): ?>
                <div class="bookCard">
                    <p class="bookCardText"><?= htmlspecialchars($item['day']); ?></p>
                    <p class="bookCardInfo"><?= htmlspecialchars($item['date']); ?></p>
                    <p class="bookCardPrice"><?= htmlspecialchars($item['price']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        </div>
    </main>
</body>

</html>