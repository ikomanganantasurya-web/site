<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Boutique Hospitality in Ubud, Bali</title>
    <meta name="description" content="LONDO HOUSE is a family-owned hospitality property located in Sayan, Ubud. Experience peaceful and authentic Balinese comfort.">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600&family=Inter:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>../styles/main.css">
</head>
<body>

<header class="main-header">
    <div class="container header-container">
        <a href="index.php" class="logo"><?php echo SITE_NAME; ?></a>
        <button class="menu-toggle" aria-label="Toggle Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?page=accommodation">Accommodation</a></li>
                <li><a href="index.php?page=facilities">Facilities</a></li>
                <li><a href="index.php?page=gallery">Gallery</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<main>
