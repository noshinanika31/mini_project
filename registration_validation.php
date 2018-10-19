
<?php
	if(!isset($_SESSION['name']))
	{
		header("Location:home.php");
	}
	session_start();
	
	$flag = false;
	if (isset($_POST['name']))
	{
		$start = ord(substr($_POST['name'],0,1));
		if ($_POST['name']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Name can not be empty";
		}
		elseif(str_word_count($_POST['name'])==1)
		{
			$flag = true;
			echo "<br>";
			echo "Minimum 2 word required";
		}
		elseif(!(($start>64 && $start<91) ||($start>96 && $start<123)))
		{
			$flag = true;
			echo "<br>";
			echo "First word must contaion a letter";
		}
		elseif (!preg_match("/^[a-zA-Z .,-]*$/",$_POST["name"]))
		{
			$flag = true;
			echo "<br>";
			echo "Only letters and white space allowed";
		}
		else
		{
			$_SESSION['name'] = $_POST['name'];
		}
	}
	if(isset($_POST['email']))
	{
		if ($_POST['email']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Email can not be empty";
		}
		elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
		{
			$flag = true;
			echo "<br>";
			echo "Invalid email format"; 
		}
		else 
		{
			$_SESSION['email'] = $_POST['email'];
		}
	}
	if(isset($_POST['submit']))
	{
		if($_POST['day']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Day can not be empty";
		}
		elseif($_POST['day']<1 || $_POST['day']>31)
		{
			$flag = true;
			echo "<br>";
			echo "Day must between 1-31";
		}
		else
		{
			$_SESSION['day'] = $_POST['day'];
		}
		
		if($_POST['month']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Month can not be empty";
		}
		elseif($_POST['month']<1 || $_POST['month']>12)
		{
			$flag = true;
			echo "<br>";
			echo "Month must between 1-12";
		}
		else
		{
			$_SESSION['month'] = $_POST['month'];
		}
		
		if($_POST['year']=="")
		{
			$flag = true;
			echo "<br>";
			echo "Year can not be empty";
		}
		elseif($_POST['year']<1953 || $_POST['year']>1998)
		{
			$flag = true;
			echo "<br>";
			echo "Year must between 1953-1998";
		}
		else
		{
			$_SESSION['year'] = $_POST['year'];
		}
	}
	if(isset($_POST['submit']))
	{
		if(empty($_POST['gender']))
		{
			$flag = true;
			echo "<br>";
			echo "Gender can't be empty";
		}
		else
		{
			$_SESSION['gender'] = $_POST['gender'];
		}
	}
	
	if(isset($_POST['submit']))
	{
		$userName = $_POST["user_name"];
		$pass = $_POST['password'];
		
		if(!preg_match("/^[a-zA-Z0-9.,-]*$/",$userName))
		{
			$flag = true;
			echo "<br>";
			echo "Only letters and white space allowed in user name";
		}
		elseif(strlen($userName)<2)
		{
			$flag = true;
			echo "<br>";
			echo "Usename must contaion atlist 2 charecter";
		}
		elseif(strlen($pass)<8)
		{
			$flag = true;
			echo "<br>";
			echo "Password must contaion atlist 8 charecter";
		}
		elseif(!preg_match("/[@,#,$,%]/",$pass))
		{
			$flag = true;
			echo "<br>";
			echo "Password must contain at least one of the special characters @, #, $, %";
		}
		else
		{
			$_SESSION['user_name'] = $_POST['user_name'];
		}
		
	}
	if(isset($_POST['submit']))
	{
		$newpass = $_POST['password'];
		$repass = $_POST['confirmPassword'];
		
		if($newpass == "")
		{
			$flag = true;
			echo "<br>";
			echo "Password can't be empty";
		}
		elseif($newpass != $repass)
		{
			$flag = true;
			echo "<br>";
			echo "Missmatch password";
		}
		else
		{
			$_SESSION['password'] = $_POST['password'];
		}
		
	}
	if(!$flag)
	{
		echo "Successfully registered, Login your account";
		header("Location:login.php");
	}
	
?>
