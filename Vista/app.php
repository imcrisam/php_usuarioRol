<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>
    <?php
    if (
        isset($_SESSION["auth"]) &&
        $_SESSION["auth"] === "ok"
    ) {
        include "Componentes/header.php";
        if (isset($_GET["ruta"])) {
            if (
                $_GET["ruta"] == "logout" ||
                $_GET["ruta"] == "logup" ||
                $_GET["ruta"] == "deleteUser" ||
                $_GET["ruta"] == "updateUser" ||
                $_GET["ruta"] == "users"
            ) {
                include "Componentes/" . $_GET["ruta"] . ".php";
            }

        }
    }else{

        include "Componentes/login.php";
    }


    ?>
</body>

</html>