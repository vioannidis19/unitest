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
                    <?php
                        if(isset($_SESSION["test-creation"])) {
                            echo '<div class="question-creation-container">
                            <form method="post">';
                            for ($i=0; $i < $_SESSION["questions-quantity"]; $i++) { 
                                echo '<div>
                                <input type="text" class="question-field" placeholder="Ερώτηση ' . ($i+1) . '" name="question[]">';
                                for ($y=0; $y < $_SESSION["answer-quantity"]; $y++) {
                                    echo '<div class="answers-creation-container">';
                                    echo '<input type="text" placeholder="Απάντηση ' . ($y+1) . '" class="answer-item" name="answer[]">';
                                    echo '<label for="correct-answer">Σωστή Απάντηση: </label>
                                    <input type="checkbox" name="correct-answer[]" value="' . $y . '"></div>';
                                }
                                echo '</div>';
                            }
                            echo '<input type="submit" name="save-test" value="Αποθήκευση" class="cta-button"/>
                            </form></div>';
                        } else {
                            echo '
                                <form method="post">
                                    <div class="row">
                                        <label for="class-select">Μάθημα:
                                            <select name="class-select" class="class-select" id="class-select">';
                            getClasses(); 
                            echo            '</select>';
                            echo            '</label>
                                    </div>
                                    <div class="row">
                                        <label for="test-title">Τίτλος Διαγωνίσματος: </label>
                                        <input type="text" name="test-title" id="test-title">
                                    </div>
                                    <div class="row">
                                        <label for="questions-quantity">Αριθμός Ερωτήσεων:</label>
                                        <input type="number" name="questions-quantity" id="questions-quantity" value="10">
                                    </div>
                                    <div class="row">
                                        <span>Aριθμός Απαντήσεων:</span>
                                        <label for="answer-quantity">
                                        <input type="radio" name="answer-quantity" value="2" class="answer-quantity">
                                        2
                                        </label>
                                        <label for="answer-quantity">
                                        <input type="radio" name="answer-quantity" value="4" class="answer-quantity" checked>
                                        4
                                        </label>  
                                    </div>
                                    <div class="row">
                                        <input type="submit" value="Αποθήκευση" name="save-settings" class="cta-button" id="save-test-settings">
                                    </div>
                                </form>';
                        }    
                    ?>
                </div>
                <form method="post">
                    
                </form>
                <div style="display: none;" class="add-question-icon" id="add-question">
                        <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="js/create.js"></script>
</body>
</html>