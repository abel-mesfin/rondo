<?php 
include('myfuncs.php');
$vari = getUserId()?>
<?php if(!empty($vari) ): ?>
    
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <title>Dream Tech Training</title>   

    <script> 
   

   function cler(){
   var cats = document.getElementById('categories').value 
       
   if(cats != ''){
   if(document.getElementById('hideCats').value  != ''){
       window.end = ' #'+ cats
   }else{
       window.end = '#'+cats
   }
   
   
   window.leng = end.length
   //alert(document.getElementbyID('catsLabel')innerHTML)
   document.getElementById('catsLabel').innerHTML = document.getElementById('catsLabel').innerHTML + window.end
   document.getElementById('hideCats').value = document.getElementById('catsLabel').innerHTML
   document.getElementById('categories').value = ''
   }  
   

   }
   function remove(){
       var lengthStr = document.getElementById('catsLabel').innerHTML.length
       var yo = window.end
       var total = document.getElementById('catsLabel').innerHTML
       var first = total.lastIndexOf("#") -1
       var number_ofchar = lengthStr-first
       var test = total.substring(0,lengthStr - number_ofchar)
       document.getElementById('catsLabel').innerHTML = test
       document.getElementById('hideCats').value = test
       
   }
   </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
    <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Create.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">

    <link rel="stylesheet" href="./css/newPost.css" />
 
    <link rel="stylesheet" href="style.css" />
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site2"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Create">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode">
  <header class="u-black u-clearfix u-header u-sticky u-sticky-6472 u-header" id="sec-2f58"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-gutter-0 u-hidden-sm u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-left u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <a href="/">
                    <img class="u-image u-image-default u-image-1" src="images/cloud1-modified.png" alt="" data-image-width="593" data-image-height="121">
                  </a>
                </div>
              </div>
              <div class="u-align-left-sm u-align-left-xs u-container-style u-hidden-sm u-hidden-xs u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
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
        <div class="u-container-style u-group u-hidden-lg u-hidden-md u-hidden-xl u-palette-1-base u-group-1">
          <div class="u-container-layout u-container-layout-3">
            <img class="u-absolute-hcenter-sm u-absolute-hcenter-xs u-expanded u-image u-image-default" src="images/cloud1-modified.png" alt="" data-image-width="593" data-image-height="121">
          </div>
        </div>
        <div class="u-container-style u-group u-group-2">
          <div class="u-container-layout u-valign-middle-xs">
            <nav class="u-hidden-lg u-hidden-md u-hidden-xl u-menu u-menu-dropdown u-offcanvas u-menu-2">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Page-1.html">Page 1</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
          </div>
        </div>
      </div></header>
    <section class="u-clearfix u-white u-section-1" id="carousel_307a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Create Course</h1>
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-right-cell u-size-31 u-white u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <div class="u-expanded-width u-form u-form-1">
                    <form action="./handlers/upload.php" method="POST" class="u-clearfix u-form-spacing-19 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form">
                      <div class="u-form-group u-form-name u-form-group-1">
                        <label for="name-daf4" class="u-form-control-hidden u-label">Title</label>
                        <input type="text" placeholder="Enter Title" id="name-daf4" name="title" class="u-border-2 u-border-grey-10 u-grey-5 u-input u-input-rectangle u-radius-12" required="">
                      </div>
                      <div class="u-form-group u-form-message u-form-group-4">
                        <label for="message-daf4" class="u-form-control-hidden u-label">Description</label>
                        <textarea placeholder="Description" rows="4" cols="50" id="message-daf4" name="textArea" class="u-border-2 u-border-grey-10 u-grey-5 u-input u-input-rectangle u-radius-12" required=""></textarea>
                      </div>
                      <div class="u-form-group u-form-phone u-form-group-3">
                        <label for="phone-42da" class="u-form-control-hidden u-label">Quiz</label>
                        <input type="text" placeholder="Enter your quiz code" id="phone-42da" name="quiz" class="u-border-2 u-border-grey-10 u-grey-5 u-input u-input-rectangle u-radius-12" >
                        <input type="text" placeholder="Embedable iframe codes" id="embedIframe" name="embedIframe" class="u-border-2 u-border-grey-10 u-grey-5 u-input u-input-rectangle u-radius-12" required="">

                      </div>

                      File(s): <input type="file" name="fileToUpload[]" id="files" onChange="createArray(); checkOrder()" multiple><br>


                      Published: <input type="checkbox" name="published"><br> 


                      <div class="u-align-right u-form-group u-form-submit u-form-group-5">
                        <input class="u-active-grey-70 u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-grey-70 u-palette-4-base u-radius-12 u-btn-1" type="submit" value="submit"  name="post" >
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                      <input type="hidden" name="hideArray" id="hideArray" >

                    </form>
                    <ul id="draggable-list" class="draggable-list">
                    </ul>
                  </div>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-size-29 u-layout-cell-2">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <img class="u-image u-image-contain u-image-1" src="images/Untitled-1.png" data-image-width="582" data-image-height="631">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
    function makeFileList() {
      var input = document.getElementById("files");
      var ul = document.getElementById("draggable-list");
      while (ul.hasChildNodes()) {
        ul.removeChild(ul.firstChild);
      }
      for (var i = 0; i < input.files.length; i++) {
        var li = document.createElement("li");
        console.log(input.files);
        li.innerHTML = '<img src="'+input.files[i].name+'" alt="'+input.files[i].name+'">';
        ul.appendChild(li);
      }
      if(!ul.hasChildNodes()) {
        var li = document.createElement("li");
        li.innerHTML = 'No Files Selected';
        ul.appendChild(li);
      }
    }
  </script>



    <script src="script.js"></script>
    
    <script
        src="https://kit.fontawesome.com/3da1a747b2.js"
        crossorigin="anonymous" >
    </script>

    
    
    <footer class="active u-clearfix u-footer u-grey-80" id="sec-1425"><div class="u-block-6b8d-41 u-clearfix u-sheet u-sheet-1"></div></footer>

  </body>
</html>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
        </body>
    </html>
<?php endif; ?>