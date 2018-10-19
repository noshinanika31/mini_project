<?php
	session_start();
?>
<html>
	<head>
		<title>Login Validation </title>
	</head>
	<body>
	<form action='loginValidation.php' method='post' target="_top">
		<table align= "center">
			<tr>
				 <td>
				<fieldset>
					<legend> LOGIN </legend>
					User Name :
					<input type="text" name="user_name"/>
					<br>
					Password :
					<input type="password" name="password"/>
					<hr/>
					<input type = "checkbox"/> Remember Me
					<br>
					<input type="submit" name = "loginSubmit" value="login"/>
					<a href ="registration.php">Register</a>
					
				</fieldset>
			   </td>
		   </tr>
		</table>
	<form>
	</body>
</html>
