<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";

	exit;

}

if(empty($_POST["fullname"]) || empty($_POST["email"]))
{
	echo "Please fill the formm"
	exit;

}

$name = $_POST["fullname"];
$email = $_POST["email"];


mail( 'nbh4@njit.edu', 'New form submission', "New form submission: Name: $name,
Email:$email");

header('Location: thank-you.html');
?>

