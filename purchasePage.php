<!--
Project Name: Milestone 3 Blog Post
Version 3
newPost module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->

<?php 
//Only show page if admin is not 3 or 4 or 11
include('myfuncs.php');
$vari = getUserId()?>
<?php if(!empty($vari) ): ?>
    <!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Large/EnterpriseOrganizations, ​Small/Medium&nbsp;Organizations">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>PurchasePage</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="PurchasePage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.6.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/cloud1-modified.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="PurchasePage">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-black u-clearfix u-header u-sticky u-sticky-01e9 u-header" id="sec-3e44"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="593" data-image-height="121">
          <img src="images/cloud1-modified.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="About.html" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="PurchasePage.html" style="padding: 10px 20px;">PurchasePage</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.html">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact.html">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="PurchasePage.html">PurchasePage</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 
    <section class="u-clearfix u-section-1" id="sec-1e5c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-border-3 u-border-grey-dark-1 u-line u-line-vertical u-line-1"></div>
            <h1 class="u-hidden-sm u-hidden-xs u-text u-text-1">Large/Enterprise<br>Organizations
            </h1>
            <h1 class="u-hidden-sm u-hidden-xs u-text u-text-default u-text-2"> Small/Medium&nbsp;<br>Organizations
            </h1>
            <h4 class="u-text u-text-default u-text-3">Small1</h4>
            <h4 class="u-text u-text-default u-text-4">Large1</h4>
            <h4 class="u-text u-text-default u-text-5">Small2</h4>
            <h4 class="u-text u-text-default u-text-6">Large2</h4>
            <h4 class="u-text u-text-default u-text-7">Small3</h4>
            <h4 class="u-text u-text-default u-text-8">Large3</h4>
            <h4 class="u-text u-text-default u-text-9">Small4</h4>
            <h4 class="u-text u-text-default u-text-10">Large4</h4>
            <h4 class="u-text u-text-default u-text-11">Small5</h4>
            <h4 class="u-text u-text-default u-text-12">Large5</h4>
            <h4 class="u-hidden-lg u-hidden-md u-hidden-xl u-text u-text-default-sm u-text-default-xs u-text-13">Small/Medium&nbsp;<br>&nbsp; Organization
            </h4>
            <h4 class="u-hidden-lg u-hidden-md u-hidden-xl u-text u-text-default-sm u-text-default-xs u-text-14">&nbsp; &nbsp; &nbsp;Large&nbsp;&nbsp;<br>Organization
            </h4>
          </div>
        </div>
        <a href="#" onclick="large();" class="u-border-2 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-4-base u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-1">Button1</a>
        <a href="#" onclick="small();" class="u-border-2 u-border-palette-4-base u-btn u-btn-round u-button-style u-hover-palette-4-base u-none u-radius-6 u-text-body-color u-text-hover-white u-btn-2">Button</a>
        <div class="choice">
            
            <form action="./handlers/purchaseHandler.php" method="POST" enctype="multipart/form-data" action="">

                
                    <div class="rectangle"></div>
                <input type="submit" value="Choose" id="smallChoice" name="smallChoice">
                <input type="submit" value="Choose" id="largeChoice" name="largeChoice">
            
            </form>
        </div>
      </div>
    </section>
    
    

  </body>
  <script>

    document.getElementById("largeChoice").style.visibility = "hidden";
    document.getElementById("smallChoice").style.visibility = "hidden";


    function large() {
      document.getElementById("largeChoice").click();
    }

    function small() {
      document.getElementById("smallChoice").click();
    }
</script>
</html>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
        </body>
    </html>
<?php endif; ?>