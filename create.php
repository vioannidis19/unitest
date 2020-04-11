<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="vendors/font-awesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Δημιουργία Διαγωνίσματος - UniTest</title>
</head>
<body>
    <div class="container">
        <?php
            require 'sidebar.php'
        ?>
        <div class="main-section">
            <div class="widget test-creation-widget">
                <!-- TODO JS to add questions -->
                <h2 class="test-creation-title">Δημιουργία Διαγωνίσματος</h2>
                <div class="test-creation-settings">
                    <div class="row">    
                        <label for="test-title">Τίτλος Διαγωνίσματος: </label>
                        <input type="text" name="test-title">
                    </div>
                    <div class="row">
                        <span>Aριθμός Απαντήσεων:</span>
                        <label for="answer-quantity">
                            <input type="radio" name="answer-quantity" value="2">
                            2
                        </label>
                        <label for="answer-quantity">
                            <input type="radio" name="answer-quantity" value="4">
                            4
                        </label>  
                    </div>
                    <div class="add-question-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>