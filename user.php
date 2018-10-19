<?php
	session_start();
	if($_SESSION['name'])
	{

	}
	else
	{

		header('location:index.php');
	}
?>
<html>
	<head>
		<title>Logged</title>
	</head>
	<body>
		<form target="_top" action="user.php" method="post">
		<table  border="1" width="1300" height="700">
		<tr height="100">
			<td>
			<table border="0">
				<tr>
				<td width="1100">
					<img src="anika.JPG">
					
				</td>
					<td>
						Logged in as
					</td>
					<td >
						<?php echo $_SESSION['name'];?>
					</td>
					<td>
						<input type="submit" name="logout" value="logout"/>
					</td>
					</tr>
			</table>
			</td>
		</tr>
		<tr>
		
		
			 <td>
				<table border="0">
				<tr>
					<td valign="top" width="300">
					<h1>Account</h1>
					<ul>
					<li><a href="profile_data.php" target="myframe">View Profile</a></li>
					<li><a href="edit_profile.php"target="myframe">Edit Profile</a></li>
					<li><a href="profilepic.php" target="myframe">Change Profile Picture</a></li>
					<li><a href="change_pass.php"target="myframe">Change Password</a></li>
					
					</ul>
				</td>
			</tr>
			</td>

			</table>
		</form>
	</body>
	
	
</html>
<?php
	if(isset($_POST['logout']))
	{
		session_destroy();
		header("Location:index.php");
	}
?>
