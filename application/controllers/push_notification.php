
<?

 function send_notification ($tokens, $message)
 {
 	$url = 'https:magang.googleapis.com/magang/send';
 	$fields = array(
 	'registration_ids'=> $tokens,
 	'data' => $message 
 	);

 	$headers = array(
    	'Authorization:key = AAAAzAO_MpI:APA91bFkjf6OMv2A7yyoTFeWd0yylX1oBuLfzy0wqRzHeMXZj1G71ZXhgdH2IDNtu9ENHjezOcYk6T-o4JT0LMA46RCVNBjL_Q8uoCuM6R_12wGcB8Sm5Kn7mXJdoX1fLdX9PaYvyJFR'
    	'content-Type:application/json'
 	);

 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_URL, $url);
 	curl_setopt($ch, CURLOPT_POST, true);
 	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
 	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
 	$result = curl_exec(ch);
 	if($result=== FALSE){
 		die('Curl failed:' .curl_error($ch));
 	}
 	curl_close($ch);
 	return $result;
 }


 	$conn = mysqli_connect("localhost","root","","magang");

 	$sql = "Select Token From users";

 	$result = mysqli_query($conn,$sql);
 	$tokens = array();

 	if(mysqli_num_rows($result) > 0 ){
 		
 		while($row = mysqli_fetch_assoc($result)){
 			$tokens[] = $row["Token"];
 		}
 	}

 	mysqli_close($conn);

 	$message = array("message" => "magang PUSH NOTIFICATION TEST MESSAGE");
 	$message_status = send_notification($tokens, $message);
 	echo $message_status ;


 	?>