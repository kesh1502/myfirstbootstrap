<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register</title>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link  rel="stylesheet" href="css/register.css">
</head>

<body>
<?php
 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

$emailErr = $passwordErr = $nameErr = $genderErr = $addressErr = $pnoErr = "";
$email = $userpassword = $name  = $gender = $address = $pno = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }//end else
  if (empty($_POST["password"])) {
    $passwordErr = "*Password is required";
  } else {
    $userpassword = test_input($_POST["password"]);
  /* if (!preg_match("/^(?=.*[a-z])(?=.*\\d).{7,}$/i",$userpassword)) {
     $passwordErr = "*Password must be minimum 7 letters with minimum 1 letter/number ";}*/
  }//end else
  if (empty($_POST["name"])) {
    $nameErr = "*Name is required";
    } else {
    $name = test_input($_POST["name"]);
  }
  if (empty($_POST["gender"])) {
    $genderErr = "*Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = $_POST["address"];
  }//end else
  if (empty($_POST["phonenum"])) {
    $pnoErr = "*Phone Number is required";
  } else{ 
    $pno = test_input($_POST["phonenum"]);
   if(!preg_match('/^[0-9]{8}$/', $pno)){
       $pnoErr = "*Phonenumber must be 8 digits";}
   }


  if($emailErr == "" && $passwordErr == "" && $nameErr == "" && $genderErr == "" &&  $pnoErr == "")
  {
  	
    $hashed_password = password_hash($userpassword,PASSWORD_DEFAULT);
  	require_once "includes/dbconnect.php";
  	$sInsert = "INSERT INTO user ( email, password, Name, gender, address, phonenum )
                VALUES( '$email', '$hashed_password','$name', '$gender', '$address', '$pno') ";
   
  	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $Result = $conn->exec($sInsert);
   
    if($Result)
    {	
    	header("Location: index.php");
    
    }else{
       $Msg = "ERROR: Your credentials could not be saved!";
       echo $Msg;
    	
    }
  }
}
?> 
<?php
  include('includes/menu.php');
?>
<center>
    <div class="form-body">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                  <h3>Register Today</h3>
                  <p>Fill in the data below.</p>
                  <form class="requires-validation" method ="post" novalidate>
                      <div class="col-md-12">
                          <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                          <div class="valid-feedback">Email field is valid!</div>
                          <div class="invalid-feedback">Email field cannot be blank!</div>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                          <div class="valid-feedback">Password field is valid!</div>
                          <div class="invalid-feedback">Password field cannot be blank!</div>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                          <div class="valid-feedback">Username field is valid!</div>
                          <div class="invalid-feedback">Username field cannot be blank!</div>
                      </div>
                      <div class="col-md-12 mt-3">
                          <label class="mb-3 mr-1" for="gender">Gender: </label>
                          <input type="radio" class="btn-check" name="gender" id="M" value='M' autocomplete="off" required>
                          <label class="btn btn-sm btn-outline-secondary" for="M">Male</label>
                          <input type="radio" class="btn-check" name="gender" id="F" value='F' autocomplete="off" required>
                          <label class="btn btn-sm btn-outline-secondary" for="F">Female</label>
                          <input type="radio" class="btn-check" name="gender" id="O" value='O' autocomplete="off" required>
                          <label class="btn btn-sm btn-outline-secondary" for="O">Others</label>
                          <div class="valid-feedback mv-up">You selected a gender!</div>
                          <div class="invalid-feedback mv-up">Please select a gender!</div>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" type="text" name="address" placeholder="Address" required>
                          <div class="valid-feedback">Address field is valid!</div>
                          <div class="invalid-feedback">Address field cannot be blank!</div>
                      </div>
                      <div class="col-md-12">
                          <input class="form-control" type="text" name="phonenum" placeholder="Phone Number" required>
                          <div class="valid-feedback">Phone Number field is valid!</div>
                          <div class="invalid-feedback">Phone Number field cannot be blank!</div>
                      </div>
                      <div class="col-md-12">
                          <select class="form-select mt-3" required>
                              <option selected disabled value="">Position</option>
                              <option value="jweb">Junior Web Developer</option>
                              <option value="sweb">Senior Web Developer</option>
                              <option value="pmanager">Project Manager</option>
                          </select>
                          <div class="valid-feedback">You selected a position!</div>
                          <div class="invalid-feedback">Please select a position!</div>
                          <br/>
                          <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                          <label class="form-check-label">I confirm that all data are correct</label>
                          <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                      </div>
                      <br/>
                      <div class="form-button mt-3">
                          <button id="submit" type="submit" class="btn btn-primary">Register</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </center>
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