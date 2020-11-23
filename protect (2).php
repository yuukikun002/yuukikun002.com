<?php
	$public_key = "6LdbZuoZAAAAAEor31OwA0lJQNc87ZSZSMQGkcg9";
	$private_key = "6LdbZuoZAAAAAJCCYWosG2AoCGafM_u_afpjx8pP";

	if(array_key_exists('submit_form', $_POST)){
		echo "<pre>";print_r($_POST);echo "</pre>";
	}

?>

<form method="post" action="">
<input type="text" name="name" placeholder="Your Name"/><br /><br />
<input type="email" name="email" placeholder="Your Email Address"/><br /><br />
<div class="g-recaptcha" data-sitekey="<?php print $public_key; ?>"></div>
<input type="submit" name="submit_form" placeholder="Submit"/>
</form>
<script src="https://www.google.com/recaptcha/api.js"></script>