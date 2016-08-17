<!DOCTYPE html>
<html>
<body>

<?php
$username="reshma.1866@gmail.com";
$hash = "75378419535e999c2fc609630302fb6808db6997";

$numbers=917276575869;
$sender = urlencode('TXTLCL');
$message=rawurlencode('dashboard script');

$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

if($_POST['submitted']=="true")
{
	$ch = curl_init('http://api.textlocal.in/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);
    	
    	// Process your response here
    	echo $response;Number: <br />
		<input type="text" size=2 name="numberext"> - <input type="text" name="number">
		<br /><br />
		
		Sender: <br />
		<input type="text"  name="from">
		
		<br /> <br />
		
		Message: <br />
		<textarea name="message"> </textarea>
		 <br />
	
}

?>
<form action="sendsms.php"  method="POST">
		
		<input type="hidden" name="submitted" value="true">
		<input type="submit" name="submit" value="Send">
		
</form>
</body>
</html> 