<?php

//CONTACT FORM
if (isset($_POST['submitContact'])) {

	$headers = 'From: ' . $_POST['email'] . "\r\n" .
	'Reply-To: ' . $_POST['email'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion(). "\r\n".
    'Content-type: text/html';

	$message = "<b>From: </b>" . $_POST['email'] . "<br>";
	$message .= "<b>Name: </b>" . $_POST['name'] . "<br>";
	$message .= "<b>Message:</b>" . "<br>";
	$message .= isset($_POST['message']) ? $_POST['message'] : "No Message";

	mail($_POST['emailTo'], "Contact message from your blog", $message, $headers);
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

//BUYER FORM
if (isset($_POST['submitBuyerForm'])) {
	$headers = 'From: ' . $_POST['_replyto'] . "\r\n" .
	'Reply-To: ' . $_POST['_replyto'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion(). "\r\n".
    'Content-type: text/html';

    $message = "<b>What type of property are you looking for?: </b>" . $_POST['type'] . "<br>";
    $message .= "<b>What is your desired price range?: </b>" . $_POST['price'] . "<br>";
    $message .= "<b>Minimum number of bathrooms?: </b>" . $_POST['bathrooms'] . "<br>";
    $message .= "<b>Minimum number of bedrooms?: </b>" . $_POST['bedrooms'] . "<br><br>";

    $message .= "<b>Any important features or comments?: </b>" . "<br>";
	$message .= isset($_POST['comments']) ? $_POST['comments'] : "No Comments";

    $message .= "<br><br><b>When are you looking to move?: </b>" . $_POST['when'] . "<br>";
    $message .= "<b>What do you think your pricerange is?: </b>" . $_POST['range'] . "<br>";
	$message .= "<b>Name: </b>" . $_POST['name'] . "<br>";
	$message .= "<b>Email: </b>" . $_POST['_replyto'] . "<br>";
	$message .= "<b>Phone number: </b>" . $_POST['phone'] . "<br>";

	mail($_POST['emailTo'], "Buyer Request From your blog" , $message, $headers);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

//SELLER FORM
if (isset($_POST['submitSellerForm'])) {
	$headers = 'From: ' . $_POST['_replyto'] . "\r\n" .
	'Reply-To: ' . $_POST['_replyto'] . "\r\n" .
	'X-Mailer: PHP/' . phpversion(). "\r\n".
    'Content-type: text/html';

    $message = "<b>What type of property are you selling?: </b>" . $_POST['type'] . "<br>";
    $message .= "<b>What is the square footage?: </b>" . $_POST['footage'] . "<br>";
    $message .= "<b>Number of bathrooms: </b>" . $_POST['bathrooms'] . "<br>";
    $message .= "<b>Number of bedrooms: </b>" . $_POST['bedrooms'] . "<br><br>";

    $message .= "<b>Any important features or comments?: </b>" . "<br>";
	$message .= isset($_POST['comments']) ? $_POST['comments'] : "No Comments";

    $message .= "<br><br><b>When are you looking to move?: </b>" . $_POST['when'] . "<br>";
    $message .= "<b>What is your desired asking price?: </b>" . $_POST['range'] . "<br>";
	$message .= "<b>Name: </b>" . $_POST['name'] . "<br>";
	$message .= "<b>Email: </b>" . $_POST['_replyto'] . "<br>";
	$message .= "<b>Phone number: </b>" . $_POST['phone'] . "<br>";

	mail($_POST['emailTo'], "Seller Request From your blog" , $message, $headers);

	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>