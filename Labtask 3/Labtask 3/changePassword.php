<?php
	
	if(isset($_POST['Submit']))
	{
		$currentPassword = $_POST['cPassword'];
		$newPassword = $_POST['nPassword'];
		$retypeNewPassword = $_POST['rnPassword'];

		if($currentPassword !== $newPassword)
		{
			if($newPassword == $retypeNewPassword)
			{
				echo "Your password has changed successfully!!!";
			}
			else{echo "Something went wrong!!!";}
		}
		else{echo "Please try again!!!";}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ChangePassword</title>
</head>
<body>
	<form method="POST" action="">
		<fieldset style="width: 380px;">
			<legend> <b>Change Password</b></legend>
				<table>
				<tr>
					<td>Current Password: </td>
					<td> <input type="password" name="cPassword"/> 
					<br/> </td>
				</tr>

				<tr>
					<td> New Password: </td>
					<td> <input type="password" name="nPassword"/> <br/></td>
				</tr>

				<tr>
					<td>Retype New Password: </td>
					<td> <input type="password" name="rnPassword"/> <br/></td>
				</tr>
			</table>
			<hr>
			<input type="submit" name="Submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>