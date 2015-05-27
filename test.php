<?php
// test.php
// This page requires set_inc.php and logout_inc.php
// comment

session_start();
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//Bring the session variables from the session set page
$_SESSION['key'];
//this was added by alex for testing fool. mr t
// Login Form
$form = '
		<form action="' . THIS_PAGE . '" method="post">
		<input type="text" name="password" value="" />
		<input type="submit" name="login" value="Login" />
		</form>
		';

		
$form = '
		<form action="' . THIS_PAGE . '" method="post">
		<input type="text" name="password" value="" />
		<input type="submit" name="login" value="Login" />
		</form>
		';		


$form = '
		<form action="' . THIS_PAGE . '" method="post">
		<input type="text" name="password" value="" />
		<input type="submit" name="login" value="Login" />
		</form>
		';		
		
$index = '
		<h1>IT WORKS!</h1>
		<form action="logout.php" method="post">
		<input type="submit" name="logout" value="Logout" />
		</form>
		<hr /><h2>Here is a diagram of what just happened:</h2>
		<img src="diagram.jpg" alt="Passphrase Diagram" width="70%">
		';
	
	
if(isset($_POST['login']))
{//post data, verify password

	if($_POST['password'] == ($_SESSION['key'])){
		$_SESSION['access'] = true;
		echo $index;
	}else{
		//wrong password
		echo '<h2>Sorry, try again:</h2>';
		echo $form;
	}

}
else if($_SESSION['access'] == true)
{//on reload check if the password has already been accepted during the session
	echo $index;
}
else
{
	//show form
	echo '<h1>Please enter the passphrase:</h1>';
	echo $form;
}