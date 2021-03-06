<?php

    session_start();
    if (isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
    }
    else
    {
        header("Location: signIn.php");
        die(); // we always include a die after redirects.
    }
    
    require("dbConnect.php");
    
    $db = get_db();

    if (!isset($db))
    {
        die("DB Connection was not set");
    }

    if (isset($_SESSION['email']))
    {
        
        $email = $_SESSION['email'];
        $password = $_SESSION['password'];
        $query = "SELECT title, description_text, price, tips, rating, id, category_id, user_id FROM posts WHERE user_id='$email'";
        $statement = $db->prepare($query);
        //Bind any variables I need to
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.js"></script>
        <link rel="stylesheet" href="css/uikit.min.css" type="text/css">
        <link rel="stylesheet" href="website.css" type="text/css">
        <title>
            Friday Nite
        </title>
    </head>
    <body>

    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-center">
            <a class="uk-navbar-item uk-logo" href="">Friday Nite</a>
        </div>
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a class="uk-active" href="#">Menu</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="website.php">Home</a></li>
                            <li class="uk-active"><a href="#">My Posts</a></li>
                            <li class="uk-active"><a href="signIn.php">Sign In</a></li>
                            <li class="uk-active"><a href="signOut.php">Sign Out</a></li>
                            <li class="uk-active"><a href="createPost.php">Create new post</a></li>
                        </ul>
                    </div>
                </li>    
                <li>
                <a class="uk-active" href="categoryDisplay.php">Categories</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="categoryDisplay.php?category=3" id="romantic">Romantic</a></li>
                            <li class="uk-active"><a href="categoryDisplay.php?category=1" id="outdoor">Outdoor</a></li>
                            <li class="uk-active"><a href="categoryDisplay.php?category=2" id="service">Service</a></li>
                            <li class="uk-active"><a href="categoryDisplay.php?category=4" id="groupDate">Group Date</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match" uk-grid>
        <?php 
            foreach ($posts as $post)
            {
                $title = $post["title"];
                $description = $post["description_text"];
                $price = $post["price"];
                $tips = $post["tips"];
                $rating = $post["rating"];
                $id = $post["id"];
                $user_id = $post["user_id"];
                
                if ($id){

                    echo "<div>
                            <div class='uk-card uk-card-default uk-card-body'>
                                <h3 class='uk-card-title'> $title </h3>
                                <p> $description </p>
                                <a class='uk-button uk-button-default uk-button-small' href='#modal-center-$id' uk-toggle>See More</a>
                            </div>
                        </div>
                        <div id='modal-center-$id' class='uk-flex-top' uk-modal>
                            <div class='uk-modal-dialog uk-modal-body uk-margin-auto-vertical'>
                                <button class='uk-modal-close-default' type='button' uk-close></button>
                                <h3> $title - $price </h3>
                                <p> $description </p>
                                <h6> Tips:
                                <ul>
                                    <li> $tips </li>
                                </ul>
                                <h4> $rating / 5 stars </h4>
                            </div>
                        </div>";
                }
            }
        ?>
        

    </div>

    </body>
</html>