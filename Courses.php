<!--
Project Name: Milestone 3 Blog Post
Version 3
index.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
require_once('utility.php');
include_once('myfuncs.php');
$user_ID = getUserId();
$adminCheck = checkAdmin($user_ID)[0]['admini'];



if(empty($user_ID) ): ?>
<html style="font-size: 16px;">
<head >
      

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

    <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
    <title>Dream Tech Training</title>
    <script src="index.js"></script>
    
     <link rel="stylesheet" href="./css/index1.css"> 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    

</head>

<body >

    <div class="topnav">
        <a class="active" href="login.html">Login</a>
        <a class="active" href="register.html">Register</a>       
        
    </div>
       
    
</body>
</html>

<?php else: ?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>


    <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
    <title>Dream Tech Training</title>

    <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="Carosol.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Homepage">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">

    
    

</head>

<body class="u-body u-xl-mode">

<header class="u-black u-clearfix u-header u-sticky u-sticky-01e9 u-header" id="sec-3e44"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="courses.php" class="u-image u-logo u-image-1" data-image-width="593" data-image-height="121">
          <img src="images/cloud1-modified.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
            
            <?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="newPost.php" style="padding: 10px 20px;">Create</a>
    </li>';
  }
?>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="/" style="padding: 10px 20px;">Homepage</a>
    </li>
              
            
<?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="settings.php" style="padding: 10px 20px;">Edit</a>
    </li>';
  }elseif($adminCheck == 3 || $adminCheck == 4){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="editModules.php" style="padding: 10px 20px;">All Modules</a>
    </li>';
  }
?>
<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"  style="padding: 10px 20px;">Account</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Profile.php">Personal Information</a>
</li>

<?php 
  if($adminCheck == 11 || $adminCheck == 3 || $adminCheck == 4){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="users.php">Users</a>
    </li>';
  }
?>



<?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="drafts.php">Drafts</a>
    </li>';
  };
?>

<li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="signOut.php">Sign out</a>
</li></ul>
</div>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-3">
                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/" style="padding: 10px 20px;">Homepage</a>
                    </li>
                <?php 
                  if($adminCheck == 11){
                    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create.html" style="padding: 10px 20px;">Create</a>
                    </li>';
                  }
                ?>  
                
<?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="settings.php" style="padding: 10px 20px;">Edit</a>
    </li>';
  }elseif($adminCheck == 3 || $adminCheck == 4){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="editModules.php" style="padding: 10px 20px;">All Modules</a>
    </li>';
  }
?>

<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Account.html" style="padding: 10px 20px;">Account</a><div class="u-nav-popup"><ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="https:///google.com">Personal Information</a>
</li>

<?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="users.php">Users</a>
    </li>';
  };
?>

<?php
  if($adminCheck == 11){
    echo '<li class="u-nav-item"><a class="u-button-style u-nav-link" href="https:///google.com">Drafts</a>
    </li>';
  };
?>


<li class="u-nav-item"><a class="u-button-style u-nav-link" href="https:///google.com">Sign out</a>
</li></ul>
</div>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 

      
      <section class="u-clearfix u-section-1" id="sec-c5c2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-1">Dashboard&nbsp;</h1>
        <div class="u-form u-form-1">
          <form method="POST" id="my_form" name="my_form" class="u-clearfix u-form-horizontal u-form-spacing-50 u-inner-form" style="padding: 24px;" source="custom">
            <div class="u-form-group u-label-top u-form-group-1">
              <label for="text-8a77" class="u-label">Search </label>
              <input type="text" placeholder="" id="text-8a77" name="text" class="u-border-2 u-border-grey-50 u-custom-border u-input u-input-rectangle u-radius-9">
            </div>

            <div class="u-form-group u-form-submit u-label-top">
              <input type="submit" value="submit" name="btnsubmit" id="btnsubmit" class="u-form-control-hidden">
              <input type="submit" value="submit" name="redoSubmit" id="redoSubmit" class="hiddenSubmit">

              <a href="#" onclick="myFunction();" class="u-border-3 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-none u-radius-9 u-text-active-black u-text-black u-text-hover-black u-btn-1">Submit</a>
            </div>

              <a href="#" onclick="redoFunc();">
                <i class="fas fa-redo"></i>
              </a>

            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <div id="carousel-bd35" data-interval="1000" data-u-ride="false" class="u-carousel u-carousel-duration-500 u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1" data-pause="false">
          <ol class="u-absolute-hcenter u-carousel-indicators u-hidden u-carousel-indicators-1">
            <li data-u-target="#carousel-bd35" class="u-active u-grey-30" data-u-slide-to="0"></li>
            <li data-u-target="#carousel-bd35" class="u-grey-30" data-u-slide-to="1"></li>
          </ol>



       
        <?php


        $on = [];
        
        $new_arr =[];
        if($adminCheck == 3){
          //$post = getAllSmallPublishedPosts();
          $idd = getOneUser($user_ID)[0]["access"];
          $memb = getPostsWithAccess($idd)["posts"];
          $memb_arr = explode(",", $memb); 
  
          foreach ($memb_arr as $key => $vas) {
            $pos = getOnePost($vas)[0];
            array_push($on, $pos);
          }
          
          $post = $on;
          //print_r($idd);


        }elseif($adminCheck == 4) {
          //$post = getAllLargePublishedPosts();

          $idd = getOneUser($user_ID)[0]["access"];
          $memb = getPostsWithAccess($idd)["posts"];
          $memb_arr = explode(",", $memb); 
  
          foreach ($memb_arr as $key => $vas) {
            $pos = getOnePost($vas)[0];
            array_push($on, $pos);
          }
          
          $post = $on;


        }elseif($adminCheck == 11){
          $post = getAllPublishedPosts();

          
        }elseif($adminCheck == 2){
          $idd = getOneUser($user_ID)[0]["access"];
          $memb = getPostsWithAccess($idd)["posts"];
          $memb_arr = explode(",", $memb); 
  
          foreach ($memb_arr as $key => $vas) {
            $pos = getOnePost($vas)[0];
            array_push($on, $pos);
          }
          
          $post = $on;

          
        }

        $posts = array_reverse($post);
        $userNum = getUserId();
        

        if(isset($_POST["btnsubmit"])){
            $arrOfPosts = searchTitle($_POST['text']);

            foreach($arrOfPosts as $numPost){
                $finalAllPosts[] = getAllPostsByID($numPost)[0];    
            }
            $finalAllPosts = array_reverse($finalAllPosts);

            ?>
            <div class="u-carousel-inner" role="listbox">
              <?php
              $d = 0;
              for($se=0;$se <= count($finalAllPosts);$se+=10):
                
                  $d = $d+= 1;
                  //if($d == 1){
                  //  echo '<div class="u-active u-carousel-item u-container-style u-slide ">';
                  //}else{
                  //  echo '<div class="u-carousel-item u-container-style u-slide ">';
  
                  //}
                  if($d >= 2):
                ?> 
                  
  
                      <div class="u-carousel-item u-container-style u-slide ">
                        <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                          <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                            <div class="u-layout">
                              <div class="u-layout-col">
                    <?php else:?>
                    <div class="u-active u-carousel-item u-container-style u-slide ">
                        <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                          <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                            <div class="u-layout">
                              <div class="u-layout-col">
                    <?php endif;?>
       
                            <?php
                              for($od=0;$od < 8;$od+=3):
                                if($d >1){
                                  $l = $d -1;
                                  $product = $l * 9;
                                  $od = $od + $product;
                                }
                                $userPosts = $finalAllPosts[$od];                
                                $tim = strtotime($finalAllPosts[$od]['created_at']);
                                $dat = date('l jS \of F Y  ', $tim);
                                $postID = $finalAllPosts[$od]['ID'];
                              ?>
                              
                                <div class="u-size-20">
                                  <div class="u-layout-row">
  
  
          
                                  <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                      <div class="flip-card-inner">
  
                                        <div class="u-background-effect">
                                    
                                          <?php 
                                          $arrayofFiles = $finalAllPosts[$od]['files'];
                                          $files_arr =  explode (',' , $arrayofFiles);
                                          ?>
  
                                    
                                          <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('media/<?php echo $files_arr[0]?>');" ></div> 
                                        </div>
                                        <div class="u-container-layout "></div>
  
                                        <?php if(!empty($finalAllPosts[$od])): ?>

                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>
  
                                              <h1 class="title"><?php echo $finalAllPosts[$od]['Title'] ?></h1>
                                              <?php if(strlen($finalAllPosts[$od]['body']) > 550){echo '<p class="body">' . substr($finalAllPosts[$od]['body'],0,180).'...' . '<p>';}
                                                        else echo '<p class="body">' . $finalAllPosts[$od]['body'] . '<p>';?>
                                            </a>
                                        <?php endif;?>

                                          </div>
  
                                      </div>
  
                                    </div>
                                    
  
  
  
          
                                    <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                      <div class="flip-card-inner">
  
                                        <div class="u-background-effect">
                                    
                                          <?php 
                                          $arrayofFiles = $finalAllPosts[$od+1]['files'];
                                          $files_arr =  explode (',' , $arrayofFiles);
                                          $postID = $finalAllPosts[$od+1]['ID'];
                                          ?>
  
                                    
                                          <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('media/<?php echo $files_arr[0]?>');" ></div> 
                                        </div>
                                        <div class="u-container-layout "></div>
  
                                        <?php if(!empty($finalAllPosts[$od+1])): ?>

                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>
  
                                              <h1 class="title"><?php echo $finalAllPosts[$od+1]['Title'] ?></h1>
                                              <?php if(strlen($finalAllPosts[$od+1]['body']) > 550){echo '<p class="body">' . substr($finalAllPosts[$od+1]['body'],0,180).'...' . '<p>';}
                                                        else echo '<p class="body">' . $finalAllPosts[$od+1]['body'] . '<p>';?>
                                            </a>
  
                                          </div>
                                        <?php endif;?>

  
                                      </div>
  
                                    </div>
                                    
  
                                    
                                    <div class="u-container-style flip-card u-layout-cell u-size-20 u-layout-cell-3" >
                                      <div class="flip-card-inner">
  
                                        <div class="u-background-effect">
                                    
                                          <?php 
                                          $arrayofFiles = $finalAllPosts[$od+2]['files'];
                                          $files_arr =  explode (',' , $arrayofFiles);
                                          $postID = $finalAllPosts[$od+2]['ID'];
  
                                          ?>
  
                                    
                                          <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('media/<?php echo $files_arr[0]?>');" ></div> 
                                        </div>
                                        
                                        <div class="u-container-layout "></div>
  
                                        <?php if(!empty($finalAllPosts[$od+2])): ?>

                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>
  
                                              <h1 class="title" ><?php echo $finalAllPosts[$od+2]['Title'] ?></h1>
                                              <?php if(strlen($finalAllPosts[$od+2]['body']) > 550){echo '<p class="body">' . substr($finalAllPosts[$od+2]['body'],0,180).'...' . '<p>';}
                                                        else echo '<p class="body">' . $finalAllPosts[$od+2]['body'] . '<p>';?>
                                            </a>
  
                                          </div>
                                        <?php endif;?>

  
                                      </div>
  
                                    </div>
          
  
  
  
                                    
                                  </div>
                                </div>
                              <?php  
                              endfor;
                              ?>
          
                              
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php endfor;?>
            </div>
  
  
              
            <?php
            
        }elseif((isset($_POST["redoSubmit"]))) {
          ?>
          <div class="u-carousel-inner" role="listbox">
            <?php
            $d = 0;
            for($se=0;$se <= count($posts);$se+=10):
              
                $d = $d+= 1;
                //if($d == 1){
                //  echo '<div class="u-active u-carousel-item u-container-style u-slide ">';
                //}else{
                //  echo '<div class="u-carousel-item u-container-style u-slide ">';

                //}
                if($d >= 2):
              ?> 
                

                    <div class="u-carousel-item u-container-style u-slide ">
                      <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                          <div class="u-layout">
                            <div class="u-layout-col">
                  <?php else:?>
                  <div class="u-active u-carousel-item u-container-style u-slide ">
                      <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                          <div class="u-layout">
                            <div class="u-layout-col">
                  <?php endif;?>
     
                          <?php
                            for($od=0;$od < 8;$od+=3):
                              if($d >1){
                                $l = $d -1;
                                $product = $l * 9;
                                $od = $od + $product;
                              }
                              $userPosts = $posts[$od];                
                              $tim = strtotime($posts[$od]['created_at']);
                              $dat = date('l jS \of F Y  ', $tim);
                              $postID = $posts[$od]['ID'];
                            ?>
                            
                              <div class="u-size-20">
                                <div class="u-layout-row">


        
                                <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                  <?php if(!empty($posts[$od])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; } ?>');" ></div> 
                                      </div>
                                      <div class="u-container-layout "></div>


                                        <div class="flip-card-back">
                                          <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                          <h1 class="title" ><?php if(strlen($posts[$od]['Title']) > 18){echo '<p class="title">' . substr($posts[$od]['Title'],0,18).'...' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od]['body']) > 85){echo '<p class="body">' . substr($posts[$od]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od]['body'] . '<p>';?>
                                            </a>

                                        </div>


                                    </div>
                                  <?php endif;?>


                                </div>
                                  



        
                                  <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                  <?php if(!empty($posts[$od+1])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od+1]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        $postID = $posts[$od+1]['ID'];
                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; }?>');" ></div> 
                                      </div>
                                      <div class="u-container-layout "></div>


                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                              <h1 class="title" ><?php if(strlen($posts[$od+1]['Title']) > 18){echo '<p class="title">' . substr($posts[$od+1]['Title'],0,18).'...' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od+1]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od+1]['body']) > 85){echo '<p class="body">' . substr($posts[$od+1]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od+1]['body'] . '<p>';?>
                                            </a>

                                          </div>

                                    </div>
                                    <?php endif;?>

                                  </div>
                                  

                                  
                                  <div class="u-container-style flip-card u-layout-cell u-size-20 u-layout-cell-3" >
                                  <?php if(!empty($posts[$od+2])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od+2]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        $postID = $posts[$od+2]['ID'];

                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; } ?>');" ></div> 
                                      </div>
                                      
                                      <div class="u-container-layout "></div>

                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                            <h1 class="title" ><?php if(strlen($posts[$od+2]['Title']) > 18){echo '<p class="title">' . substr($posts[$od+2]['Title'],0,18).'..' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od+2]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od+2]['body']) > 85){echo '<p class="body">' . substr($posts[$od+2]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od+2]['body'] . '<p>';?>
                                            </a>

                                          </div>
                                    </div>
                                    <?php endif;?>

                                  </div>
        



                                  
                                </div>
                              </div>
                            <?php  
                            endfor;
                            ?>
        
                            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endfor;?>
                    
          </div>

            
          <?php
        }else{
          ?>
          <div class="u-carousel-inner" role="listbox">
            <?php
            $d = 0;
            for($se=0;$se <= count($posts);$se+=10):
              
                $d = $d+= 1;
                //if($d == 1){
                //  echo '<div class="u-active u-carousel-item u-container-style u-slide ">';
                //}else{
                //  echo '<div class="u-carousel-item u-container-style u-slide ">';

                //}
                if($d >= 2):
              ?> 
                

                    <div class="u-carousel-item u-container-style u-slide ">
                      <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                          <div class="u-layout">
                            <div class="u-layout-col">
                  <?php else:?>
                  <div class="u-active u-carousel-item u-container-style u-slide ">
                      <div class="u-container-layout u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-1">
                        <div class="u-align-center u-clearfix u-gutter-18 u-layout-wrap u-layout-wrap-1">
                          <div class="u-layout">
                            <div class="u-layout-col">
                  <?php endif;?>
     
                          <?php
                            for($od=0;$od < 8;$od+=3):
                              if($d >1){
                                $l = $d -1;
                                $product = $l * 9;
                                $od = $od + $product;
                              }
                              $userPosts = $posts[$od];                
                              $tim = strtotime($posts[$od]['created_at']);
                              $dat = date('l jS \of F Y  ', $tim);
                              $postID = $posts[$od]['ID'];
                            ?>
                            
                              <div class="u-size-20">
                                <div class="u-layout-row">


        
                                <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                  <?php if(!empty($posts[$od])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; } ?>');" ></div> 
                                      </div>
                                      <div class="u-container-layout "></div>


                                        <div class="flip-card-back">
                                          <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                          <h1 class="title" ><?php if(strlen($posts[$od]['Title']) > 18){echo '<p class="title">' . substr($posts[$od]['Title'],0,18).'...' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od]['body']) > 85){echo '<p class="body">' . substr($posts[$od]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od]['body'] . '<p>';?>
                                            </a>

                                        </div>


                                    </div>
                                  <?php endif;?>


                                </div>
                                  



        
                                  <div class="u-container-style flip-card u-layout-cell u-size-20 " >
                                  <?php if(!empty($posts[$od+1])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od+1]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        $postID = $posts[$od+1]['ID'];
                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; }?>');" ></div> 
                                      </div>
                                      <div class="u-container-layout "></div>


                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                              <h1 class="title" ><?php if(strlen($posts[$od+1]['Title']) > 18){echo '<p class="title">' . substr($posts[$od+1]['Title'],0,18).'...' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od+1]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od+1]['body']) > 85){echo '<p class="body">' . substr($posts[$od+1]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od+1]['body'] . '<p>';?>
                                            </a>

                                          </div>

                                    </div>
                                    <?php endif;?>

                                  </div>
                                  

                                  
                                  <div class="u-container-style flip-card u-layout-cell u-size-20 u-layout-cell-3" >
                                  <?php if(!empty($posts[$od+2])): ?>

                                    <div class="flip-card-inner">

                                      <div class="u-background-effect">
                                  
                                        <?php 
                                        $arrayofFiles = $posts[$od+2]['files'];
                                        $files_arr =  explode (',' , $arrayofFiles);
                                        $postID = $posts[$od+2]['ID'];

                                        ?>

                                  
                                        <div class="u-background-effect-image u-expanded u-image front" style="background-image: url('<?php if(!empty($files_arr[0])){ echo "media/".$files_arr[0]; }else{echo "images/no-image.png"; } ?>');" ></div> 
                                      </div>
                                      
                                      <div class="u-container-layout "></div>

                                          <div class="flip-card-back">
                                            <?php  echo '<a class="fill-div" href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> '?>

                                            <h1 class="title" ><?php if(strlen($posts[$od+2]['Title']) > 18){echo '<p class="title">' . substr($posts[$od+2]['Title'],0,18).'..' . '<p>';}
                                                        else echo '<p class="title">' . $posts[$od+2]['Title'] . '<p>';?></h1>
                                              <?php if(strlen($posts[$od+2]['body']) > 85){echo '<p class="body">' . substr($posts[$od+2]['body'],0,85).'...' . '<p>';}
                                                        else echo '<p class="body">' . $posts[$od+2]['body'] . '<p>';?>
                                            </a>

                                          </div>
                                    </div>
                                    <?php endif;?>

                                  </div>
        



                                  
                                </div>
                              </div>
                            <?php  
                            endfor;
                            ?>
        
                            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endfor;?>
                    
          </div>







            
          <?php
        }
        ?>
          <?php if (count($posts) > 9): ?>
          <a class="u-carousel-control u-carousel-control-prev u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-1" href="#carousel-bd35" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
            </span>
   
              <span class="sr-only">+Previous</span>
          </a>
          <?php endif;?>

          <?php if (count($posts) > 9): ?>

          <a class="u-carousel-control u-carousel-control-next u-grey-60 u-icon-circle u-spacing-9 u-carousel-control-2" href="#carousel-bd35" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
            </span>
              <span class="sr-only">+Next</span>
          </a>
          <?php endif;?>

        </div>
        <p class="u-hidden-lg u-hidden-md u-hidden-xl u-large-text u-text u-text-variant u-text-2">Search</p>
      </div>
      
    </section>

    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-ba9a"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ed6d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ed6d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b542"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b542"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cd91"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-cd91"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5f67"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5f67"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XS">
          <div class="menu-collapse">
            <a class="u-button-style u-nav-link" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a7f0"></use></svg>
              <svg class="u-svg-content" version="1.1" id="svg-a7f0" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/about.html" style="padding: 10px 42px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/contact.html" style="padding: 10px 45px 10px 42px;">Contact Us</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/about.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="/contact.html">Contact Us</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></footer>

    <script>
    function myFunction() {
      document.getElementById("btnsubmit").click();
    }
</script>

<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
    function redoFunc() {
      document.getElementById("redoSubmit").click();
    }
</script>

</body>
</html>
<?php endif; ?>
