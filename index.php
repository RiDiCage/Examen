<?php
    $theme = strtolower('#008000');
    $icon = '/img/icon.svg';
    $author = ucfirst('Richard van de Kooij');
    $company = ucfirst('Bedrijfsnaam');
    
    if ( isset($_GET['p']) ) { $page = ucfirst($_GET['p']); } else { $page = ucfirst('home'); }
    $style = '/css/style.css';
    $script = '/js/script.js';
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php
            require_once('./meta/required.php');
            require_once('./meta/theme.php');
            require_once('./meta/icon.php');
            require_once('./meta/author.php');
            require_once('./meta/description.php');
            require_once('./meta/bootstrap.php');
            require_once('./meta/fontawesome.php');
            require_once('./meta/google.php');
            require_once('./meta/custom.php');
        ?>
    </head>

    <body>
        <?php
            require_once('./layout/header.php');
            require_once('./layout/main.php');
            require_once('./layout/footer.php');
        ?>
    </body>

</html>