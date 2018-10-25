<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<style media="screen" type="text/css">


</style>





<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>5 stars</title>










</head>





<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "williams_ocampos@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "";
?>



<body>
<center><img src="Liberty/images/header-bg.png" width="268" height="67" /></center>


<p>

<center><form action="mail.php" method="POST">


<br />
</p>

<h2>Thank you for your response!</h2>

<h3> We're really pleased that you are satisfied with us at the moment! Please give us some comments about your experience</h3>

<textarea name="message" rows="6" cols="30"></textarea><br />

<p>Name (optional)</p> <input type="text" name="name">
<p>

<input type="submit" value="Send"><input type="reset" value="Clear">


</form></center></p>


<p>&nbsp;</p>
</body>
</html>
