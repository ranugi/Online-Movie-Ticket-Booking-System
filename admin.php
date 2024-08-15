<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!--MATERIAL ICONS-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!--STYLESHEET-->
    <link rel="stylesheet" href="./admin_styles.css">




</head>



<body>

    <?php include("header.php");
    ?>

    <div class="container">

        <form action="admin.php" method="POST">

            <aside>
                <div class="top">

                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">close</span>
                    </div>
                </div>
                <br> <br> <br> <br>
                <div class="sidebar">
                    <a href="#">
                        <span class="material-icons-sharp">grid_view</span>
                        <h3>Dashboard</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            theaters
                        </span>
                        <h3>Movie Theaters</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            movie
                        </span>
                        <h3>Movies</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            home
                        </span>
                        <h3>Home Page</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            people
                        </span>
                        <h3>Users</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            library_books
                        </span>
                        <h3>Bookings</h3>
                    </a>

                    <a href="#">
                        <span class="material-icons-sharp">
                            vpn_key
                        </span>
                        <h3>Update Password</h3>
                    </a>
                    <br> <br> <br><br><br><br><br><br><br><br>
                    <a href="#">
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <h3>Log Out</h3>
                    </a>

                </div>

            </aside>
            <!---END OF ASIDE--->
         <!---   <main>
                <h1>Dashboard</h1>
                <div class="date">
                    <input type="date">
                </div>
                <div class="insights">
                    <div class="users">
                        <span class="material-symbols-sharp">analytics</span>
                        <div class="middle">
                            <div class="left">
                                <h3>Total Users</h3>
                                <h1>8, 526</h1>
                            </div>
                            <div class="progress">
                                <svg>
                                    <circle cx='38' cy='38' r='36'></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            --->

    



        </form>







    </div>

    <br><br><br><br><br>

    <?php include("footer.php");
    ?>
</body>

</html>