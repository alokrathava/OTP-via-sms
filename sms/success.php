<?php  

	session_start();

	$wotp = $_POST['wotp'];
	$votp = $_POST['votp'];

	if ($wotp == $votp) {
		echo "Number Verified";
	}else{
		echo "Number Verification Failed";
	}

?>