<!--
Project Name: Milestone 3 Blog Post
Version 3
index.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 



include_once('myfuncs.php');
if(empty(getUserId()) ): ?>

<meta id="baseurl" http-equiv="refresh" content="<?php echo $baseU; ?>login.php" />


<?php else: ?>
    <?php

    require_once('utility.php');
    $user = getUserId();
     
    $adminCheck = checkAdmin($user);
    if($adminCheck[0]['admini'] == 11): ?>

<head>
<title>Dream Tech Training</title>   
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">  
    <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function getConfirmation(user_id) {
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                var url = "deleteUser.php?ID="+user_id
                  window.location.href = url;
                  return true;
               } else {
                  
                  return false;
                  
               }
            }
         
      </script>  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/users.css" />


</head>

<body>
    <div class="topnav">
        <a class="active" href="newpost.php">
            <i class="fas fa-plus fa-lg"></i> New
        </a>
        <a class="active" href="courses.php">
        <i class="fas fa-home fa-lg"></i>
        </a>
          

        <div class="btnright">

            <div class="dropdown">
                <button class="dropbtn">
                <i class="fas fa-cogs fa-lg"></i>
                </button>
                <div class="dropdown-content">
                <a href="drafts.php">Drafts</a>
                <?php 
                    if($adminCheck[0]['admini'] == 11){
                        echo '<a href="settings.php">Edit</a>';
                    }elseif ($adminCheck[0]['admini'] == 3 or $adminCheck[0]['admini'] == 4) {
                        echo '<a href="editModules.php">All Modules</a>';                    
                    }
                ?>
                <a href="Profile.php">Account</a>                
                <a href="Users.php">Users</a>
                </div>
            </div> 
            <a class="active" href="signOut.php">
            <i class="fas fa-sign-out-alt"></i>
            </a> 
        </div>

        <div class="navTitle">
            <h3> Dream Tech Training </h3>
        </div>
        
    </div>

    <div class="page">
       
        <?php
        require_once('utility.php');
        $user = getAllUsers(); 
        $users = array_reverse($user);
        $user = getUserId();
     
        $adminCheck = checkAdmin($user);
        if(!is_null($adminCheck[0]['admini'])){$userPosts=$posts;}else{$userPosts = getAllUserPosts($user);
        $userPosts = array_reverse($userPosts);}
        
        
        echo "<div class='homepage' > <h1>Users</h1></div>";
        //print_r($users);


             for($x=0;$x < count($users);$x++){
                $userPosts = $users;
                
                $full_name = $userPosts[$x]['first_name'].' '.$userPosts[$x]['last_name'];

                echo ' <div class="row"> <div class="leftcolumn"> <div class="posts">';
                
                echo ' <div class="title"> <h1>' . $full_name . '</h1> </div>' ;

                echo "<div class='editButton'> <a href='userEdit.php?ID=".$userPosts[$x]['ID']."'><button ><b>Edit </b></button></a>";
                echo "<div class='deleteButton'> <button id='delbutt' onclick='getConfirmation(".$userPosts[$x]['ID'].")'><b>Delete </b></button>";
                echo '</div></div> </div> </div> ' ;



            };
        
            
        ?>
        

    </div>
      
</body>
</html>
<?php elseif($adminCheck[0]['admini'] == 3 || $adminCheck[0]['admini'] == 4): ?>

<html>
<head>
<title>Dream Tech Training</title>   
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">  
    <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function getConfirmation(user_id) {
               var retVal = confirm("Do you want to continue ?");
               if( retVal == true ) {
                var url = "deleteUserErr.php?ID="+user_id
                  window.location.href = url;
                  return true;
               } else {
                  
                  return false;
                  
               }
            }
         
      </script>  
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/users.css" />


</head>

<body>
    <div class="topnav">
        <a class="active" href="newpost.php">
            <i class="fas fa-plus fa-lg"></i> New
        </a>
        <a class="active" href="courses.php">
        <i class="fas fa-home fa-lg"></i>
        </a>
          

        <div class="btnright">

            <div class="dropdown">
                <button class="dropbtn">
                <i class="fas fa-cogs fa-lg"></i>
                </button>
                <div class="dropdown-content">
                <a href="drafts.php">Drafts</a>
                <?php 
                    if($adminCheck[0]['admini'] == 11){
                        echo '<a href="settings.php">Edit</a>';
                    }elseif ($adminCheck[0]['admini'] == 3 or $adminCheck[0]['admini'] == 4) {
                        echo '<a href="editModules.php">All Modules</a>';                    
                    }
                ?>
                <a href="Profile.php">Account</a>                
                <a href="Users.php">Users</a>
                </div>
            </div> 
            <a class="active" href="signOut.php">
            <i class="fas fa-sign-out-alt"></i>
            </a> 
        </div>

        <div class="navTitle">
            <h3> Dream Tech Training </h3>
        </div>
        
    </div>

    <div class="page">
       
        <?php
        require_once('utility.php');
        //$user = getAllUsers(); 
        $me = getOneUser($user);
        $iden = $me[0]["ORGANIZATION"];

        $or = getOrgByID($iden);
        $orgID = $or["ID"];
        $numberList = getMembers($orgID)['member'];
        $str_arr = explode(",", $numberList); 
        $vin = [];
        //print_r($or);

        //echo $me;
        foreach ($str_arr as $key => $val) {
            $user = getOneUser($val);
            array_push($vin, $user);
        }
        //print_r($vin);

        $user = $vin;
        $users = array_reverse($user);
        $user = getUserId();
     
        $adminCheck = checkAdmin($user);
        if(!is_null($adminCheck[0]['admini'])){$userPosts=$posts;}else{$userPosts = getAllUserPosts($user);
        $userPosts = array_reverse($userPosts);}
        
        
        echo "<div class='homepage' > <h1>Users</h1></div>";
        //print_r($users);


             for($x=0;$x < count($users);$x++){
                $userPosts = $users;
                //print_r($userPosts[0][0]["FIRST_NAME"]);
                
                $full_name = $userPosts[$x][0]['FIRST_NAME'].' '.$userPosts[$x][0]['LAST_NAME'];

                echo ' <div class="row"> <div class="leftcolumn"> <div class="posts">';
                
                echo ' <div class="title"> <h1>' . $full_name . '</h1> </div>' ;

                echo "<div class='deleteButton'> <button id='delbutt' onclick='getConfirmation(".$userPosts[$x][0]['ID'].")'><b>Delete </b></button>";
                echo '</div></div> </div> </div> ' ;



            };
        
            
        ?>
        

    </div>
      
</body>
<?php endif; ?>
<?php endif; ?>