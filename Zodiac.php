<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Chinese Zodiac</title>
<meta http-equiv="content-type"content="text/html; charset=iso-8859-1" />
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php

$nameErr = $emailErr = $q1Err = $q2Err = $q3Err = $q4Err = $q5Err = $q6Err = $q7Err = $q8Err = $q9Err = $q10Err = "";
$name = $email = $q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = $q8 = $q9 = $q10 = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = " Name is required";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed. Please remove special characters"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = " Email is required";
  } else {
    $email = test_input($_POST["email"]);

  }
  
  if (empty($_POST["question1"])) {
    $q1Err = " You did not answer Question 1";
  } else {
    $q1 = test_input($_POST["question1"]);
  }
  
  if (empty($_POST["question2"])) {
    $q2Err = " You did not answer Question 2";
  } else {
    $q2 = test_input($_POST["question2"]);
  }
  
  if (empty($_POST["q3"])) {
    $q3Err = " You did not answer Question 3";
  } else {
    $q3 = test_input($_POST["q3"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$q3)) {
      $q3Err = "Only letters and white space allowed. Please remove special characters"; 
    }
  }
	if(empty($_POST["q4"])) {
    $q4Err = " You did not answer Question 4";
  } else {
    $q4 = test_input($_POST["q4"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$q4)) {
      $q4Err = "Only letters and white space allowed. Please remove special characters"; 
    }
  }
  
  if(isset($_POST['submit'])){
	  if($_POST['question5'] == 'NULL'){
		$q5Err = " You did not answer Question 5";
	} else{
		$q5 = $_POST['question5'];
  }
  }

  if (empty($_POST["question6"])) {
    $q6Err = " You did not answer Question 6";
  } else {
    $q6 = test_input($_POST["question6"]);
  }
  
  if(isset($_POST['submit'])){
	  if($_POST['question7'] == 'NULL'){
		$q7Err = " You did not answer Question 7";
	} else{
		$q7 = $_POST['question7'];
  }
  }
  
  if (empty($_POST['q8'])) {
    $q8Err = " You did not answer Question 8";
  } else {
    $q8 = test_input($_POST['q8']);
    if (!preg_match("/^[a-zA-Z ]*$/",$q8)) {
      $q8Err = "Only letters and white space allowed. Please remove special characters"; 
    }
  }
  
  if (empty($_POST['q9'])) {
    $q9Err = " You did not answer Question 9";
  } else {
    $q9 = test_input($_POST['q9']);
    if (!preg_match("/^[a-zA-Z ]*$/",$q9)) {
      $q9Err = "Only letters and white space allowed. Please remove special characters"; 
    }
  }
  if(isset($_POST['submit'])){
	  if($_POST['question10'] == 'NULL'){
		$q10Err = " You did not answer Question 10";
	} else{
		$q10 = $_POST['question10'];
  }
  }
  
}



?>

<h2>What do you know about the Chinese zodiac signs?</h2>
<form id="myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Your Name: <input type="text" name="name" value="<?php echo $name;?>">
  <font color='red'>&#10008;</font><span class="error"><?php echo $nameErr;?></span>
  <br><br>
  Your Email: <input type="text" name="email" value="<?php echo $email;?>">
  <font color='red'>&#10008;</font><span class="error"><?php echo $emailErr;?></span>
  <br>
  <i><small>Your name and email address are required.</small></i>
  <br><br>
  <br><br>
   You must answer all 10 questions before the quiz will be graded.
  <br><br>
  1) The Chinese Zodiac associates a sign with each month.
  <br><br>
  <input type="radio" name="question1" <?php if (isset($q1) && $q1=="True") echo "checked";?> value="True">True
  <input type="radio" name="question1" <?php if (isset($q1) && $q1=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q1Err;?></span>
  <br><br>
  2) The Chinese Zodiac signs each have an equivalent constellation, like those of the occidental zodiac.
  <br><br>
  <input type="radio" name="question2" <?php if (isset($q2) && $q2=="True") echo "checked";?> value="True">True
  <input type="radio" name="question2" <?php if (isset($q2) && $q2=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q2Err;?></span>
  <br><br>
  3) Which is the only bird that is a sign in the Chinese Zodiac?
  <br><br>
		Enter your response here:<input type="text" name="q3" value="<?php echo $q3;?>">
  <span class="error"><?php echo $q3Err;?></span>
  <br><br>
  4) How many signs are in the Chinese Zodiac?
  <br><br>
		Enter your response here:<input type="text" name="q4" value="<?php echo $q4;?>">
  <span class="error"><?php echo $q4Err;?></span>
  <br><br>
  5) The Chinese zodiac traditionally begins with which sign?
  <br><br>
  <select name="question5">
  <option value="NULL">-- Select the correct answer --</option>
  <option value="1">-- Test 1 --</option>
  <option value="2">-- Test 2 --</option>
  </select>
  <span class="error"><?php echo $q5Err;?></span>
  <br><br>
  6) Chinese zodiac signs respresent different types of personalities.
  <br><br>
  <input type="radio" name="question6" <?php if (isset($q6) && $q6=="True") echo "checked";?> value="True">True
  <input type="radio" name="question6" <?php if (isset($q6) && $q6=="False") echo "checked";?> value="False">False
  <span class="error"><?php echo $q6Err;?></span>
  <br><br>
  7) Which sign is not part of the Chinese Zodiac?
  <br><br>
  <select name="question7">
  <option value="NULL">-- Select the correct answer --</option>
  <option value="1">-- Test 1 --</option>
  <option value="2">-- Test 2 --</option>
  </select>
  <span class="error"><?php echo $q7Err;?></span>
  <br><br>
  8)Which is the only reptile that is a sign in the Chinese Zodiac?
  <br><br>
		Enter your response here:<input type="text" name="q8" value="<?php echo $q8;?>">
  <span class="error"><?php echo $q8Err;?></span>
  <br><br>
  9) Which is the only imaginary animal that is in the Chinese Zodiac?
  <br><br>
		Enter your response here:<input type="text" name="q9" value="<?php echo $q9;?>">
  <span class="error"><?php echo $q9Err;?></span>
  <br><br>
  10)The Chinese zodiac traditionally ends with what sign?
  <br><br>
  <select name="question10">
  <option value="NULL">-- Select the correct answer --</option>
  <option value="1">-- Test 1 --</option>
  <option value="2">-- Test 2 --</option>
  </select>
  <span class="error"><?php echo $q10Err;?></span>
  <br><br>
  <input type="button" name="clear" value="Clear Quiz">
  <input type="submit" name="submit" value="Grade Quiz">
  
</form>
</body>
</html>