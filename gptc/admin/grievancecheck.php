<?php
include('includes/headf.php');
include('includes/headerf.php');
include('config/dbcon.php');
?>

<style>label {
    display: block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: bold;

}
h1{  
	  text-align: center;
	}
form label {
			font-weight: bold;
			margin-right: 10px;
		}
		form input[type="text"] {
			padding: 10px;
			margin-right: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 18px;
		}
		form button {
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			background-color: #007bff;
			color: #fff;
			cursor: pointer;
		}
		form button:hover {
			background-color: #0069d9;
		}
</style>
	<h1>Check Replay Message</h1>
	<form method="post">

		<label for="phone">Phone Number:</label>
		<input type="text" name="phone" id="phone">
		<button type="submit" name="sub" >Check</button>
	</form>
    <?php

// check if form submitted
if (isset($_POST['sub']))
 {
	// retrieve phone number from form data
	$phone = $_POST['phone'];

	// query database for message with matching phone number
	$query = "SELECT msg FROM grievreply WHERE phn = '$phone'";
	$result = mysqli_query($con, $query);

	// display message if found, or error message if not found
	if ($result->num_rows > 0) {
		$message = $result->fetch_assoc()['msg'];
		echo "<label>Message: $message</label>";
	} else {
		echo "<label>No message found for phone number $phone</label>";
	}
}

?>
