<!--
Project Name: Milestone 3 Blog Post
Version 3
login.html module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->


<!DOCTYPE html>


<html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('utility.php');
$user_ID = getUserId();



if(empty($accessCode)):?>

<head>
    <style>
        form {
            background-color: silver;
            width: 500px;
            margin-left: 100px;
            margin-top: 200px;
            align-items: center;
            padding: 20px;
        }

        * {
            font-family: Arial;
            background-color: rgb(25, 168, 187);

        }

        .home {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1> Account created successfully </h1>
            <div class="home">
            <meta id="baseurl" http-equiv="refresh" content="2; URL=<?php echo $baseE; ?>purchasePage.php" />
    
           <!-- <a href="purchasePage.php"><button>Main Menu</button></a>-->
            </div>
    </center>


</body>

<?php else:?>

    <?php

    $cur_user = $row["ID"];
    //$conn = dbConnect();
    $or = getOrgFromCode($accessCode);
    $orgID = $or["ID"];

    //cuuruser add past infrotmation
    $numberList = getMembers($orgID)['member'];
    if (!empty($numberList)){
        $cur_user = $numberList.",".$cur_user;
    }
    //$str_arr = explode(",", $numberList); 

    $dql = "UPDATE Organization SET member='".$cur_user."' WHERE ID =".$orgID; 
    //$dql = "SELECT ID FROM posts WHERE published = 0 and user_id = ".$userID;
  
    $result = $conn->query($dql);
  
    if ($result->num_rows > 0) {
    // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
       $users[] = $row;
      }
      
    }else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql9 = "UPDATE users SET admini='2' WHERE ID =".$cur_user; 
    //Check for succesful record creation
    if($conn->query($sql9) == TRUE){

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

    $oneUser = getOneUser($user_ID);
    $ran = $oneUser[0]["access"];
    echo $ran;
    $orgID = getOrgID($ran)["ID"];
    //print_r($orgID);


    $sql5 = "UPDATE users SET Organization='".$orgID."' WHERE ID =".$user_ID; 

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
        //echo "Error: " . $sql . "<br>" . $conn->error;
    }


    ?>

    <head>
    <style>
        form {
            background-color: silver;
            width: 500px;
            margin-left: 100px;
            margin-top: 200px;
            align-items: center;
            padding: 20px;
        }

        * {
            font-family: Arial;
            background-color: rgb(25, 168, 187);

        }

        .home {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <center>
        <h1> Account created successfully </h1>
            <div class="home">
            <meta id="baseurl" http-equiv="refresh" content="2; URL=<?php echo $baseE; ?>courses.php" />
    
            <!--<a href="courses.php"><button>Main Menu</button></a>-->
            </div>
    </center>


</body>
    


<?php endif ?>
</html>



