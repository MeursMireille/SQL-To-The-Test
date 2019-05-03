
<?php
require_once 'header.php';
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Form</title>

    <link rel="stylesheet" href=".css" />

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

    <style>
      body {
        font-family: sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input
            type="text"
            class="form-control"
            id="formGroupExampleInput"
            placeholder="Username"
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input
            type="password"
            class="form-control"
            id="formGroupExampleInput2"
            placeholder="Password"
          />
        </div>
        <div class="box">
          <button type="button" class="btn btn-outline-danger">Log in</button>
        </div>
      </form>
    </div>
  </body>
</html>
