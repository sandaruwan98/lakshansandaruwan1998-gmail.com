<?php

session_start();

if (!isset($_SESSION["username"])) {
    $_SESSION["msg"] = "You need to sign in";
    header("location: login.php");
}


if ($_GET["logout"]) {
    session_destroy();
    unset($_SESSION["username"]);
    header("location: login.php");
}



?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Home page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body> 

    <?php if (isset($_SESSION["success"])) : ?>
        <div class="alert alert-secondary" role="alert">
            <?php echo ($_SESSION["success"]);
            unset($_SESSION["success"]);
            ?>
        </div>
    <?php endif ?>
    
    <?php if (isset($_SESSION["username"])) :

    ?>
        <div class="jumbotron">
            <h1 class="display-4">Hello, <?php echo $_SESSION["username"] ?>!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="index.php?logout='1'" role="button">Logout</a>
        </div>
    <?php endif ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>

</html>