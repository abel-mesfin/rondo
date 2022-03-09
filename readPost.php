<?php
require_once('utility.php');

$conn = dbConnect();


?>

<html>


<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free JavaScript library for star rating. Star Rating system">
    <meta name="keywords" content="HTML, CSS, JavaScript, library, free">
    <meta name="author" content="Djordje Vujicic">

    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="476" />
    <meta property="og:image:height" content="286" />
    <meta property="og:image:alt" content="Star rating" />
    <meta property="og:url" content="https://starratingjs.netlify.app">

    <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
    <title>Dream Tech Training</title>
    <script src="index.js"></script>

    <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./css/readPost.css" />
    <!--
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->
     

</head>

<body>
    <div class="topnav">
        <a class="active" href="newpost.php">
            <i class="fas fa-plus fa-lg"></i> New
        </a>
        <a class="active" href="index.php">
        <i class="fas fa-home fa-lg"></i>
        </a>
          

        <div class="btnright">

            <div class="dropdown">
                <button class="dropbtn">
                    <i class="fas fa-cogs fa-lg"></i>
                </button>
                <div class="dropdown-content">
                <a href="drafts.php">Drafts</a>
                <a href="Profile.php">Account</a>
                <a href="settings.php">Update</a>
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
            $postIDG = base64_decode($_GET['ID']);
            $post = getOnePost($postIDG);
            $name = getName($post[0]['user_id']);
            $full_name = $name['FIRST_NAME'].' '.$name['LAST_NAME'];
            $tim = strtotime($post[0]['created_at']);
            $dat = date('l jS \of F Y h:i:s A', $tim);
            $postComment = searchComments($postIDG);
            $currentUserG = base64_decode($_GET['user']);
            $rating = getRate($postIDG,$currentUserG)['rate'];
            $filesOrder = $post[0]['files'];
            $quiz = $post[0]['image_name'];
            $frames = $post[0]['frames'];
            $emptyQ = false;
            $sortedFiles = explode (",", $filesOrder);

            $frames1 = htmlspecialchars($frames, ENT_QUOTES);

            $quiz1 = htmlspecialchars($quiz, ENT_QUOTES);

            $frames_arr = explode(",", $frames);



            //echo gettype($sortedFiles);

            if (empty($frames)){
                $framesQ = true;
            }else{
                foreach($frames_arr as $fa){
                    array_push($sortedFiles, $fa);
                    $filesOrder = $filesOrder.','.$fa;
                }

            }

            if (empty($quiz)){
                $emptyQ = true;
            }else{
                array_push($sortedFiles, $quiz1);
                $filesOrder = $filesOrder.','.$quiz1;
                //print_r($sortedFiles);
            }

            echo ' <div class="row"> <div class="leftcolumn"> ';

            //Title
            echo '<div class="title"> <h1>'.$post[0]['Title'].'</h1> </div>';
            
            //Media
            echo '<div class="w3-content" style="max-width:800px">';
            
            $sortedFiles = array_splice($sortedFiles, 1);
            $multiple = false;

            echo '<div class="dem"> ';
            echo '<a href="#" id="leftDots" onclick="slideLeft(); plusDivs(-1);" > ...</a>';

            foreach($sortedFiles as $key2 => $sup){
                $key2 = $key2 +1;
                if($key2 < 7){
                    echo ' <button class="w3-button demo" id="currentButton'.$key2.'" onclick="currentDiv('.$key2.')">'.$key2.'</button> ';
                }else{
                    $multiple = true;
                    echo ' <button class="w3-button demo" id="currentButton'.$key2.'" onclick="currentDiv('.$key2.')">'.$key2.'</button> ';

                    
                }
            }
            if ($multiple == true){
                echo '<a href="#" id="rightDots" onclick="slideRight(); plusDivs(1);" > ...</a>';
            }
            echo '</div>';


            foreach($sortedFiles as $ke => $sf){
                
                $full_path = "media/".$sf;
                $extension = substr(strrchr($full_path, '.'), 1);
                //echo $extension;
                
                if($extension == "jpg" or $extension == "png" or $extension == "jpeg" or $extension == "JPG" or $extension == "HEIC"){
                    echo  '<img class="mySlides" src="media/'.$sf.'" style="width:100%"></img>';
                    //echo $quiz;
                }elseif($extension == "mp4" or $extension == "MOV" or $extension == "mov") {

                    echo '<video class="mySlides" id="video" src="media/'.$sf.'" style="width:1180px; height:450px" type="video/mp4"  controls></video>';

                }elseif($extension == "pdf" or $extension == "PDF"){
                    echo '<embed class="mySlides" src="media/'.$sf.'" width="1180px" height="750px" > </embed> ';
                }
                else{
                    if(strpos($extension, "iframe")){
                        //echo $quiz;
                        echo '<iframe class="mySlides" id="interactApp62058b22c870e60018f787ee" width="1180px" height="450px" style="border:none;max-width:100%;" allowTransparency="true" frameborder="0" src="'.$quiz.'"></iframe>';
                    }elseif(strpos($extension, "links")){
                        
                        echo '<iframe class="mySlides" id="interactApp62058b22c870e60018f787ee" width="1180px" height="450px" style="border:none;max-width:100%;" allowTransparency="true" frameborder="0" src="'.$sf.'"></iframe>';

                    }else{
                        echo  '<img class="mySlides" src="media/'.$sf.'" style="width:100%"></img>';
                    }

                }


            }   

            echo '     <div class="nexPrev">
            <div class="w3-section">
                <button class="w3-button w3-light-grey" id="prevB"onclick="plusDivs(-1); slideLeft()">❮ Prev</button>
                <button class="w3-button w3-light-grey" id="nextB" onclick="plusDivs(1); slideRight()">Next ❯</button>
            </div>';      

            echo '</div>';


            //Description
            echo '<div class="bio"> <p>'.$post[0]['body'].'</p> </div>';
            
            



            
    
        ?>
        
        

    </div>
    
    <script>
    var slideIndex = 1;
    var vid = document.getElementById("video");

    var x = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
        if(i < 7){
            x[i].style.display = "inline";  
        }else{
            x[i].style.display = "none";  

        }
    }



    var dts = document.getElementById('leftDots');
    dts.style.display = "none"; 


  


    strt = 0;
    dl =1;

    function slideRight() {

        dl = dl + 1
        var slid = document.getElementsByClassName("myslides");
        var bts = document.getElementsByClassName("demo");
        var dts = document.getElementById('leftDots');

        if(slideIndex >= 7  && slideIndex == dl){
            bts[slideIndex].style.display = "inline";  
            if(slideIndex > 6 && slideIndex == dl){
                bts[strt].style.display = "none";
                //console.log("1st: " + bts[strt]);
                dts.style.display = "inline"; 

                strt = strt +1; 

            }
        }else if(slideIndex !== dl){
                dl = dl-1;
        }
        //console.log(bts[strt]);
    }

    var bts1 = document.getElementsByClassName("demo");

    function slideLeft() {
        //console.log(slideIndex);
        //console.log(bts1[strt]);
        bts1[slideIndex-1].style.display = "inline";  
        if(slideIndex==1){
            dts.style.display = "none"; 

        }
        if(bts1[slideIndex+6] ){
            bts1[slideIndex+6].style.display = "none";  
        }
        dl = slideIndex;
        strt = 0;

    }



    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);

    }



    function currentDiv(n) {
    showDivs(slideIndex = n);
    dl = slideIndex;
    console.log(dl);
  
    }

    function showDivs(n) {
    //n is the post number that wants to be changed to
    var i;
    //x is a list of the different images that are on the screen
    var x = document.getElementsByClassName("mySlides");
    //dot is the different buttons that allows to click through the images
    var dots = document.getElementsByClassName("demo");
    //if the post number is bigger than that amount of total posts, set it to the first post
    if (n >= x.length) {slideIndex = x.length; document.getElementById('nextB').style.visibility = 'hidden'; }else{document.getElementById('nextB').style.visibility = 'visible';}    
    //if the post number is below 1 than set the current picture to the last element in the list
    if (n < 2) {slideIndex = 1;}
    if (n == 1){document.getElementById('prevB').style.visibility = 'hidden';}else{document.getElementById('prevB').style.visibility = 'visible';}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" w3-red", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-red";
    }
    </script>


      
</body>
</html>
