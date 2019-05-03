<?php require_once 'header.php'?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Settings</title>

    <link rel="stylesheet" href="style.css">

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
    <div class="container">
      <form method="post" action="home.php">
        <div class="box">
           <button type="submit" name="default" class="btn btn-outline-dark">Dark theme</button>

           <button type="submit" name="login" class="btn btn-outline-primary">Blue theme</button>

           <button type="submit" name="login" class="btn btn-outline-danger">Red theme</button>

           <button type="submit" name="login" class="btn btn-outline-light">Light</button>
        </div>
      </form>
    </div>
  </div>
  </body>
</html>
