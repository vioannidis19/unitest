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
            <div class="widget test-widget">
                <div class="question-container">
                    <ol class="questions-list">
                        <h2 class="test-class">Ασφάλεια Πληροφοριακών Συστημάτων</h2>
                        <h4 class="test-subtitle">Διαγώνισμα Εξάσκσης</h4>
                        <li class="question-item">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent a iaculis risus. Integer et hendrerit.
                            Lorem ipsum dolor sit amet.
                            <ol class="answers-list">
                                <div class="answers-listgroup">
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                </div>
                                <div class="answers-listgroup">
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                </div>
                            </ol>  
                        </li>
                        <li class="question-item">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Praesent a iaculis risus. Integer et hendrerit.
                            Lorem ipsum dolor sit amet.
                            <ol class="answers-list">
                                <div class="answers-listgroup">
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                </div>
                                <div class="answers-listgroup">
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                    <li class="answer-item">
                                        <label class="answer-container">
                                            <input type="radio" name="question1">
                                            Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet.
                                        </label>
                                    </li>
                                </div>
                            </ol>  
                        </li>
                    </ol>
                    <input type="button" class="submit-test-btn" value="Αποστολή" id="test-submit-btn">
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="js/test.js"></script>
</body>
</html>