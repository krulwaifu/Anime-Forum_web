<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Main-Page</title>
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
        include('DB.php');
        ?>
    </head>
    <body>
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
        <main>
            
            <div class="container">
                <div class="row" style="width: 100%;background-color: rgb(221, 221, 221);">
                    <div class="col-sm-auto">Темы дня</div>
                    <a class="col-sm-auto" align="left" href="#">Итоги десятилетия</a>
                    <a class="col-sm-auto" href="#">Итоги года</a>
                    <a class="col-sm-auto" href="#">Лучшее аниме лет...</a>
                    <a class="col-sm-auto" href="#">Япония расширит...</a>
                    <a class="col-sm-auto" href="#">Итоги года</a>
                    <a class="col-sm-auto" href="#">Лучшая м...</a>
                    <a class="col-sm-auto" href="#">Лучшая манга...</a>
                </div>
            <div class="row" style="width: 100%; background-color: rgb(221, 221, 221); margin-top: 20px;">
                <a id="seichas" href="anime-ongoing.php" class="col-md-12" style="margin-top: 5px;"><h3>СЕЙЧАС НА ЭКРАНАХ<i style="float: right; margin-top: 2px;" class="fas fa-caret-right"></i></h3></a>
            </div>
            <div class="row" style="width: 100%; margin-top: 10px;">
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://desu.shikimori.one/system/animes/preview/38883.jpg?1583579970">
                    Haikyuu!!:To the Top</a>
                </div>
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://kawai.shikimori.one/system/animes/preview/40046.jpg?1583050773">
                    Id:Invaded</a>
                </div>
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://desu.shikimori.one/system/animes/preview/38668.jpg?1583754657">
                    Dorohedoro</a>
                </div>
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://dere.shikimori.one/system/animes/preview/39534.jpg?1583468145">
                    Jibaku Shounen H...</a>
                </div>
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://moe.shikimori.one/system/animes/preview/39792.jpg?1583147746">
                    Eizouken ni wa Te...</a>
                </div>
                <div class="col-md-2">
                    <a href="anime-page(Haikyuu!!).html">
                    <img class="img-thumbnail" src="https://nyaa.shikimori.one/system/animes/preview/40010.jpg?1583563585">
                    Ishuzoku Reviewers</a>
                </div>
            </div>
            <div class="row" style="width: 101%; background-color: rgb(221, 221, 221); margin-top: 20px;">
                <a id="seichas" href="anime-ongoinf.html" class="col-md-12" style="margin-top: 5px; text-align: left;"><h3>Новости</i></h3></a>
            </div><br>
                <div class="News" id="n1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" style="height: 800px;" src="https://moe.shikimori.one/system/user_images/preview/104487/1002402.jpg" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="height: 800px;" src="https://camo-v2.shikimori.one/ab0cca43b0104c72a7b0341d7ab37558b7f934d3?url=http%3A%2F%2Fsun6-19.userapi.com%2Fc857532%2Fv857532769%2F1a67ac%2Fb1oUAg7K0kY.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" style="height: 800px;" src="https://moe.shikimori.one/system/user_images/preview/104487/1002402.jpg" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>          
                        <div class="row" style="width: 101%; background-color: rgb(221, 221, 221); margin-top: 20px;">
                        <a href="anime-ongoinf.html" class="col-md-12" style="margin-top: 5px; text-align: left;text-decoration: none;"><h3>Больше новостей</i></h3></a>
                    </div><br>
                      <div class="row" id="newsToggle">
                      <?php
                            $sql = "SELECT title, img, content, author FROM news ORDER BY news_id DESC";                            
                            $res = $db->db_query($sql);
                                while($row = $res->fetch_assoc()) {
                                    echo
                                    '<div class="col-md-4">
                                    <img class="img-thumbnail" src="'.$row['img'].'"> <h2>'.$row['title'].'</h2> <p>'.$row['content'].'</p> <p>'.$row['author'].'</p>
                                    </div>';
                                }
                                $dbconn->close();
                        ?>
                      </div><br>
                </div>
            </div>
            </div>
        </main>
    </body>
</html>