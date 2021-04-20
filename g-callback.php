<?php
	require_once "./includes/config.php";
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: login.php');
		exit();
	}
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

   $email_var=$userData['email'];
	$res=mysqli_query($con,"select * from google_users where google_email='$email_var'");
$check=mysqli_num_rows($res);
        $row=mysqli_fetch_assoc($res);
        // $_SESSION['NAME']=$row['name'];  ******required*******
        
if($check>0){
	header('Location: index.php');


}else{

 $sql="insert into google_users (client_id,name,last_name,google_email,gender,picture_link) values
 ('".$userData['id']."','".$userData['givenName']."','".$userData['familyName']."','".$userData['email']."',
 '".$userData['gender']."','".$userData['picture']."')";
	mysqli_query($con,$sql);
	header('Location: index.php');
	exit();
}
?>