<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'garbage');
define('DB_USER','root');
define('DB_PASSWORD','root');

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function update()
{

   //starting the session for user profile page
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	
	$query = mysql_query("update register set username = '$_POST[user]' , password = '$_POST[pass]', emailaddress='$_POST[email]',firstname='$_POST[fname]',lastname='$_POST[lname]',address='$_POST[address]',city='$_POST[city]',country='$_POST[country]',postalcode='$_POST[pcode]'   where id=0 ") or die(mysql_error());
	
	if(! $query )
	{
		 die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
	
	
mysql_close($con);

}
}
if(isset($_POST['submit']))
{

	update();
}

?>
