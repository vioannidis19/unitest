<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="vendors/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            require 'sidebar.php'
        ?>
        <div class="main-section">
            <div class="row">
                <div class="profile-settings">
                    <a href="#">
                        <i class="fas fa-cog"></i>
                        Επεξεργασία Προφίλ
                    </a>
                </div>
            </div>
            <div class="widget-container profile-container">
                <div class="widget user-info-widget">
                    <h2 class="user-info-title">Πληροφορίες</h2>
                    <div class="info-line">
                        <span class="info-subtitle">Όνομα:</span>Ευθύμιος
                    </div>
                    <div class="info-line">
                        <span class="info-subtitle">Επίθετο:</span>Κελέσμητος
                    </div>
                    <div class="info-line">
                        <span class="info-subtitle">Ιδιότητα:</span>Φοιτητής
                    </div>
                    <div class="info-line">
                        <span class="info-subtitle">Τμήμα:</span>Τμήμα Μηχανικών Πληροφορικής και Ηλεκτρονικών Συστημάτων
                    </div>
                </div>
                <div class="widget user-grades-widget">
                    <h2 class="user-grades-title">Βαθμολογίες</h2>
                    <img src="https://via.placeholder.com/120.png" alt="">
                </div>
            </div>
            <!-- TODO Brainstorm and add a third widget -->
            <div class="widget something-widget">
                    
            </div>
        </div>
    </div>
</body>
</html>