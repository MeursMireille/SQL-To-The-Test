<?php 
session_start();
echo "<h1>".'Hello, '.$_SESSION['username']."</h1>"?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>

    <link rel="stylesheet" href="style.css">

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container mt-5">
      <form action="auth.php" method="post">
        <input type="submit" name='logout' value="log out">
        <a href='account.php'>Edit account</a> 
      </form>
    </div>

  </body>
</html>