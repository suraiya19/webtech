<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>validation</title>
	<style>.error {color: red;}</style>
</head>
<body>
<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["dob"]);
  $comment = test_input($_POST["gender"]);
  $gender = test_input($_POST["blood group"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <fieldset>
 	<legend>NAME</legend>
 	<input type="text" name="name" value="<?php echo $name;?>">
 	<span class="error">* <?php echo $nameErr;?></span>
 	<hr>
 	
 	<legend>EMAIL</legend>
 	<input type="text" name="email" value="<?php echo $email;?>">i
 	<span class="error">* <?php echo $emailErr;?></span>
 	<hr>

 	<legend>DATE OF BIRTH</legend>
 	<input type="date" name="dob" value="<?php echo $dob;?>">
 	<span class="error">* <?php echo $dobErr;?></span>
 	<hr>

 	<legend>GENDER</legend>
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?>  Male
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> Female
 	<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> Other
 	<span class="error">* <?php echo $genderErr;?></span>
 	<hr>

 	<legend>DEGREE </legend>
 	<input type="checkbox" name="degree[0]" value="SSC" <?php if(isset($_POST['degree'][0])) echo "checked"; ?> SSC 
  	<input type="checkbox" name="degree[1]" value="HSC" <?php if(isset($_POST['degree'][1])) echo "checked"; ?> HSC 
  	<input type="checkbox" name="degree[2]" value="BSc" <?php if(isset($_POST['degree'][2])) echo "checked"; ?> BSc 
  	<input type="checkbox" name="degree[3]" value="MSc" <?php if(isset($_POST['degree'][3])) echo "checked"; ?> MSc
  	<span class="error">* <?php echo $degreeErr;?></span>
 	<hr>

 	<legend>BLOOD GROUP </legend>
 	<select name="blood"> 
		<option value=""></option>
    	<option value="A+" <?php if($blood == 'A+'){ echo ' selected="selected"'; } ?> A+</option>
    	<option value="B+" <?php if($blood == 'B+'){ echo ' selected="selected"'; } ?> B+</option>
    	<option value="O+" <?php if($blood == 'O+'){ echo ' selected="selected"'; } ?> O+</option>
    	<option value="A-" <?php if($blood == 'A-'){ echo ' selected="selected"'; } ?> A-</option>
    	<option value="B-" <?php if($blood == 'B-'){ echo ' selected="selected"'; } ?> B-</option>
    	<option value="O-" <?php if($blood == 'O-'){ echo ' selected="selected"'; } ?> O-</option>
    	<option value="AB+" <?php if($blood == 'AB+'){ echo ' selected="selected"'; } ?> AB+</option>
    	<option value="AB-" <?php if($blood == 'AB-'){ echo ' selected="selected"'; } ?> AB-</option>
	</select>
	<span class="error">* <?php echo $bloodErr;?></span>
 	<hr>

 	<input type="submit">

 </fieldset>	
</form>

</body>
</html>