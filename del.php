<?php

require_once('utility.php');

$conn = dbConnect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    $path = 'media/';

    $file_name = $_POST['text'];
    $order = $_POST['order'];
    $post = $_POST['postN'];
    




    $file = $path . $file_name;

    if (empty($errors)) {
        unlink($file);
        //echo $order;
        //echo $file_name;
        $arr = searchFiles($post);
        $filesOrder =  $arr[0]['files'];
        $filesOrder_arr = explode(",", $filesOrder);
        echo "This is runinng";        

        print_r($filesOrder_arr);
        
        if (($key = array_search($file_name, $filesOrder_arr)) !== false) {
            unset($filesOrder_arr[$key]);
        }

        $tex = join(',', $filesOrder_arr);
        //echo $tex;

        $sql = "UPDATE posts SET files='".$tex."' WHERE ID = ".$post;
    }

    //Check for succesful record creation
    if($conn->query($sql) == TRUE){
        //echo "New record created succesfully". "<br>";
        //header("Location: " . $baseE . "updateSuccess.html");
    }else{
        //echo "<script>";
            //echo "alert('Error could not make post')";
            //echo"</script>";
            //echo "Error: " . $sql . "<br>" . $conn->error;
        }

    $conn->close();
    

    //if ($errors) print_r($errors);
    
}