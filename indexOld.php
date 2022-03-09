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
    <link rel="stylesheet" href="Homepage.css" media="screen">
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

<header class="u-black u-clearfix u-header u-sticky u-sticky-6472 u-header" id="sec-2f58"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-default u-image-1" src="images/cloud1-modified.png" alt="" data-image-width="593" data-image-height="121">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
                    <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; text-transform: uppercase; font-weight: 500;">
                      <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                        <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-67bd"></use></svg>
                        <svg class="u-svg-content" version="1.1" id="svg-67bd" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                      </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                      <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-nav-link u-text-active-white u-text-hover-white" href="Login.html" style="padding: 10px 20px;">Login</a>
</li><li class="u-nav-item"><a class="u-black u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-button-style u-nav-link u-text-active-white u-text-hover-white" href="Create.html" style="padding: 10px 20px;">Create</a>
</li></ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                      <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                          <div class="u-menu-close"></div>
                          <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html" style="padding: 10px 20px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create.html" style="padding: 10px 20px;">Create</a>
</li></ul>
                        </div>
                      </div>
                      <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="u-container-style u-group u-hidden-xl u-palette-1-base u-group-1">
          <div class="u-container-layout u-container-layout-3">
            <img class="u-absolute-hcenter-sm u-absolute-hcenter-xs u-expanded u-image u-image-default" src="images/cloud1-modified.png" alt="" data-image-width="593" data-image-height="121">
          </div>
        </div>
        <div class="u-container-style u-group u-group-2">
          <div class="u-container-layout">
            <nav class="u-hidden-xl u-menu u-menu-dropdown u-offcanvas u-menu-2">
              <div class="menu-collapse">
                <a class="u-button-style u-nav-link" href="#" style="padding: 7px 24px; font-size: calc(1em + 14px);">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4c45"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="svg-4c45" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-nav-container">
                <ul class="u-nav u-unstyled"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Registration.html">Registration</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Homepage.html">Homepage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create.html">Create</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Carosol.html">Carosol</a>
</li></ul>
              </div>
              <div class="u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Registration.html">Registration</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Homepage.html">Homepage</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create.html">Create</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Carosol.html">Carosol</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
        </div>
      </div></header>

    <section class="u-align-center u-clearfix u-section-1" id="carousel_e09e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-form u-form-1">
          <form method="POST" class="u-clearfix u-form-horizontal u-form-spacing-50 u-inner-form" style="padding: 24px;" source="custom">
            <div class="u-form-group u-label-top u-form-group-1">
              <label for="text-8a77" class="u-label">Title</label>
              <input type="text" placeholder="" id="text-8a77" name="text" class="u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-form-submit">
              <a href="#" class="u-border-3 u-border-active-palette-4-dark-1 u-border-hover-palette-4-dark-1 u-border-palette-4-base u-btn u-btn-round u-btn-submit u-button-style u-none u-radius-9 u-text-active-black u-text-black u-text-hover-black u-btn-1">Submit</a>
              <input type="submit" value="submit" name="submit" id="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-always u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">


       
        <?php
        require_once('utility.php');
        $post = getAllPublishedPosts();
        $posts = array_reverse($post);
        $userNum = getUserId();
        

        if(isset($_POST["submit"])){
            $arrOfPosts = searchTitle($_POST['text']);

            foreach($arrOfPosts as $numPost){
                $finalAllPosts[] = getAllPostsByID($numPost)[0];    
            }
            

            //$finalAllPosts = $arrOfPosts;
            //print_r($finalAllPosts);
 
           //print_r($finalAllPosts[1][0]);

           for($x=0;$x < count($finalAllPosts);$x++){
            //$userPosts = $finalAllPosts[$x][0];
            //console.log($userPosts);                
            $tim = strtotime($finalAllPosts[$x]['created_at']);
            $dat = date('l jS \of F Y  ', $tim);
            $postID = $finalAllPosts[$x]['ID'];
            $arrayofFiles = $finalAllPosts[$x]['files'];

            $files_arr =  explode (",", $arrayofFiles);

            //Thumbnail
            echo '<div class="u-effect-hover-zoom u-gallery-item">';
            echo ' <a href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> <div class="u-back-slide" data-image-width="944" data-image-height="780">';
            //if(empty($userPosts['files'])): 
            //    echo '<div class="defaultimg"><center>N/A</center></div>';
            //else: 
                echo '  <img class="u-back-image u-expanded" src="media/'.$files_arr[0].'">';
            //endif;
            echo '
                </div>
                    <div class="u-over-slide u-over-slide-2">
                        <h3 class="u-gallery-heading" style="font-size: 1.25rem;"></h3>
                        <p class="u-gallery-text"></p>
                    </div>
                    </a>

                </div>';






        
            //Title
            //echo ' <div class="title"> <h1>' . $userPosts[0]['Title'] . '</h1> </div>' ;


            //Date
            //echo ' <div class="time"> <p>' . $dat . '</p></div>';

            //Description
            //if(strlen($userPosts[0]['body']) > 550){echo '<p>' . substr($userPosts[0]['body'],0,180).'...' . '<p>';}
            //else echo '<p>' . $userPosts[0]['body'] . '<p>';

            //echo "<div class='readMore'> <a href='readPost.php?user=".urlencode(base64_encode("$userNum"))."&ID=".urlencode(base64_encode("$postID"))."'><button name=readBtn'".$x."'><b>READ MORE »</b></button></a> </div>";
            


        };
            
        }elseif((isset($_POST["Allsubmit"]))) {
            for($x=0;$x < count($posts);$x++){
                $userPosts = $posts[$x];                
                $tim = strtotime($posts[$x]['created_at']);
                $dat = date('l jS \of F Y  ', $tim);
                $postID = $posts[$x]['ID'];
                $arrayofFiles = $posts[$x]['files'];

                $files_arr =  explode (",", $arrayofFiles);

                //Thumbnail
                echo '<div class="u-effect-hover-zoom u-gallery-item">';
                echo ' <a href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> <div class="u-back-slide" data-image-width="944" data-image-height="780">';
                //if(empty($userPosts['files'])): 
                //    echo '<div class="defaultimg"><center>N/A</center></div>';
                //else: 
                    echo '  <img class="u-back-image u-expanded" src="media/'.$files_arr[0].'">';
                //endif;
                echo '
                    </div>
                        <div class="u-over-slide u-over-slide-2">
                            <h3 class="u-gallery-heading" style="font-size: 1.25rem;"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                        </a>

                    </div>';






            
                //Title
                //echo ' <div class="title"> <h1>' . $userPosts[0]['Title'] . '</h1> </div>' ;

 
                //Date
                //echo ' <div class="time"> <p>' . $dat . '</p></div>';

                //Description
                //if(strlen($userPosts[0]['body']) > 550){echo '<p>' . substr($userPosts[0]['body'],0,180).'...' . '<p>';}
                //else echo '<p>' . $userPosts[0]['body'] . '<p>';

                //echo "<div class='readMore'> <a href='readPost.php?user=".urlencode(base64_encode("$userNum"))."&ID=".urlencode(base64_encode("$postID"))."'><button name=readBtn'".$x."'><b>READ MORE »</b></button></a> </div>";
                


            };
        }else{
            for($x=0;$x < count($posts);$x++){
                $userPosts = $posts[$x];                
                $tim = strtotime($posts[$x]['created_at']);
                $dat = date('l jS \of F Y  ', $tim);
                $postID = $posts[$x]['ID'];
                $arrayofFiles = $posts[$x]['files'];

                $files_arr =  explode (",", $arrayofFiles);

                //Thumbnail
                echo '<div class="u-effect-hover-zoom u-gallery-item">';
                echo ' <a href="readPost.php?user='.urlencode(base64_encode("$userNum")).'&ID='.urlencode(base64_encode("$postID")).'"> <div class="u-back-slide" data-image-width="944" data-image-height="780">';
                //if(empty($userPosts['files'])): 
                //    echo '<div class="defaultimg"><center>N/A</center></div>';
                //else: 
                    echo '  <img class="u-back-image u-expanded" src="media/'.$files_arr[0].'">';
                //endif;
                echo '
                    </div>
                        <div class="u-over-slide u-over-slide-2">
                            <h3 class="u-gallery-heading" style="font-size: 1.25rem;"></h3>
                            <p class="u-gallery-text"></p>
                        </div>
                        </a>

                    </div>';






            
                //Title
                //echo ' <div class="title"> <h1>' . $userPosts[0]['Title'] . '</h1> </div>' ;

 
                //Date
                //echo ' <div class="time"> <p>' . $dat . '</p></div>';

                //Description
                //if(strlen($userPosts[0]['body']) > 550){echo '<p>' . substr($userPosts[0]['body'],0,180).'...' . '<p>';}
                //else echo '<p>' . $userPosts[0]['body'] . '<p>';

                //echo "<div class='readMore'> <a href='readPost.php?user=".urlencode(base64_encode("$userNum"))."&ID=".urlencode(base64_encode("$postID"))."'><button name=readBtn'".$x."'><b>READ MORE »</b></button></a> </div>";
                


            };
        }
        ?>
        
        </div>
        <a href="https://nicepage.site" class="u-active-custom-color-1 u-border-3 u-border-active-palette-4-base u-border-hover-palette-4-base u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-6 u-text-active-black u-text-hover-black u-white u-btn-2">learn more</a>
      </div>
    </section>
      
    <footer class="active u-clearfix u-footer u-grey-80" id="sec-1425"><div class="u-block-6b8d-41 u-clearfix u-sheet u-sheet-1"></div></footer>

</body>
</html>
<?php endif; ?>
