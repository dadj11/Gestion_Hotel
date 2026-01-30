<?php
require_once __DIR__ . '/../vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <style>
    /* Police globale */
    * {
        font-family: "Inter", "Segoe UI", Roboto, Arial, sans-serif;
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-size: 16px;
        color: #111827;
        background-color: #f9fafb;
    }

    /* Titres */
    h1 {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 1.5rem;
        font-weight: 600;
        color: #1f2937;
    }

    h3 {
        font-size: 1.2rem;
        font-weight: 600;
        color: #374151;
    }

    /* Texte normal */
    p, span, div {
        font-size: 0.95rem;
        font-weight: 500;
        color: #4b5563;
    }

    /* Chiffres / stats */
    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: #111827;
    }

    /* Texte secondaire */
    .text-muted {
        font-size: 0.85rem;
        color: #9ca3af;
    }
</style>

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
        <h1 style="margin: 0; font-size: 24px;"> <i class="fa-solid fa-hotel" style="font-size: 40px"></i>  Hotel</h1>
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