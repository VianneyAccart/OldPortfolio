<?php 

$title = "Vianney Accart, Développeur Web Back-End";
require 'header.php'; ?>

    <section class="site-title">
        <div class="title-container">
            <h1>Vianney Accart</br>Développeur Web</br>Back-End</h1>
            <div class="title-cta">
                <a href="http://localhost:8000/#presentation"><span>Qui suis-je ?</span></a>
            </div>
        </div>
        <div class="title-image"></div>
    </section>

<?php 
require 'presentation.php';
require 'skills.php';
require 'projects/projects.php';
require 'contact.php';
require 'footer.php'; 
?>