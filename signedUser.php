<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Userpage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Main-Page.css">
        <script src="Main-Page.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/473946a3fc.js" crossorigin="anonymous"></script>
    <?php 
        session_start();
        $f = $_SESSION['signedUser']['first_name'];
        $s = $_SESSION['signedUser']['second_name'];
        $e = $_SESSION['signedUser']['email'];
        $p = $_SESSION['signedUser']['password'];
        $b = $_SESSION['signedUser']['birthday'];
        $id = $_SESSION['signedUser']['id'];
        $url = $_SESSION['signedUser']['avatar'];
    ?>
    </head>
<body>
<div style="background-image: url('https://i.pinimg.com/originals/01/15/eb/0115eb738d65e7e0d0715f497a0828c9.png'); width: 100vw; height: 100vh; color: white;">
<nav class="navkek">
        <form action="Main-page.php" method="POST">
                  <button class="nav-link navbar-brand" type="submit">厨KEKISKIMIRO</button>
                  </form>
                    <div class="dropdown">
                        <div class="btn btn-secondary" data-toggle="dropdown" id="dropdown-hover">
                        <ul class="text-drop"><li><i class="fas fa-home"></i></li><li> Главная </li><li><i class="fas fa-caret-down"></i></li></ul>
                        </div>
                    <div class="dropdown-menu main">
                        <span class="dropdown-item">
                            <form action="anime-ongoing.php" method="POST">
                                <button type="submit"><span>アニメ | </span> Anime </span></button>
                            </form>
                        </span>
                    </div>
                    </div>
                    <div class="input-group flex-nowrap">
                            <div class="input-group-prepend">
                                <button class="btn btn-secondary" type="button" id="button-addon1"><i class="fas fa-search"></i></button>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                            </div>

                            <?php
                                if($id == 2){
                                echo   '<form action="add-anime.php" method="POST">
                                    <button type="submit"><i class="far fa-plus-square"></i></button>
                                </form>
                                <form action="update.php" method="POST">
                                    <button type="submit"><i class="far fa-edit"></i></button>
                                </form>';
                                };
                            ?>

                    <form action="add-article.php" method="POST">
                        <button type="submit"><i class="far fa-newspaper"></i></button>
                    </form>
                    <form action="signedUser.php" method="POST">
                        <button type="submit"><i class="far fa-user"></i></button>
                    </form>
                    <form action="SignOut.php" method="POST">
                        <button type="submit"><i class="fas fa-sign-out-alt"></i></button>
                    </form>
        </nav>
<div class="container">
<div class="col-md-6 signup">
                <h2>Welcome back, <?php echo $f ?></h2>
                <form id="signupform">
                    <div class="form-group">
                        <img src="<?php echo $url; ?>" style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="first_name"><?php echo $f; ?></label>
                        <label for="second_name"><?php echo $s; ?></label>
                    </div>
                    <div class="form-group">
                        <label for="regEmail">Email: <?php echo $e; ?></label>
                    </div>
                    <div class="form-group">
                        <label for="regPass">Password: <?php echo $p; ?></label>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Birthday: <?php echo $b; ?></label>
                    </div>
                </form>

</div>
<div class="col-md-1">
    <a href="SignOut.php" class="btn btn-primary">Sign Out</a>
</div>            
</div>
</div>
</body>