<main class="">
    <?php
        if (isset($_GET["p"]) == 1)
        {
            require_once("./page/".$_GET['p'].".php");
        }
        else if (!isset($_GET["p"]) == 1)
        {
            require_once("./page/home.php");
        }
        else
        {
            require_once("./page/home.php");
        }
    ?>
</main>