<?php require_once 'header.php'?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Update account</title>

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
  if(isset($_SESSION['email'])){
    $Username = $_SESSION['username'];

    $query = [
       'username' => $Username
    ];

    $sql = "SELECT * FROM users WHERE username = :username";

    $sqlExec = $handler->prepare($sql);
    $sqlExec->execute($query);

    $rowcount = $sqlExec->fetch(PDO::FETCH_ASSOC);

    $_SESSION['username'] = $rowcount['username'];
    $_SESSION['firstname'] = $rowcount['firstname'];
    $_SESSION['lastname'] = $rowcount['lastname'];
    $_SESSION['email'] = $rowcount['email'];
  }

  ?>

     

      <div class="container mt-3">
      <form action="auth.php" method="POST">
      <h2>Update here your details</h2>
        <div class="form-group">
          <label for="formGroupExampleInput">Username</label>
          <input type="text" class="form-control" name='Username' id="formGroupExampleInput" placeholder="Username" required
          />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Firstname</label>
          <input
            type="text" class="form-control" name='Firstname' id="formGroupExampleInput" placeholder="Firstname"
            required/>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Name</label>
          <input
            type="text" class="form-control" name= 'Name' id="formGroupExampleInput" placeholder="Name"
            required />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Email</label>
          <div class="input-group mb-2 mr-sm-2"></div>
          <div class="input-group-prepend">
          <input
            type="text" class="form-control" name='Email' id="formGroupExampleInput" placeholder="Email"
            required/>
        </div>

        <div class="box">
          <button type="submit" name="update" class="btn btn-outline-danger">Update</button>
          <br>

          <form action="auth.php" method="post">
            <input type="submit" class="btn btn-outline-danger" name='logout' value="log out">
          </form>

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



