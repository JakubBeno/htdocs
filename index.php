<?php
$idStranky = "domu";

require_once "./data.php";

if (array_key_exists("id-stranky", $_GET)) {
    $idStranky = $_GET["id-stranky"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databáze knih</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.php" class="nadpis">Databáze knih</a>
            
            <?php
            require_once "./menu.php";
            ?>
            </div>
        </div>
    </header>
<?php
    require_once "./$idStranky.html";
?>
    <footer>
        <div class="pata">© Jakub Beňo </div>
    </footer>
    
</body>
</html>