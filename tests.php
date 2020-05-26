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
            <div class="widget-container">
                <div class="widget tests-widget">
                    <div class="test">
                        <a href="test.php">
                        <h4>Διαγώνισμα Εξάσκησης 1</h4>
                        </a>
                    </div>
                    <div class="test">
                        <a href="test.php">
                        <h4>Διαγώνισμα Εξάσκησης 2</h4>
                        </a>
                    </div>
                    <div class="test">
                        <a href="test.php">
                        <h4>Διαγώνισμα Εξάσκησης 3</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>