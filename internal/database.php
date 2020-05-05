<?php

    session_start();

    function dbconnect() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'unitest';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) die("Η σύνδεση απέτυχε: " . $conn->connect_error);
    return $conn;
    }

    function register() {
        $conn = dbconnect();

        $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $email);

        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];

        $stmt->execute();
        $stmt->close();

        header('Location: index.php');
    }

    function login() {
        $conn = dbconnect();

        $stmt = $conn->prepare("SELECT id, password FROM users WHERE username=?");
        $stmt->bind_param("s", $username);
        
        $username = $_POST['username'];
        
        $stmt->execute();
        $result = mysqli_fetch_assoc($stmt->get_result());
        if($result && password_verify($_POST['password'], $result['password'])) {
            $_SESSION['id'] = $result['id'];
            header('Location: index.php'); 
        } else {
            echo 'Λάθος email ή κωδικός πρόσβασης';
        }
    }

    function logout() {
        if(isset($_SESSION['id'])){
            session_unset();
            session_destroy();
            header('Location: index.php');
        } else {
            header('Location: index.php');
        }
    }

    function getUserInfo() {
        $conn = dbconnect();

        $stmt = $conn->prepare("SELECT * from users WHERE id=?");
        $stmt->bind_param("s", $id);

        $id = $_SESSION['id'];

        $stmt->execute();
        $result = mysqli_fetch_assoc($stmt->get_result());
        return $result;
    }

    function saveSettings() {
        $conn = dbconnect();

        $stmt = $conn->prepare("INSERT INTO tests (teacherId, classId, title, noQuestions, noAnswers) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $_SESSION['id'], $class, $title, $noQuestions, $noAnswers);

        $class = $_POST['class-select'];
        $title = $_POST['test-title'];
        $noQuestions = $_POST['questions-quantity'];
        $noAnswers = $_POST['answer-quantity'];

        $stmt->execute();
        $_SESSION['test-creation'] = $class;
        $_SESSION['questions-quantity'] = $noQuestions;
        $_SESSION['answer-quantity'] = $noAnswers;
        header('Location: create.php');
    }

    function saveTest() {
        $conn = dbconnect();
        $testIdstmt = $conn->prepare("SELECT MAX(id) from tests WHERE teacherId=?");
        $testIdstmt->bind_param("s", $_SESSION['id']);
        $testIdstmt->execute();
        $testId = mysqli_fetch_assoc($testIdstmt->get_result());
        $_SESSION['test-id'] = implode($testId);
        $questions = $_POST['question'];
        //$answers = $_POST['answer'];
        //$correct = $_POST['correct-answer'];
        foreach ($questions as $question) {
            echo var_dump($_SESSION['test-id']);
            print_r($question);
            $stmt = $conn->prepare("INSERT INTO questions (testId, questionText) VALUES (?, ?)");
            $stmt->bind_param("ss", $_SESSION['test-id'], $question);
            $stmt->execute();
            $questionIdstmt = $conn->prepare("SELECT MAX(id) from tests WHERE testId=?");
            $questionIdstmt->bind_param("s", $_SESSION['test-id']);
            $questionIdstmt->execute();
            $questionId = implode(mysqli_fetch_assoc($testIdstmt->get_result()));
            foreach ($answers as $key=>$answer) {
                echo var_dump($questionId);
            }

        }
        // $qStmt = $conn->prepare("INSERT INTO questions (")
    }

    function getClasses() {
        $conn = dbconnect();

        $stmt = $conn->prepare("SELECT id, classText FROM classes WHERE teacherId=?");
        $stmt->bind_param("s", $id);

        $id = $_SESSION['id'];

        $stmt->execute();
        $stmt->bind_result($classId, $classText);
        $classes = array();
        while ($stmt->fetch()) {
            echo '<option value="' . $classId . '">' . $classText . '</option>';
        }
        return $classes;
    }
?>

<?php

    if (isset($_POST['register'])) {
        register();
    }

    if (isset($_POST['login'])) {
        login();
    }

    if (isset($_POST['save-settings'])) {
        saveSettings();
    }

    if (isset($_POST['save-test'])) {
        saveTest();
    }
?>