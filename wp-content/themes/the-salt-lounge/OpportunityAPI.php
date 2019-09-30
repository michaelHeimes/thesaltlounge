<?php
include('Configuration.php');

if(isset($_POST) && !empty($_POST))
{
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['number'];
$time = $_POST['time'];

if(strlen($email)>0)
{
    $searchKey = $email;
	$searchparameter = 'email';
}
else
{
    $searchKey = $phone;
	$searchparameter = 'phone';
}

$url = $base_url.'Token';
$query="username=".$username."&password=".$password."&grant_type=password&clientid=".$clientId;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query);

//Execute cUrl session
try{
    $response = curl_exec($ch);
    $response = json_decode($response,true);
    $access_token = $response['access_token'];
    $centerid = $response['CenterId'];
}
catch(Exception $e) {
    echo 'Error Message: ' .$e->getMessage();
}


$url = $base_url."v1/guests/search?center_id=".$centerid."&".$searchparameter."=".$searchKey;
$header = array(
    'Authorization : bearer ' . $access_token
);
$ch2 = curl_init();
curl_setopt($ch2, CURLOPT_URL, $url);
curl_setopt($ch2, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_TIMEOUT, 30);
//Execute cUrl session
try{
    $response2 = curl_exec($ch2);
    $response2 = json_decode($response2,true);
    if(count($response2['guests']) >0)
    {
        $myObj = new stdClass();
		$myObj->center_id = $response2['guests'][0]['center_id'];
        $myObj->opportunity_title = $opp_title;
        $myObj->opportunity_description = $opp_desc;
        $myObj->priority_type_id = $priority_type_id;
		$myObj->opportunity_owner_id = $opportunity_owner_id;
        $myObj->expected_close_date = $expected_close_date;
        $myObj->guest_id = $response2['guests'][0]['id'];
        $myObj->created_by_id = $response2['guests'][0]['id'];
        $myObj->followup_date = date("Y-m-d",time());
        $myObj->status_id = $status_id;
        $myObj->optional_field_1 =  $time;

        $myJSON = json_encode($myObj);
        Createoppurtunity($myJSON,$access_token,$base_url);

    }
    else
    {


        $reqObj2 = new stdClass();
		$reqObj2->personal_info = new stdClass();
		$reqObj2->personal_info->mobile_phone = new stdClass();
		$reqObj2->preferences = new stdClass();
		$reqObj2->center_id = $centerid;
		$reqObj2->personal_info->first_name = $firstname;
        $reqObj2->personal_info->last_name = $lastname;
		$reqObj2->personal_info->mobile_phone->number = $phone;
		$reqObj2->personal_info->email = $email;
        $reqObj2->preferences->receive_transactional_sms = true;
        $reqObj2->preferences->receive_marketing_email = true;
        $reqObj2->preferences->receive_transactional_email = true;
        $reqObj2->preferences->receive_marketing_sms = true;

        $reqJson2 = json_encode($reqObj2);

        createguest($reqJson2,$access_token,$base_url,$centerid,$opp_title,$priority_type_id,$opportunity_owner_id,$opp_desc,$expected_close_date,$status_id,$time);
    }
}
catch(Exception $e) {
    echo 'Error Message: ' .$e->getMessage();
}

}


// CREATE OPPURTUNITY
function Createoppurtunity($data,$access_token,$base_url)
{
    $url = $base_url."v1/Opportunities";
    $header = array(
        'Content-Type: application/json',
        'Authorization : bearer ' . $access_token
    );

    $ch3 = curl_init();
    curl_setopt($ch3, CURLOPT_URL, $url);
    curl_setopt($ch3, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch3, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch3, CURLOPT_POST, 1);
    curl_setopt($ch3, CURLOPT_POSTFIELDS, $data);
    //Execute cUrl session
    try{
        $response3 = curl_exec($ch3);
		echo '<pre>';
		print_r($response3);
		echo '</pre>';
    }
    catch(Exception $e) {
        echo 'Error Message: ' .$e->getMessage();
    }
}


// CREATE GUEST
function createguest($data,$access_token,$base_url,$centerid,$opp_title,$priority_type_id,$opportunity_owner_id,$opp_desc,$expected_close_date,$status_id,$time){
    $url = $base_url."v1/guests";
    $header = array(
        'Content-Type: application/json',
        'Authorization : bearer ' . $access_token
    );
    $ch4 = curl_init();
    curl_setopt($ch4, CURLOPT_URL, $url);
    curl_setopt($ch4, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch4, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch4, CURLOPT_POST, 1);
    curl_setopt($ch4, CURLOPT_POSTFIELDS, $data);
    //Execute cUrl session
    try{
        $response4 = curl_exec($ch4);
		$myele = json_decode($response4);
        $guestid = $myele->id;
        $myObj3 = new stdClass();
		$myObj3->center_id = $centerid;
        $myObj3->opportunity_title = $opp_title;
        $myObj3->opportunity_description = $opp_desc;
        $myObj3->priority_type_id = $priority_type_id;
		$myObj3->opportunity_owner_id = $opportunity_owner_id;
        $myObj3->expected_close_date = $expected_close_date;
        $myObj3->guest_id =  $guestid;
        $myObj3->created_by_id =  $guestid;
        $myObj3->followup_date =   date("Y-m-d",time());
        $myObj3->status_id =  $status_id;
		$myObj3->optional_field_1 =  $time;
		$myJSON3 = json_encode($myObj3);
		Createoppurtunity($myJSON3,$access_token,$base_url);
			 
        }
    catch(Exception $e) {
        echo 'Error Message: ' .$e->getMessage();
    }
}



?>