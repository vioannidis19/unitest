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
    <title>Αρχική Σελίδα - UniTest</title>
</head>
<body>
    <div class="container">
        <?php
            require 'sidebar.php'
        ?>
        <div class="main-section">
            <div class="widget-container">
            <div class="widget test-info-widget">
                <div class="widget-title">
                    <h5>Ασφάλεια Πληροφοριακών Συστημάτων</h5>
                </div>
            </div>
            <div class="widget test-info-widget"></div>
            </div>
            <?php
                if(isset($_SESSION['id'])) {
                    echo '
                    <div class="widget latest-grades-widget">
                <div class="widget-title">
                    <h5>Ιστορικό Βαθμολογιών</h5>
                </div>
                <table class="grades-table" cellspacing="0">
                    <tr>
                        <td><a href="#
                        ">Ασφάλεια Πληροφοριακών Συστημάτων</a></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#
                        ">Ασφάλεια Πληροφοριακών Συστημάτων</a></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#
                        ">Ασφάλεια Πληροφοριακών Συστημάτων</a></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#
                        ">Ασφάλεια Πληροφοριακών Συστημάτων</a></td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td><a href="#
                        ">Ασφάλεια Πληροφοριακών Συστημάτων</a></td>
                        <td>9</td>
                    </tr>
                </table>
                <input type="button" value="Περισσότερα" class="cta-button">
            </div>
                    ';
                }
            ?>
        </div>
    </div>
</body>
</html> 
