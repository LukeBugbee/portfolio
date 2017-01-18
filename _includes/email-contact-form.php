<?

	/*
	$name = 'Luke'; // string
	$number = 4; // integer
	$array = array('blue', 'red', 'yellow'); // red = $array[1]
	$associative_array = array('blue'=>'blu', 'red'=>'rouge'); // translation map $associative_array['blue'] - key=>value
	*/

	// $_POST = array('name'=>'Luke', ....);
	// Function declaration
	function getPostVar($key)
	{

		if (isset($_POST[$key])) {
			return $_POST[$key];
		}

		return NULL;

	}

	/////

	if (
		$name = getPostVar('name')
		&&
		$email = getPostVar('email')
		&&
		$message = getPostVar('message')
	) {

		$to = "luke.bugbee@gmail.com";
		$subject = "My subject";
		$txt = $name . '(' . $email . ')' . '\n' . $message;
		$headers = "From: no-reply@lukebugbee.com" . "\r\n" .
		"CC: luke.bugbee@gmail.com";

		mail($to,$subject,$txt,$headers);

	} else {

		echo "You're missing some values.";
		die();

	}

	

?>
