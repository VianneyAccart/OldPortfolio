<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $title ?></title>
    <meta name="description" content="Vianney Accart, développeur web back-end. Découvrez mon parcours, mes compétences, mes réalisations et contactez-moi !"/>
    <link rel="shortcut icon" type="image/png" href="img/favicon-vianney-accart.png"/>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

    <header class="header">
        <!-- URL du logo à modifier -->
        <a href="http://localhost:8000" class="logo"><img src="img/portrait-vianney-rond.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
        <!-- Attention aux liens à modifier car avec PHP sont valables partout -->
          <li><a href="http://localhost:8000/#competences">Compétences</a></li> 
          <li><a href="http://localhost:8000/#realisations">Réalisations</a></li>
          <li><a href="http://localhost:8000/#contact">Contact</a></li>
        </ul>
    </header>