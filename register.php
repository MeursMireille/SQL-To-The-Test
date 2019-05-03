<?php
require_once 'header.php';
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register</title>

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

  <?php
  session_start();
  if(isset($_SESSION['message'])):
  ?>

      <div class="alert alert-<?= $_SESSION['msg_type']?>">

      <?php
          echo $_SESSION['message'];
          unset ($_SESSION['message']);
      ?>

     </div>
     <?php endif ?>

      <div class="container mt-3 mb-3">
      <form action="auth.php" method="POST">
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" name='Username' id="formGroupExampleInput" placeholder="Username" required
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Firstname</label>
          <input
            type="text" class="form-control" name='Firstname' id="formGroupExampleInput" placeholder="Firstname"
            required
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Name</label>
          <input
            type="text" class="form-control" name='Name' id="formGroupExampleInput" placeholder="Name"
            required
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Email</label>
          <div class="input-group mb-2 mr-sm-2"></div>
          <div class="input-group-prepend">
          <input
            type="text" class="form-control" name='Email' id="formGroupExampleInput" placeholder="Email"
            required
          />
        </div>
          <div class="form-check pb-2 mb-2 mr-sm-2">
            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
            <label class="form-check-label" for="inlineFormCheck">
              Remember me
            </label>
          </div>

        <div class="form-group">
          <label for="formGroupExampleInput2">Password</label>
          <input
            type="Password" class="form-control" name='Password' id="formGroupExampleInput2" placeholder="Password"
            minlength="4" required
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Password confirm</label>
          <input
            type="password" class="form-control" name='Password-confirm' id="formGroupExampleInput2" placeholder="Password confirm" minlength="4" required
          />
        </div>

        <div class="box">
          <button type="submit" name="register" class="btn btn-outline-danger">Register</button>
          <script>
          document.getElementById("btn").value = "text";
            function myFunction() {
              document.getElementById("btn").formAction = "auth/.php";
              document.getElementById("*").innerHTML = "The value of the formaction attribute was changed to'Register.php'.";
              }
          </script>
        </div>
      </form>
    </div>
  </body>
</html>
