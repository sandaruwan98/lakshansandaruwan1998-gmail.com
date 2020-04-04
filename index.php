<?php

session_start();

if (!isset($_SESSION["username"])) {
    $_SESSION["msg"] = "You need to sign in";
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
    <link rel="stylesheet" href="./cssLogin/style.css">
    <link rel="stylesheet" href="./cssLogin/menu.css">
</head>

<body>

    <header>
        <nav>
            <?php if (isset($_SESSION["username"])) :

            ?>
                <h3 id="logo">Welcome <?php echo $_SESSION["username"] ?> </h3>

            <?php endif ?>
            <!-- <img src="./img/hamburger.png" alt="ffgg" class="hamburger"> -->
            <div class="hamburger">
            <input type="checkbox" id="hi">
            <label class="menu" for="hi">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
        </div>
            </label>
        </nav>
        <section>
            <div class="hero">
                <img src="./img/carwall.jpg" alt="">
                <h1 class="headline">Dream big</h1>
            </div>
        </section>
    </header>

    <div class="slider"></div>
    <div class="p">
        <a class="btn btn-primary btn-lg" href="index.php?logout='1'" role="button">Logout</a>
       

        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia, laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere quo?</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia, laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere quo?</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem nisi sit quibusdam totam vero consectetur ipsum eligendi rerum veniam ut, eaque ratione. Earum alias necessitatibus nulla voluptatum, molestiae ex error.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur cumque sit animi magnam officia, laudantium magni voluptatibus, consectetur aperiam nostrum, sunt praesentium iste vel commodi nemo laborum quas voluptatum.
        </p>
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eveniet nulla quidem ad pariatur incidunt, porro odio repudiandae iste aspernatur! Quos quasi, quibusdam molestiae nisi est soluta id facere quo?</h1>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js" integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk=" crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>
<?php

if ($_GET["logout"]) {
    session_destroy();
    unset($_SESSION["username"]);
    header("location: login.php");
}
?>

</html>