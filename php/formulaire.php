<form action="process-form.php" method="POST">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="subject">Sujet:</label>
            <input type="text" id="subject" name="subject" required><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br>

            <input type="submit" value="Envoyer">
</form>