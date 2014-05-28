<?php

if (isset($_GET['action'])) {
	$action = $_GET['action']; 
} else {
	$action = ''; 
}

$title = 'contact';

require ('includes/commonHeader.php');

if ($action == 'send') {
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$phone = $_POST['phone']; 
	$subject = $_POST['subject']; 
	$message = $_POST['message']; 

	$post = 
		"The following message has been sent via the contact form on davidtrussler.net:\r\n
		name: ".$name."\r\n
		phone number: ".$phone."\r\n
		message: ".$message."\r\n"; 

	$to = 'mail@davidtrussler.net'; 

	$mail = mail($to, $subject, $post, 'From: '.$email);

	if ($mail) {
		$mailAlert = 'Thank you for your message. I will get back to you as soon as I can.'; 
	} else {
		$mailAlert = 'There was a problem sending your message. Please try again later.'; 
	}
}

?>

<div id="primary">

<?php 

if (isset($mailAlert)) {

?>

	<p class="alert"><?php echo $mailAlert; ?></p> 

<?php

}

?>

	<form action="?action=send" method="post">
		<fieldset>
			<div class="field clear">
				<label for="name">Your name</label>
				<input class="input" type="text" placeholder="name" name="name" id="name"/>
			</div>

			<div class="field clear">
				<label for="email">Your email address</label>
				<input class="input" type="email" placeholder="email" name="email" id="email"/>
			</div>

			<div class="field clear">
				<label for="phone">Your telephone number</label>
				<input class="input" type="number" placeholder="phone" name="phone" id="phone"/>
			</div>

			<div class="field clear">
				<label for="subject">Subject of your message</label>
				<input class="input" type="text" placeholder="subject" name="subject" id="subject"/>
			</div>

			<div class="field clear">
				<label for="message">Your message</label>
				<textarea class="input" placeholder="message" name="message" cols="" rows="" id="message"></textarea>
			</div>

			<div class="actions clear">
				<button>send your message</button>
			</div>
		</fieldset>
	</form>
</div>

<div id="secondary">
	<p>You can contact me by email at <a href="mailto:mail@davidtrussler.net">mail@davidtrussler.net</a> or by using the form on this page. Please include contact details if you would like me to get back to you.</p>

	<p>Otherwise telephone me on <a href="tel:+447914201824">+44 (0) 7914 201824</a></p>
</div>

<?php

require ('includes/commonFooter.php');

?>