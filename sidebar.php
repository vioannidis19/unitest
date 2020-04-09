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
    <div class="user-info">
        <!-- TODO PHP to show user info if logged in -->
        <div class="user-icon"></div>
        <div class="user-name">
            <a href="#">Ευθύμιος Κελέσμητος</a>
        </div>
    </div>
    <div class="login-logout">
        <a href="#">Σύνδεση/Εγγραφή</a>
        <!-- TODO PHP to toggle between login or logout link -->
        <i class="fas fa-sign-out-alt"></i>
    </div>
</div>