
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php require_once 'header.php'; ?>

<?php
session_start();

//namen moeten zelfde zijn als in register.php
  if(isset($_POST['register'])) {
    $Username = $_POST['Username'];
    $Firstname = $_POST['Firstname'];
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Password_confirm = $_POST['Password-confirm'];

    if ($Password === $Password_confirm){

// namen moeten zelfde zijn als in de database
          $query = [
            'username' => $Username,
            'firstname' => $Firstname,
            'lastname' => $Name,
            'email' => $Email,
            'password' => $Password
          ];

           $sql = "INSERT INTO users(firstname,lastname,username,email,password)VALUES(:firstname,:lastname,:username,:email,:password)";

           $sqlExec = $handler->prepare($sql);
           $sqlExec->execute($query);

          header('location: index.php');
    }
    else 
    {
      $_SESSION["message"] = 'Password is not correct!'.$Password.$Password_confirm;
      $_SESSION["msg_type"] = 'Warning';

      header('location: register.php');
    }
  }

  if(isset($_POST['login'])){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $query = [
      'username' => $Username,
      'password' => $Password
    ];

    $sql = "SELECT * FROM users WHERE Username = :username AND Password = :password";

    $sqlExec = $handler->prepare($sql);
    $sqlExec->execute($query);

    $rowcount = $sqlExec->fetch(PDO::FETCH_ASSOC);

    if($rowcount > 0){
        $_SESSION['username'] = $rowcount['username'];  //rowcount moet hetzelfde zijn als in de database

        header('location:home.php');
    }
    else {
        $_SESSION['message'] = "Incorrect username or password!";
        $_SESSION['msg_type'] = "warning";

        header('location:Log_in.php');
    }
  }
 
     if(isset($_POST['logout'])){         
       session_destroy();         
       header('location: Log_in.php');
  }

?>