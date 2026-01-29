<?php
require_once __DIR__ . '/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
  <header style="
    border-radius: 15px;
    background-color: lightblue;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 20px;
    margin-block: 20px;
    flex-wrap: wrap;
">

    <!-- Logo / titre -->
    <div style="min-width: 200px;">
        <h1 style="margin: 0; font-size: 24px;">Hotel</h1>
        <p style="margin: 5px 0 0; font-size: 14px;">Bienvenue sur votre site web d'hôtel !</p>
    </div>

    <!-- Navigation -->
    <nav style="
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 10px;
    ">
        <a href="/" style="
            text-decoration: none;
            font-size: 14px;
            color: #000;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background-color 0.3s;
        "
        onmouseover="this.style.backgroundColor='rgba(255,255,255,0.6)'"
        onmouseout="this.style.backgroundColor='transparent'">
            Accueil
        </a>

        <a href="/chambres" style="
            text-decoration: none;
            font-size: 14px;
            color: #000;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background-color 0.3s;
        "
        onmouseover="this.style.backgroundColor='rgba(255,255,255,0.6)'"
        onmouseout="this.style.backgroundColor='transparent'">
            Chambres
        </a>

        <a href="/reservation" style="
            text-decoration: none;
            font-size: 14px;
            color: #000;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background-color 0.3s;
        "
        onmouseover="this.style.backgroundColor='rgba(255,255,255,0.6)'"
        onmouseout="this.style.backgroundColor='transparent'">
            Réservation
        </a>

        <a href="/historique" style="
            text-decoration: none;
            font-size: 14px;
            color: #000;
            padding: 6px 12px;
            border-radius: 8px;
            transition: background-color 0.3s;
        "
        onmouseover="this.style.backgroundColor='rgba(255,255,255,0.6)'"
        onmouseout="this.style.backgroundColor='transparent'">
            Historique
        </a>
    </nav>

</header>

    <div id="content">
       <?php require_once __DIR__ . '/../Route/route.php'; ?>

    </div>

    
</body>
</html>