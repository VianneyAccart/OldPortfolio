<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= $title ?></title>
    <meta name="description" content="Vianney Accart, développeur web, mobile et WordPress à Lyon. Découvrez mon parcours, mes compétences, et mes réalisations."/>
    <link rel="shortcut icon" type="image/png" href="img/favicon-vianney-accart.png"/>
    <link rel="stylesheet" href="light-theme.css" id="theme-link">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2M81LTMR3T"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-2M81LTMR3T');
    </script>
    <script src="script.js" async></script>
</head>

<body>

    <header class="header">
        <a href="https://vianneyaccart.com" class="logo"><img src="img/portrait-vianney-rond-nobg.png"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a href="https://vianneyaccart.com/#competences">Compétences</a></li> 
          <li><a href="https://vianneyaccart.com/#realisations">Réalisations</a></li>
          <li><a href="https://vianneyaccart.com/#contact">Contact</a></li>
          <li><a class="btn-toggle"><i class="bi bi-moon" id="link-toggle"></i></a></li>
        </ul>
    </header>