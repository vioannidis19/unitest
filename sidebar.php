<?php

?>
<div class="sidebar">
    <div class="logo">
        <a href="#">
            <img src="img/logo.png" alt="">
        </a>
    </div>
    <div class="navlist-container">
        <ul class="navlist">
            <!-- TODO PHP to change CSS class for active page effect -->
            <li class="nav-item item-active">
                <a href="#">
                    <i class="fas fa-home"></i>
                    Αρχική Σελίδα
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="fas fa-pencil-alt"></i>
                    Διαγωνίσματα
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="fas fa-envelope"></i>
                    Επικοινωνία
                </a>
            </li>
        </ul>
    </div>
    <div class="user-info user-info-active">
        <!-- TODO PHP to show user info if logged in -->
        <!-- TODO JS to toggle CSS class if user on profile page -->
        <div class="user-icon"></div>
        <div class="user-name">
            <a href="profile.php">Ευθύμιος Κελέσμητος</a>
        </div>
    </div>
    <div class="login-logout">
        <!-- TODO PHP to toggle between login or logout link -->
        <a href="login.php">Σύνδεση</a>
        <a href="register.php">Εγγραφή</a>
        <i class="fas fa-sign-out-alt"></i>
    </div>
</div>