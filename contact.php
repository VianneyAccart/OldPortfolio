<section class="contact" id="contact">
        <div class="section-title">
            <h2>Discutons ensemble</h2>
            <p>Vous avez un projet ? N'hésitez pas à me contacter.</p>
        </div>
        
        <form method="POST" action="contacted.php" class="form">
            <div class="form-container">
                <div class="name-mail">
                    <div class="name-container">
                        <label class="label" for="name">Nom<span class="requiredField">*</span></label>
                        <input type="text" title="Au moins 2 caractères" name="name" id="name" minlength="2" required>
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