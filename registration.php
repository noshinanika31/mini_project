
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>task10</title>

</head>
<body>
	<form action='registration_validation.php' method='post'>
		<fieldset class="main">
			<legend>REGISTRATION</legend>
			<table >
				<tr>
					<td class="label">Name :</td>
					<td>:</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Email :</td>
					<td>:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">User Name :</td>
					<td>:</td>
					<td><input type="text" name="user_name"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Password :</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td class="label">Confirm Password :</td>
					<td>:</td>
					<td><input type="password" name="confirmPassword"></td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender :</legend>
							<input type="radio" name="gender" value="male">Male
							<input type="radio" name="gender" value="female">Female
							<input type="radio" name="gender" value="other">Other
						</fieldset>
					</td>
				</tr>
				<tr><td colspan="3"><hr/"></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Date of Birth :</legend>
							<input type="text" name="day" >/
							<input type="text" name="month">/
							<input type="text" name="year">/(dd/mm/yy)
						</fieldset>
					</td>
				</tr>
				<tr><td colspan="3"><hr/></td></tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="submit" value="Resister">
						<a href = "login.php">login</a>
					</td>
				</tr>

			</table>
			
		</fieldset>
	</form>
</body>
</html>