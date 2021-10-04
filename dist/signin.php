<!doctype html>
<html lang="en">

<?php
  session_start();

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // define variables and set to empty string values
  $emailErr = $passwordErr = "";
  $email = $userpassword =  "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
      $emailErr = "*Email is required";
    } else {
     $email = test_input($_POST["email"]);//call the test_input function on $_POST["txt_name"]
     /* if (!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,})$/",$email)) {
         $emailErr = "Email must be in the correct format";}*/
    }//end else
    if (empty($_POST["password"])) {
      $passwordErr = "*Password is required";
    } else {
      $userpassword= $_POST["password"];
     
    }//end else
    
    if($emailErr == "" && $passwordErr == "" ){
        try {
            require_once "includes/dbconnect.php";
            $sQuery = "SELECT * FROM user WHERE email = '$email' ";
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $Result = $conn->query($sQuery);
            $userResults = $Result->fetch(PDO::FETCH_ASSOC);

            /*$query = "SELECT * FROM user WHERE 'Email' = ? ";
            $stmt = $db->prepare($query);
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindValue('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row)) {
              /******************** Your code ***********************
              $_SESSION['sess_email']   = $row['email'];
              $_SESSION['sess_pass'] = $row['password'];
            } else {
              $msg = "Invalid username and password!";
            }*/
           // print_r($userResults['Email']);
            //exit;
            if($userResults['email']){
            //if($_SESSION['sess_email'] ){//the user exists	
            $hashed_password = $userResults['password'];
                if(password_verify($userpassword,$hashed_password))	{
                    echo 'password is valid';
                    $_SESSION['email'] = $email;
                    header("Location: index.php?referer=login");
                }else{
                    $Msg = "Wrong Password Entered! Please try again!";
                    echo $Msg;
                }
            }else{
                $Msg = "Username Not Matched! Please try again or make sure you are a registered user!";
                echo $Msg;
            }
        }catch (PDOException $e) {
            die("Could not connect to the database $dbname :" . $e->getMessage());
          }
    }
 }//end if
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign In</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <header>
    <style>
      #intro {
        background-image: url(assets/microsoft.jpg);
        height: 100vh;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }
    </style>

    </style>
</head>

<body>
    <?php
        include('includes/menu.php');
    ?>
    </br>  

    
    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="requires-validation bg-white  rounded-5 shadow-5-strong p-5" method="post" novalidate>

                <!-- Email input -->
                <h3>Sign In</h3>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example1">Email address: </label>
                  <input type="email" name="email"  placeholder="name@example.com"  id="form1Example1" class="form-control" required/>
                  <div class="valid-feedback">Email field is valid!</div>
                  <div class="invalid-feedback">Email field cannot be blank!</div>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form1Example2">Password :</label>  
                  <input type="password" name="password" placeholder="Password"  id="form1Example2" class="form-control" required/>
                  <div class="valid-feedback">Password field is valid!</div>
                  <div class="invalid-feedback">Password field cannot be blank!</div>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                      <label class="form-check-label" for="form1Example3"> Remember me</label>
                    </div>
                  </div>

                  <div class="col text-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                  </div>
                </div>

                <!-- Submit button -->
                <button type="submit" id="submit" class="btn btn-primary btn-block">Sign in</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

<script>
    (function () {
        'use strict'
        const forms = document.querySelectorAll('.requires-validation')
        Array.from(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
    })()
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
