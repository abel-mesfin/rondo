<?php
require_once('utility.php');
include_once('myfuncs.php');

$conn = dbConnect();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $pst = $_POST['posts'];
    $user = $_POST['user'];
    $numberList = getPostNumbers($user)['posts'];
    $str_arr = explode (",", $numberList); 
    $duplicate = false;

    if(strpos($numberList, ",") !== true and !empty($numberList)){
        if(strpos($numberList, $pst) == true ){
            $numberList = $numberList.",";
        }
    } 

    foreach ($str_arr as $ke => $ne) {
        if($ne == $pst){
            $key = array_search($ne, $str_arr, true);
            if($ke !== false) {
                unset($str_arr[$ke]);

            }
            $duplicate = true;
        }
    }

    if($duplicate == false and !empty($numberList) and strlen($numberList) !== 2){
        $pst = $numberList .",".$pst;
    }elseif(empty($numberList) ){
        $pst = $pst;
    }elseif(strlen($numberList) == 1){
        $pst = "";

    }

    if($key){
        $pst = implode(',', $str_arr);
    }

    $sql = "UPDATE Organization SET posts='".$pst."' WHERE user =".$user;

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
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    
}