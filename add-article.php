<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Article</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main-page.css">
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
            
           if($_POST['title'] != null){
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $sql = "INSERT INTO news(news_id,title,img, author, content)
                    VALUES('null',
                        '".$_POST['title']."',
                        '".$_POST['img']."',
                        '".$_POST['author']."',
                        '". $_POST['content']."')";
                }
            
                $results = $db->db_query($sql);

                if($results === false){
                    echo mysqli_error($dbconn);
                }else
                    {
                        $idd = mysqli_insert_id($dbconn);
                        echo "Added an article with ID: $idd"; 
                    } 
                $dbconn->close(); 
            }    
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
                <form action="add-article.php" method = "POST">
                    <div>
                        <input type="text" name="title" placeholder = "Name of article">
                    </div>
                    <div>
                        <input type="text" name="img" placeholder = "Insert url of image"></input>
                    </div>
                    <div>
                        <input type="hidden" name="author" value="<?php echo $f?>">
                    </div>
                    <div>
                        <textarea rows="10" cols="45" name="content"></textarea>  
                    </div>
                    <button type="submit">Add</button>
                </form>
            </div>
        </main>
    </body>