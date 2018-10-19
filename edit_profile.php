<?php
	session_start();
?>
<html>
	<head>
		<title>Edit profile </title>
	</head>
	<body>
	<form action='edit_profile.php' method='post'>
		<table align= "center">
			<tr>
				 <td>
				<fieldset>
					<legend> Edit profile </legend>
					Name  :
					<input type="text" name="name" value="<?php echo $_SESSION['name']?>"/>
					<hr/>
					Email  :
					<input type="text" name="email" value="<?php echo $_SESSION['email']?>"/>
					<hr/>
					Gender :
					<input type="radio" name="gender" value="male" <?php if($_SESSION['gender'] == 'male'){echo 'checked';} ?> /> Male
					<input type="radio" name="gender" value="female" <?php if($_SESSION['gender'] == 'female'){echo 'checked';} ?> />Female
					
					Date of Birth :
					<input type="text" name="day" value="<?php echo $_SESSION['day']?>">/
					<input type="text" name="month" value="<?php echo $_SESSION['month']?>">/
					<input type="text" name="year"  value="<?php echo $_SESSION['year']?>">/  (dd/mm/yy)
					<hr/>
					<input type="submit" name = "editProfileSubmit" value="submit"/>
					<a href = "user.php"> go to the homepage</a>
				</fieldset>
			   </td>
		   </tr>
		</table>
	<form>
	</body>
</html>
<?php
	if(isset($_POST["editProfileSubmit"]))
	{
		$_SESSION['gender'] = $_POST["gender"];
		$_SESSION['day'] = $_POST["day"];
		$_SESSION['month'] = $_POST["month"];
		$_SESSION['year'] = $_POST["year"];
		$flag = true;
		if (isset($_POST["name"]))
		{
			$start = ord(substr($_POST["name"],0,1));
			if ($_POST["name"]=="")
			{
				$flag = false;
				echo "<br>";
				echo "Name can not be empty";
			}
			elseif(str_word_count($_POST["name"])==1)
			{
				$flag = false;
				echo "<br>";
				echo "Minimum 2 word required";
			}
			elseif(!(($start>64 && $start<91) ||($start>96 && $start<123)))
			{
				$flag = false;
				echo "<br>";
				echo "First word must contaion a letter";
			}
			elseif (!preg_match("/^[a-zA-Z .,-]*$/",$_POST["name"]))
			{
				$flag = false;
				echo "<br>";
				echo "Only letters and white space allowed";
			}
			else
			{
				$_SESSION['name'] = $_POST['name'];
			}			
		}
		if(isset($_POST["email"]))
		{
			if ($_POST["email"]=="")
			{
				$flag = false;
				echo "<br>";
				echo "Email cann't be empty";
			}
			elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
			{
				$flag = false;
				echo "<br>";
				echo "Invalid email format"; 
			}
			else 
			{
				$_SESSION['email'] = $_POST['email'];
			}
		}
		if($flag)
		{
			header("Location:edit_profile.php");
		}
	}
?>