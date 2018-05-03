<!DOCTYPE HTML>  
<html>
<head>
<h1> Page d'inscription <h1>

<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-image:url(http://www.technopole-anticipa.com/IMG/arton950.jpg)">  

<?php
$nameErr = $firstErr = $emailErr= "";
$name = $first = $email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $firstErr = "Name is required";
  } else {
    $first = test_input($_POST["name"]);
  }
  
if (empty($_POST["website"])) {
  $website = "";
} else {
  $website = test_input($_POST["website"]);
  }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["first"])) {
      $firstErr = "Firstname is required";
    } else {
      $first = test_input($_POST["first"]);
    }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    }
  }
}
if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
  }
}
  
if (empty($_POST["website"])) {
  $website = "";
} else {
  $website = test_input($_POST["website"]);
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    $websiteErr = "Invalid URL"; 
  }    
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Inscription</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  
  Name: 
  <input type="text" name="name" value="">
  <span class="error">* <?php echo $nameErr;?></span>
<br><br>
  Firstname: 
  <input type="text" name="first" value="">
  <span class="error">* <?php echo $firstErr;?></span>

</body>
</html>