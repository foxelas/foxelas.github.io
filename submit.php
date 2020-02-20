<?php 
$errors = '';
$to = 'work.jpn@outlook.com'; // note the comma
// Subject
$subject = 'test';
// Message
$message = 'hey';

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'From: $myemail';

// Mail it
mail($to, $subject, $message, implode("\r\n", $headers));

/*$myemail = 'work.jpn@outlook.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

if(!isset($_POST['submit']))
{
	$errors .= "\n Error: you need to submit the form";
}
		
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "foxelas.github - Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message"; 

	
		// To send HTML mail, the Content-type header must be set
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=iso-8859-1';
	
	$headers[] = "From: $myemail\n"; 
	//$headers[] = "Reply-To: $email_address";
	
	if ($_POST['submit']) {	
	    mail($to,$email_subject,$email_body,$headers);
		header('Location: index.html');
	}
} 
*/
?>

<!DOCTYPE html"> 
<html>
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>


</body>
</html>