<?php
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$phoneNumber = $_POST["phoneNumber"];
	$email = $_POST["email"];
	$eventType = $_POST["eventType"];
	$numberPeople = $_POST["numberPeople"];
	$location = $_POST["location"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$from = $firstName . ", " . $lastName; // sender
    $subject = "Event Booking";
    $message = "First Name: " . $firstName . "\r\n Last Name: " . $lastName . "\r\n Phone Number: " . $phoneNumber . "\r\n Email: " . $email . "\r\n Event Type: " . $eventType . "\r\n Number of People: " . $numberPeople . "\r\n Location: " . $location . "\r\n Date: " . $date . "\r\n Time: " . $time;
    // message lines should not exceed 70 characters (PHP rule), so wrap it
	$message = wordwrap($message, 70);
    // send mail
    mail('megacone4@sympatico.ca',$subject,$message);
    header("Location: ../thanks.php");
?>