<?php


include('../myfuncs.php');
require_once('../utility.php');


$conn = dbConnect();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$user_ID = getUserId();

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
//echo "Connected successfully" . "<br>";
}

//Variables from form
$fullName = $_POST['fullName'];
$nameCard = $_POST['nameCard'];
$email = $_POST['email'];
$address = $_POST['address'];
$cardNum = $_POST['cardNum'];
$city = $_POST['city'];
$expirM = $_POST['expirM'];
$expirY = $_POST['expirY'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$cvv = $_POST['cvv'];
$hiddenID = $_POST['hiddenID'];

$org = getOneUser($user_ID)[0]['ORGANIZATION'];



function generateRandomString($length = 20) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

$ran = generateRandomString();


//Set admin to 3
$sql = "UPDATE users SET admini='3' WHERE ID =".$hiddenID; 



?>

<meta id="baseurl" http-equiv="refresh" content="<?php echo $baseU; ?>/purchaseSuccess.php?size=small" />


<?php









//Check for succesful record creation
if($conn->query($sql) == TRUE){

  //$nsql = "SELECT ID, USERNAME, PASSWORD FROM `users` WHERE USERNAME='$username' AND BINARY PASSWORD= BINARY'$pass'";
  //$result1 = $conn->query($nsql);
  //if ($result1->num_rows == 1) {
        
    //$row = $result1->fetch_assoc();	// Read the Row from the Query
    //saveUserId($row["ID"]);		// Save User ID in the Session
    //include('../.php');  
  
  //echo "New record created succesfully". "<br>";
 // }
}else{
  //include('../registerFailed.php'); 
  //echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "INSERT INTO `Organization` (`id`, `Name`, `access`, `user`) 
VALUES (NULL, '$org', '$ran', '$user_ID')";


//Check for succesful record creation
if($conn->query($sql1) == TRUE){

  //$nsql = "SELECT ID, USERNAME, PASSWORD FROM `users` WHERE USERNAME='$username' AND BINARY PASSWORD= BINARY'$pass'";
  //$result1 = $conn->query($nsql);
  //if ($result1->num_rows == 1) {
        
    //$row = $result1->fetch_assoc();	// Read the Row from the Query
    //saveUserId($row["ID"]);		// Save User ID in the Session
    //include('../.php');  
  
  //echo "New record created succesfully". "<br>";
 // }
}else{
  //include('../registerFailed.php'); 
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//
$orgID = getOrgID($ran)["ID"];
//print_r($orgID);


$sql5 = "UPDATE users SET Organization='".$orgID."', access='".$ran."' WHERE ID =".$user_ID; 



//Check for succesful record creation
if($conn->query($sql5) == TRUE){

  //$nsql = "SELECT ID, USERNAME, PASSWORD FROM `users` WHERE USERNAME='$username' AND BINARY PASSWORD= BINARY'$pass'";
  //$result1 = $conn->query($nsql);
  //if ($result1->num_rows == 1) {
        
    //$row = $result1->fetch_assoc();	// Read the Row from the Query
    //saveUserId($row["ID"]);		// Save User ID in the Session
    //include('../.php');  
  
  //echo "New record created succesfully". "<br>";
 // }
}else{
  //include('../registerFailed.php'); 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>