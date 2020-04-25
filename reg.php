<?php include('server.php') ?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Register page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href=""> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./cssLogin/login.css">
    <link rel="stylesheet" href="./cssLogin/custominput.css">

</head>

<body class="text-center">
    
       
        <form action="reg.php" method="post" class="form-signin">
             <h1>Register</h1>
           
        <div class="input-cls">
            <input type="text" name="username" id="un" autocomplete="off" required>
            <label for="name" class="label-cls">
                <span class="span-cls">UserName</span>
            </label>
        </div>
        
           
        <div class="input-cls">
            <input type="text" name="email" id="un" autocomplete="off" required>
            <label for="name" class="label-cls">
                <span class="span-cls">Email Address</span>
            </label>
        </div>
        
        <div class="input-cls">
            <input type="password" name="pass1" id="exampleInputPassword1" autocomplete="off" required>
            <label for="name" class="label-cls">
                <span class="span-cls">Password</span>
            </label>
        </div>
        
        <div class="input-cls">
            <input type="password" name="pass2" id="exampleInputPassword1" autocomplete="off" required>
            <label for="name" class="label-cls">
                <span class="span-cls">Retype Password</span>
            </label>
        </div>
          
            <?php include('errors.php') ?>
                <br>
            <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
            <div class="amargin">
                 <a href="login.php">Already an user</a>
            </div>
           
        </form>

  
</body>

</html>