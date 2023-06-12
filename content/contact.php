<title>Contact</title>

<body class="body_color">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact_header">
                    <h1>Informatie Adres</h1>
                </div>
                <div class="contact_text">
                    <p> Noordeinde 21 <br>
                        4371 TE Koudekerke
                        <br>
                        <br>
                        Tel. 0624217219<br>
                        info@genietvanvekantie.nl
                        <br>
                        <br>
                        KVK. 123 456 789
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h1 class="contact_header">Contact Formulier</h1>
                </div>
                <div class="contactform">
                    <form method="post">
                        <input type="text" name="naam" placeholder="naam" class="contact" required>
                        <input type="email" name="email" placeholder="email" class="contact" required>
                        <input type="text" name="telefoon" placeholder="phone number" class="contact" required>
                        <textarea type="text" name="vraag" placeholder="vraag" class="contact" required></textarea>
                        <div>
                            <button class="button" name="submit">send</button>
                        </div>
                    </form>
                    <?php

                    if (isset($_POST['submit'])) {
                        $naam = htmlspecialchars($_POST['naam']);
                        $email = htmlspecialchars($_POST['email']);
                        $phonenumber = htmlspecialchars($_POST['telefoon']);
                        $vraag = htmlspecialchars($_POST['vraag']);
                        $ipaddress = getHostByName(getHostName());
                        echo '<h3 class="contact_header">you`ve sended: </h3><br>';
                        echo "<p>naam: $naam<br>";
                        echo "email: $email<br>";
                        echo "phonenumber: $phonenumber<br>";
                        echo "question: $vraag<br>";
                        
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <h1 class="contact_header">locatie</h1>
                </div>
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d439.2409870624723!2d3.558703527951753!3d51.481604937865875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c4976d4a3b328f%3A0x5b7b46036744eea4!2sNoordeinde%2021%2C%204371%20TE%20Koudekerke!5e0!3m2!1snl!2snl!4v1685363251602!5m2!1snl!2snl"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</body>