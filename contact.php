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
            <div class="widget-conatiner">
                <div class="widget contact-widget">
                    <div class="widget-title">
                        <h1>Επικοινωνία</h1>
                    </div>
                        <!--TODO fix method sending email-->
                        <form method="post">
                            <div class="fields">
                                <!--Maybe subject and email of receiver-->
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Όνομα"/>
                                </div>
                                <div class="input-field">                                    
                                    <input type="text" name="email" id="email" placeholder="Email"/>
                                </div>
                                <div class="field">
                                    <label for="message">Μήνυμα</label><br>
                                    <textarea name="message" id="message" rows="7" cols="50"  ></textarea>
                                </div>
                                    <input type="submit" value="Στείλε μήνυμα" class="cta-button" >
                                    <input type="reset" value="Καθαρισμός" class="secondary-button">
                            </div>
                        </form>
                </div> 
            </div>
        </div>
    </div>
</body>
</html>