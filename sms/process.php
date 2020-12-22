

<?php
session_start();
//  Data Fetch
$numbers = $_POST['phone'];
// echo $numbers;
$otp = rand(000000,999999);

echo $_SESSION["OTP"] = $otp;




				$fields = array(
				"sender_id" => 'FSTSMS',
				"message" => 'Your OTP is : '.$_SESSION["OTP"],
				"language" => "english",
				"route" => "p",
				"numbers" => $numbers,
			);
			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => json_encode($fields),
			  CURLOPT_HTTPHEADER => array(
				"authorization: CvqF3ilrTvuJaDmXhWHOS0fNAYb3uUXan32f9OohWw8t4QvelPJiuAZp209Q",
				"accept: */*",
				"cache-control: no-cache",
				"content-type: application/json"
			  ),
			));

			$response = curl_exec($curl);
			echo $err = curl_error($curl);

			curl_close($curl);

			if ($err) {
			  echo $response="cURL Error #:" . $err;
			 
			}else{

				header('location:otp_verify.php');

			}
				
/*
if($_POST['type']==1){
	$otp=rand(100000,999999);
	$sender_id="FSTSMS";
	$message="OTP for mobile verification is :". $otp;
	$number=$_POST['phone'];
	Fstmsms($sender_id,$message,$number);
	$_SESSION['OTP']=$otp;
	echo json_encode(array("statusCode"=>200));
}
if($_POST['type']==2){
	if($_SESSION['OTP']==$_POST['otp']){
		echo json_encode(array("statusCode"=>200));
	}
}
if($_POST['type']==3){
	$sender_id="FSTSMS";
	$number=$_POST['phone'];
	$message="OTP for mobile verification is :". $_SESSION['OTP'];
	Fstmsms($sender_id,$message,$number);
	echo json_encode(array("statusCode"=>200));
}

*/
?>

