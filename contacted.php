<?php 
$title = "Message envoyé ! Vianney Accart, Développeur Web Back-End";
require 'header.php';
?>

<section class="contacted" id="contact">
    <div class="section-title-contacted">
        <h2>Discutons ensemble</h2>
        <p>Vous avez un projet ? Des suggestions ? N'hésitez pas à me contacter.</p>
    </div>

    <?php 
    if(isset($_POST['message'])) {
        $headers = "MIME-Version: 1.0";
        $headers = "Content-type: text/html; charset=iso-8859-1";
        $headers = 'From: ' . $_POST['mail'] . "\r\n";

        $message = '<h1>Nouveau message !</h1>
        <p><b>Nom : </b>' . $_POST['name'] . '<br>
        <b>Email : </b>' . $_POST['mail'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('vianneyaccart@gmail.com', 'Nouveau message !', $message, $headers);
        
        if($retour) {
            echo '<p class="contact-form">Merci pour votre message, il a bien été envoyé. Je vous recontacte dans les plus brefs délais.</p>';
        } else {
            echo '<p class="contact-form-fail">Une erreur est survenue, veuillez réessayer...</p>';
        }
    }
    ?>
    
    <form method="POST" action="contacted.php" class="form">
        <div class="form-container">
            <div class="name-mail">
                <div class="name-container">
                    <label class="label" for="name">Nom<span class="requiredField">*</span></label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="email-container">
                    <label class="label" for="mail">Email<span class="requiredField">*</span></label>
                    <input type="email" name="mail" id="mail" required>
                </div>       
            </div>

            <div class="message-container">
                <label class="label" for="message">Message<span class="requiredField">*</span></label>
                <textarea name="message" id="message" required></textarea>
            </div>

            <input class="submit-button" type="submit" value="Envoyer"/>

        </div>
    </form>
</section >

<?php require 'footer.php'; ?>
