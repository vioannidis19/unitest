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
        $_SESSION["class-select"] = $_POST["class-select"];
        $_SESSION["test-title"] = $_POST["test-title"];
        $_SESSION["questions-quantity"] = $_POST["questions-quantity"];
        $_SESSION["answer-quantity"] = $_POST["answer-quantity"];

        header('Location: create.php');
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
?>