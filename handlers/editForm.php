<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

// upload media to server
require_once('../myfuncs.php');


$conn = dbConnect();

// Check connection
if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
    //echo "Connection to SQL server failed" . "<br>";
}else{
  //echo "Connected successfully" . "<br>";
}

if (isset($_POST["post"])) {

    //Variables from form
    $Title = $_POST['title'];
    $body = $_POST['textArea'];
    $vari = getUserId();
    $published = $_POST['published'];
    $arrayofFiles = $_POST['hideArray'];
    $quiz = $_POST['quiz'];
    $frames = $_POST['frames'];
    $constLastOrder = $_POST['hide2'];
    $constLastOrder = explode(',', $constLastOrder);
    $postID = $_POST['postNumber'];
    $existsError == False;
    $published1 = $_POST['published1'];
    $published2 = $_POST['published2'];
    $published3 = $_POST['published3'];


    if(empty($published)){
        $published = 0;
    }else{
        $published = 1;
    }

    if(empty($published1)){
        $published1 = 0;
    }else{
        $published1 = 1;
    }

    if(empty($published2)){
        $published2 = 0;
    }else{
        $published2 = 1;
    }

    if(empty($published3)){
        $published3 = 0;
    }else{
        $published3 = 1;
    }

    if($published1 == 1){
        $size = 3;
    }elseif($published2 == 1){
        $size = 4;
    }else{
        $size = 5;
    }


   

    $target_dir = "../media/"; //path can be change
    $old = "../tempMedia/";
    $countfiles = count($_FILES['fileToUpload']['name']);
    $filesExisted = [];
    $invalidFiletypes = [];
    $existsError = false;

    $sort_arr = explode (",", $arrayofFiles);
    


    

    if(empty($Title)){
        echo "A title is a required field and cannot be blank.". "<br>";
      }elseif(empty($body)){
        echo "A body is a required field and cannot be blank.". "<br>";
      }elseif(strpos($body, '/') || strpos($body, '%') || strpos($body, '$')){
        echo "Unable to make post. There is a special characheter in the body". "<br>";
      }else{
        foreach($sort_arr as $sa){
            if(!in_array($sa, $constLastOrder)){
                if(file_exists($target_dir.$sa) and !empty($sa)){
                    $existsError = true;
                    echo "This file already exists";

                }
            
            }

        }

        foreach($sort_arr as $sa){
            if(!in_array($sa, $constLastOrder)){
                if($existsError == False){
                    $oldN = $old.$sa;
                    $newN = $target_dir.$sa;
                    rename($oldN, $newN); 
                }
            }

        }
    
        //Delete the unused files in temp
        // List of name of files inside specified folder
        $filesL = glob($old.'/*'); 
        
        // Deleting all the files in the list
        foreach($filesL as $filea) {
        
            if(is_file($filea)) 
                //echo $filea;            
                // Delete the given file
                unlink($filea); 
        }
        
    if($existsError == False){
        $sql = "UPDATE posts SET user_id='".$vari."', Title='".$Title."', frames='".$frames."', body='".$body."', size='".$size."',  published='".$published."', files='".$arrayofFiles."', image_name='".$quiz."' WHERE ID =".$postID; 
      }else{
        echo "One of the files that you have uploaded has the same name as another file on the server. Please change one of you file names.";
    }
        
      }


      //Check for succesful record creation
    if($conn->query($sql) == TRUE){
        //echo "New record created succesfully". "<br>";
        header("Location: " . $baseE . "updateSuccess.html");
    }else{
        //echo "<script>";
          //echo "alert('Error could not make post')";
          //echo"</script>";
          //echo "Error: " . $sql . "<br>" . $conn->error;
      }

    $conn->close();

    //If error
    if ($filesExisted):?>
        <html>
            <head>
                <link rel="stylesheet" href="./css/upload.css"> 
            </head>

            <body>
                <div class="filesExistedClass"> <?php   foreach ($filesExisted as $di) { echo $di . " already exists". "</br>";   } ?>       </div>
            </body>
        </html>

    <?php elseif ($invalidFiletypes): ?>

        <html>
            <head>
            <link rel="stylesheet" href="./css/upload.css"> 
            </head>

            <body>
            <div class="invalidFileTypesClass"> <?php   foreach ($invalidFiletypes as $inv) { echo $inv . " is not an allowed file type". "</br>";   } ?>       </div>
            </body>
        </html>

    <?php endif; ?>
    <?php
        //echo 'Error'. "</br>";
        //foreach ($filesExisted as $di) {
        //echo $di . " already exists". "</br>";
        //}



}

?>