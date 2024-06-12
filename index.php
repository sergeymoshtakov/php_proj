<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyProj</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div>
                <nav class="menu">
                    <?php
                        include_once ('pages/menu.php');
                    ?>
                </nav>
            </div>
            </br>
            <div class="main-part">
                <section>
                    <?php
                        if(isset($_GET["page"]))
                        {
                            $page = $_GET["page"];
                            if($page==1) include_once('pages/home.php');
                        }
                    ?>
                </section>
            </div>
            <br>
            <div class="footer">
                <p>&copy; 2024 Car rental. All rights reserved.</p>
            </div>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>