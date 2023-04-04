<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contact</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style/index.css'>
    <link rel="icon" href="image/logoweb.png">
    <script src='script/index.js'></script>
</head>
<body>
    <div class="header">
        <a class="menuButton" onclick="dropdownMenu()"><img src="image/logos/menuIcon.png" width="50px" height="50px"></a>
        <div class="dropdownMenu">
            <a href="index.html#">Acceuil</a>
            <a href="news.html">News</a>
            <a href="crew.html">Crew</a>
            <a href="about.html">À Propos</a>
            <a href="inscriptions.html">Inscriptions</a>
            <a href="Contact.html">Contact</a>
        </div>
    </div>
    <div class="body">
        <form action="php/process-form.php" method="POST">
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


    </div>
    <div class="footer">

    </div>
</body>
</html>