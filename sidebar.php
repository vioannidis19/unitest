<div class="sidebar">
    <div class="logo">
        <a href="index.php">
            <img src="img/logo.png" alt="">
        </a>
    </div>
    <div class="navlist-container">
        <ul class="navlist">
            <!-- TODO PHP to change CSS class for active page effect -->
            <li class="nav-item item-active">
                <a href="index.php">
                    <i class="fas fa-home"></i>
                    Αρχική Σελίδα
                </a>
            </li>
            <li class="nav-item">
                <a href="tests.php">
                    <i class="fas fa-pencil-alt"></i>
                    Διαγωνίσματα
                </a>
            </li>
            <li class="nav-item">
                <a href="contact.php">
                    <i class="fas fa-envelope"></i>
                    Επικοινωνία
                </a>
            </li>
        </ul>
    </div>
    <?php
        if(isset($_SESSION['id'])) {
            echo '<div class="user-info">';
        } else {
            echo '<div style="display:none">';
        }
    ?>
        <!-- TODO PHP to show user profile picture if logged in -->
        <!-- TODO JS to toggle CSS class if user on profile page -->
        <div class="user-icon"></div>
        <div class="user-name">
            <a href="profile.php">
                <?php
                    if(isset($_SESSION['id'])){
                        $result = getUserInfo();
                        echo $result['name'] . ' ' . $result['surname'];
                    }
                ?>
            </a>
        </div>
    </div>
    <div class="login-logout">
        <?php
            if(isset($_SESSION['id'])) {
                echo '<a href="logout.php">' .
                    '<i class="fas fa-sign-out-alt"></i>' .  
                    'Αποσύνδεση</a>';
            } else {
                echo '<a href="login.php">Σύνδεση</a>' .
                    '<a href="register.php">Εγγραφή</a>';
            }
        ?>
    </div>
</div>