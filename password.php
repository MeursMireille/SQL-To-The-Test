<?php require_once 'header.php'?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Password</title>

    <link rel="stylesheet" type="text/css" href="style.css" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans"
      rel="stylesheet"
    />

  </head>
  <body>
      <?php session_start();?>

      <div class="containter">
      <?php if (isset($_SESSION['message'])): ?>

        <div class ="alert alert-<?=$_SESSION['msg_type']?>">
            <?php 
                echo $_SESSION['message'];
                unset($_SESSION['message'])
            ?>
        </div>
    <?php endif ?>

      <form method="post" action="auth.php">
        <div class="form-group">
          <label for="formGroupExampleInput">Password</label>
          <input type="password" class="form-control" name="Password" id="formGroupExampleInput" placeholder="Password" require/>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Change password</label>
          <input type="password" class="form-control" name= 'chance_password' id="formGroupExampleInput2" placeholder="change_password" require/>
        </div>
        <div class="btn-box">
           <button type="submit" name="change" class="btn btn-outline-danger">Change_password</button>
        </div>
      </form>
    </div>
  </body>
</html>