<?php
//dpantzos

error_reporting(E_ALL);
ini_set('display_errors', '1'); 

if( !empty($_POST['name']) ) {
    $message= "<h1>Greetings, {$_POST['name']}, and welcome.</h1>";
} 

?>

<html>
<head>
	<title>Personalized Greeting Form</title> 
</head> 
	<body>
<?php 
	if( isset($message) ) {
		echo $message;
	} 
?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			Enter your name: <input type="text" name="name" />
			<input type="submit" />
		</form>		
	</body>
</html>
	
