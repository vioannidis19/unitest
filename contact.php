<?php
    require 'internal/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="vendors/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Επικοινωνία - Unitest</title>
</head>
<body>
    <div class="container">
         <?php 
            require 'sidebar.php'
         ?>
        <div class="main-section">
            <div class="widget-conatiner contact-container">
                <div class="widget contact-widget">
                    <div class="widget-title">
                        <h1>Επικοινωνία</h1>
                    </div>
                        <!--TODO fix method sending email-->
                        <form method="post">
                            <div class="fields">
                                <div class="input-field">
                                    <input type="text" name="emailA" id="emailA" placeholder="Email Φοιτητή"/>
                                </div>
                                <div class="input-field">                                    
                                    <input type="text" name="emailB" id="emailB" placeholder="Email Καθηγητή"/>
                                </div>
                                <div class="field">
                                    <label for="message">Μήνυμα</label><br>
                                    <textarea name="message" id="message" rows="7" cols="50"  ></textarea>
                                </div>
                                    <input type="submit" name="send" id="send" value="Στείλε μήνυμα" class="cta-button" >
                                    <input type="reset" name="reset" id="reset" value="Καθαρισμός" class="secondary-button">
                            </div>
                        </form>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>