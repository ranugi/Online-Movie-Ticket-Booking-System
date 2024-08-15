<!--
 <?php
        session_start();
        ?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Flix Ticket Header</title>
    <link rel="stylesheet" href="./css/header.css">
    <script src="./js/home.js"></script>
</head>

<body>
    <section>
        <div class="log-main">
    </section>
    <header>
        <div class="head-container">
            <div class="head-sector">
                <div class="logoname">
                    <h1>FLIX TICKET</h1>
                </div>
                
            <div class="nav-btns">
                <ul>
                <a href="index.php">Home</a>
                <a href="#bookingtickets">Booking Tickets</a>
                <a href="#Viewbooking">View Booking</a>
                <a href="#about">About us</a>
                <a href="#offers">Offers</a>
                </ul>
            </div>
            <div class="user"></div>
            </div>
            <div class="sign-btn-container">
                <div class="profiler"> </i></div>
                <a href="./login.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Login<?php } ?></div>
                </a>
                <a href="./signup.php" <?php if (!isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Sign up<?php } ?></div>
                </a>
                <a href="./user.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Profile<?php } ?></div>
                </a>
                <a href="./logout.php" <?php if (isset($_SESSION['user_ID'])) { ?>>
                    <div class="logger">Log out<?php } ?></div>
                </a>
            </div>
        </div>
    </header>
</body>

</html>