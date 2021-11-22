<?php 

$title = "Vianney Accart, Développeur web, mobile et WordPress à Lyon";
require 'header.php'; ?>

<section class="site-title">
    <div class="title-container">
        <h1>Vianney Accart</br> Développeur Web</br> et Mobile à Lyon</h1>
        <div class="title-cta">
            <a href="https://vianneyaccart.com/#presentation"><span>Qui suis-je ?</span></a>
        </div>
    </div>
    <div class="title-image"></div>
</section>

<section class="presentation" id="presentation">
    <p>Curiosité, autonomie, dynamisme et travail d'équipe : voilà ce qui me caractérise ! En tant que développeur web full-stack, je créé des solutions qui répondent à vos besoins. Je suis spécialisé sur le langage Java et sur le framework Angular. J'utilise d'autres langages tels que JavaScript, PHP ainsi que le CMS WordPress. J'ai également des connaissances en SEO. Je suis prêt à travailler d'autres langages/CMS selon la nature des projets qui me seront confiés.</p>
</section>

<section class="competences" id="competences">
    <div class="section-title">
        <h2>Mes compétences</h2>
        <p>Faisons un petit tour d'horizon de mes compétences au sens large du terme.</p>
    </div>
    <div class="competences-container">
        <div class="competences-column-container">
            <div class="competences-column">
                <i class="bi bi-people"></i>
                <h3>Soft Skills</h3>
                <p>Ils sont au coeur du métier. J'accorde beaucoup de temps à leur développement.</p>
                <h4>Ce qui me caractérise</h4>
                <ul>
                    <li>Orienté solution</li>
                    <li>Gestion du stress</li>
                    <li>Esprit d'équipe</li>
                    <li>Persévérance</li>
                    <li>Autonomie</li>
                    <li>Curiosité</li>
                </ul>
            </div>
            <div class="competences-column">
                <i class="bi bi-pencil"></i>
                <h3>Hard Skills</h3>
                <p>Je suis en veille permanente et m'intéresse aux évolutions des langages.</p>
                <h4>Langages, CMS & OS</h4>
                <ul>
                    <li>HTML, CSS, Javascript, Bootstrap</li>
                    <li>TypeScript, Angular</li>
                    <li>Java, JEE, Spring</li>
                    <li>API REST, Webkit, Sass</li>
                    <li>Wordpress, WooCommerce</li>
                    <li>Windows, Linux, MacOS</li>
                </ul>
            </div>
            <div class="competences-column">
                <i class="bi bi-tools"></i>
                <h3>Outils</h3>
                <p>Ils m'aident à être beaucoup plus efficace dans toutes les phases de mes projets. </p>
                <h4>Ma boîte à outils</h4>
                <ul>
                    <li>Visual Studio Code</li>
                    <li>Eclipse</li>
                    <li>Git & GitHub</li>
                    <li>JPA</li>
                    <li>MySQL</li>
                    <li>Balsamiq Wireframes</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="cv">
        <p>Vous souhaitez en apprendre plus sur mon parcours et mes compétences ?</p>
        <a href="/download/cv-vianney-accart.pdf" target="_blank"><span>Télécharger mon CV</span></a>
    </div>
</section>

<section class="realisations" id="realisations">

<div class="section-title">
    <h2>Dernières réalisations</h2>
    <p>Découvrez les derniers projets que j'ai réalisé.</p>
</div>

<div class="realisations-container">
    <?php 
    require 'projects/project_choptonjob.php';
    require 'projects/project_rockquest.php';
    require 'projects/project_prune.php';
    require 'projects/project_quentin.php';
    require 'projects/project_adeir.php';
    require 'projects/project_serwan.php';
    require 'projects/project_ebdmr.php';
    require 'projects/project_mariage.php';
    ?>
</div>
</section>

<?php 
require 'contact.php';
require 'footer.php'; 
?>