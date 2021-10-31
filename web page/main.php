

    <DOCTYPE html>
<html  >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="GlassM5 Theme Live Demo Site">
  
  
  <title>Aadhar main page</title>
  <link rel="stylesheet" href="css/mobirise2.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/css-style.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/recaptcha.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Lexend:100,300,400,500,600,700,800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend:100,300,400,500,600,700,800&display=swap"></noscript>
  <link rel="preload" as="style" href="css/mbr-additional.css"><link rel="stylesheet" href="css/mbr-additional.css" type="text/css">
 
  
  <!-- Google Tag Manager-->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PFK425');</script>
        <!-- End Google Tag Manager --> 
  <style>
     #image1 {
  
 left:200px;
  width: 150px;
  height: 200px;
  margin-left: 60px;
  margin-top:35px

}

  </style>

</head>
<body>

    <!-- Google Tag Manager-->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager -->

    <?php

if(isset($_REQUEST['submit'])){
  $name =$_FILES["filetoupload"]["name"];
  $password=$_REQUEST['password'];
    $target ='zipfile/'.$_FILES["filetoupload"]["name"];
   move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target);
         #echo $name;
            $rand= rand(1000,9999);
              $zip = new ZipArchive;

if ($zip->open('zipfile/'.$name) == TRUE) {

     $zip -> setPassword($password);

     $zip -> extractTo('zipfile/xml/'.$rand);
           $zip -> close();
     $dir= 'zipfile/xml/'.$rand;
           $files = scandir($dir,1);
             $xml_file_name = $files['0'];
 $read_xml=simplexml_load_file($dir."/".$xml_file_name);
     $json_encode = json_encode($read_xml);
                     $array = json_decode($json_encode , true);
                     $image= $array['UidData'] ['Pht'] ;
                             $base64_decode = base64_decode($image);
                              file_put_contents($rand.".png",$base64_decode); 

?>

<?php 

}  else {

echo "failed";
}
}

?>  
  
  <section data-bs-version="5" class="menu menu1 cid-sz55TXuY2C" once="menu" id="menu1-1">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                
                <span class="navbar-caption-wrap"> <img src="https://cdn.iconscout.com/icon/free/png-256/aadhaar-2085055-1747945.png" width="90px" height="80px" ></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="colapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-success display-7" href="#" aria-expanded="false">
                            Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-success display-7" href="#" aria-expanded="false">
                            About us</a></li>
                    <li class="nav-item"><a class="nav-link link text-success display-7" href="#">
                            Services</a></li>
                    <li class="nav-item"><a class="nav-link link text-success display-7" href="#">Contacts</a>
                    </li></ul>
                    <div id="google_translate_element"></div>
                    <script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement(
				{pageLanguage: 'en'},
				'google_translate_element'
			);
		}
	</script>
	
	<script type="text/javascript" src=
"https://translate.google.com/translate_a/element.js?
		cb=googleTranslateElementInit">
	</script>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="#">
                        SIGN OUT</a></div>
            </div>
        </div>
    </nav>
</section>




<section data-bs-version="5" class="header1 cid-sz55N7vCP2 mbr-fullscreen" id="header01-0">

    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(255, 255, 255);"></div>
    <div class="align-center container">
        <div class="row">
            <div class="col-12 align-left col-lg-8">
                <div class="round">
                   <img id="image1" src="<?php echo $rand.".png" ?>"   alt=""> </div>
                <div class="round round2"></div>
                <div class="card-wrapper">
                    <h4 class="mbr-section-title mbr-fonts-style mbr-white mb-lg-5 display-7"><strong>Personal-details:</strong></h4>
                    
                    
               
                    
                    
                 
                    <div class="col-lg-7 mx-auto" data-form-type="formoid">
                <!--Formbuilder Form-->
              
               
                    <div class="dragArea row">
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                        <label for="user" class="label">full name</label>
                     
                            <input type="text" name="name"  data-form-field="name" class="form-control display-7" value= "<?php echo $array['UidData'] ['Poi'] ['@attributes']['name'] ; ?> "id="name-form03-8" readonly >
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-group mb-3" data-for="date of birth">
                        <label for="user" class="label">Date Of Birth</label>
                     
                            <input type="text" name="name"  data-form-field="name" class="form-control display-7" value= "<?php echo $array['UidData'] ['Poi'] ['@attributes']['dob'] ; ?> "id="name-form03-8" readonly>
                        </div>
                        <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">father name </label>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['careof'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                        <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">mother name</label>
                            <input type="text" name="mother name"  data-form-field="subject" class="form-control display-7" value="*********" id="subject-form03-8" readonly>
                        </div>
                        <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">Email</label>
                        <input type="email" name="email"  data-form-field="email" class="form-control display-7" value="email id" id="email-form03-8">
                        </div>
                        <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">gender</label>
                        <input type="email" name="email"  data-form-field="email" class="form-control display-7" value="<?php echo $array['UidData'] ['Poi'] ['@attributes']['gender'] ; ?>" id="email-form03-8" readonly>
                        </div>
                        <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">Aadhar number</label>
                            <input type="text" name="Aadher number"  data-form-field="subject" class="form-control display-7" value="************" id="subject-form03-8" readonly>
                        </div>
                       
                       
                        <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                        <label for="user" class="label">phone number</label>
                        <input type="tel" name="phone" data-form-field="phone" class="form-control display-7"  value="+91**********" id="phone-form03-8" readonly>
                        </div>
                       
                    </div>
                </div>
               
            
                <!--Formbuilder Form-->
              
                </div>
            </div>
        </div>
    </div>
 
</section>




<div class="features7 cid-sz56fQL1rV" id="features08-3">
    

    
    <div class="container">

       
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                <h4 class="mbr-section-title mbr-fonts-style mbr-white mb-lg-5 display-7"><strong>Address Details:</strong></h4>
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>country</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-8" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['country'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                <h4 class="mbr-section-title mbr-fonts-style mbr-white mb-lg-5 display-7"><strong></strong></h4><br>
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>district</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['dist'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                <h4 class="mbr-section-title mbr-fonts-style mbr-white mb-lg-5 display-7"><strong></strong></h4><br>
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>Door Number</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['house'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>Land Mark</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['landmark'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>locality</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['loc'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>Pin Code</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['pc'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>

            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>Town name</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['po'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>state</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['state'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
           
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>street</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['street'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>

            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>sub district</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['subdist'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>Village Town </strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['vtc'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                        

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
               
                    <div class="card-box align-left">
                    <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                    <h5 class="card-title mbr-fonts-style display-7"><strong>city</strong></h5>
                            <input type="text" name="father name" data-form-field="subject" class="form-control display-7" value="<?php echo $array['UidData'] ['Poa']['@attributes'] ['vtc'] ; ?>" id="subject-form03-8" readonly>
                        </div>
                           
                        </div>
                      
                    

                </div>
            </div>
            
            <div class="col-auto"><button id="center-button" type="submit" class="btn btn-primary display-7">update Address</button></div>
              
        </div>
    </div>
    </div>

<section data-bs-version="5" class="features9 cid-sz58oYjBZ7" id="features010-e">
    
<form action="index.py" method="post" enctype="multipart/form-data">
    
    <div class="container">
        <div class="row glass">
            <div class="col-md-12 col-lg-4">

                <div class="image-wrapper">
                    <img src="http://www.nagalandpost.com/cms/gall_content/2018/8/2018_8$large_aadhar.jpg" alt="">

                </div>

            </div>



            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <h5 class="mbr-section-subtitle mbr-fonts-style align-left mb-5 mt-2 display-5"><strong>Face Authentication </strong>
                        </h5>

                    </div>
                  
                    <div class="col-lg-6 col-md-4 align-right m-auto">
                        <div class="mbr-section-btn mb-5">
                        <input class=" btn btn-primary display-9" href="#" value="Get started" type="submit" >
                        </div>

                    </div>

                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>01.Face detection</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">The camera detects and locates the image of a face, either alone or in a crowd.The image may show the person looking straight ahead or in profile.</p>
                                

                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>02.Face analysis</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">Most facial recognition technology relies on 2D rather than 3D images because it can more conveniently match a 2D image with public photos or those in a database. 
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>03. Converting the image to data</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">The face capture process transforms analog information (a face) into a set of digital information (data) based on the person's facial features. 
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>04. Finding a match</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">Your faceprint is then compared against a database of other known faces. For example, the FBI has access to up to 650 million photos, drawn from various state databases.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>05. Authentication</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">Your face's analysis is essentially turned into a mathematical formula. The numerical code is called a faceprint. In the same way that thumbprints are unique, each person has their own faceprint.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-box align-left">
                                
                                <h5 class="card-title mbr-fonts-style display-7"><strong>06. Analyze</strong></h5>
                                <p class="card-text mbr-fonts-style display-4">On Facebook, any photo tagged with a person’s name becomes a part of Facebook's database, which may also be used for facial recognition.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</section>

<section data-bs-version="5" class="numbers1 cid-sz56uYA5zF" id="numbers01-a">
    

    
    <div class="container">

        <div class="col-12 m-auto col-lg-8 pb-5">
            <h3 class="mbr-section-title mbr-fonts-style align-left mb-0 display-7">OTP Authentication</h3>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-left mb-0 mt-2 display-5"><strong>OTPs are unique and automatically generated passwords that can only be used once. </strong></h5>
        </div>

        <div class="row">
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                 

                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <div class="card-box align-left">
         
          <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="form-control display-7" placeholder="user-name"><br><br>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mobile number</label>
                        <input id="number" type="text" class="form-control display-7" data-type="password" placeholder="+91**********"><br><br>
                    </div>
                    <div id="recaptcha-container" class="group"></div>
                    <div class="navbar-buttons mbr-section-btn">
                        <button type="button" class="btn btn-primary display-4" onclick="phoneAuth();">SEND OTP</button><br><br>
                    </div>
                    <div class="group">

                        <label for="pass" class="label">ENTER otp</label>
                        <input id="verificationCode" type="tel" class="form-control display-7" placeholder="6 digit code" data-type="password"><br><br>
                    </div>
                    <div class="navbar-buttons mbr-section-btn">
                        <button type="button" class="btn btn-primary display-4" name="sign_in" onclick="codeverify();">Authenticate</button>
                    </div>
                        
                    </div>
                </div>
            </div>
  
                        
                      
        </div>
    </div>
</section>

<script src="https://www.gstatic.com/firebasejs/5.9.4/firebase.js"></script>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.1.1/firebase-database.js"></script>

    <script type="module">
      
      const firebaseConfig = {
    apiKey: "AIzaSyDntgM1JxhFWzbUzq7rPT8j44nqUIFnQP8",
    authDomain: "sample-18975.firebaseapp.com",
    projectId: "sample-18975",
    storageBucket: "sample-18975.appspot.com",
    messagingSenderId: "332950120346",
    appId: "1:332950120346:web:927eb05bfd0f4379677c23",
    measurementId: "G-GF3XLN7TF3"
  };
      
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
      
      </script>

      
<script src="js\NumberAuthentication.js" type="text/javascript"></script>



<section data-bs-version="5" class="video1 cid-sz56mNQ5nk" id="video01-5">
    
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(38, 61, 90);">
    </div>
    <div class="align-center container">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-">
                <div class="box">
                    <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                        <div class="icon-wrap">
                            <a class="" href="#"><span class="mbr-iconfont mobi-mbri-play mobi-mbri"></span></a>
                        </div>
                        <div class="mbr-section-head">
                            <h4 class="mbr-section-title mbr-fonts-style mt-5 display-2"><strong>Watch Video</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modalWindow" style="display: none;">
            <div class="modalWindow-container">
                <div class="modalWindow-video-container">
                    <div class="modalWindow-video">
                    <iframe width="956" height="538" src="https://www.youtube.com/embed/j8Yxff6L_po" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <a class="close" role="button" data-dismiss="modal" data-bs-dismiss="modal">
                        <span aria-hidden="true" class="mbr-iconfont mobi-mbri-close mobi-mbri closeModal"></span>
                        <span class="sr-only visually-hidden">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>





<section data-bs-version="5" class="accordion1 cid-sz57ONqHWB" id="Accordion01-c">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(255, 255, 255);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-12">
                <h2 class="mbr-fonts-style mbr-section-title pb-3 mb-1 mbr-white mbr-semibold align-left display-2"><strong>Frequently
                    </strong>
                    <div><strong>Asked Questions</strong></div>
                </h2>
                

                <div class="content-block">
                    <div class="accordion-content">
                        <div id="bootstrap-accordion_10" class="panel-group accordionStyles accordion " role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <a role="button" class="collapsed panel-title" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse1_10" aria-expanded="false" aria-controls="collapse1">
                                        <h4 class="mbr-fonts-style header-text mbr-white mbr-semibold display-7">How to configure m-Aadhaar applications in phone (Android & iOS)?</h4>
                                        <span class="sign mbr-iconfont mobi-mbri-plus inactive"></span>

                                    </a>
                                </div>
                                <div id="collapse1_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_10">
                                    <div class="panel-body pt-4">
                                        <p class="mbr-fonts-style panel-text mbr-text mbr-white mb-3 mbr-regular display-4">  mAadhaar App is available for both Android and iPhone users in India. In order to install the app follow the steps given below:

Visit the Google Play Store for Android and to App Store for iPhone.<br>
Type mAadhaar in the search bar and download, or download mAadhaar Android version from https://play.google.com/store/apps/details?id=in.gov.uidai.mAadhaarPlus&hl=en_IN or iOS version from https://apps.apple.com/in/app/maadhaar/id1435469474.<br>
To make sure you are downloading the right app, check to see if the developer’s name is listed as ‘Unique Identification Authority of India’<br>
Once you open the app, it takes you through the terms and conditions and usage guidelines and language preference settings. Please go through them carefully before continuing further.
                                           </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <a role="button" class="collapsed panel-title" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse2_10" aria-expanded="false" aria-controls="collapse2">
                                        <h4 class="mbr-fonts-style header-text mbr-white mbr-semibold display-7">What is iOS compatible version for maadhaar app?</h4>
                                        <span class="sign mbr-iconfont mobi-mbri-plus inactive"></span>
                                    </a>

                                </div>
                                <div id="collapse2_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_10">
                                    <div class="panel-body pt-4">
                                        <p class="mbr-fonts-style panel-text mbr-text mbr-white mb-3 mbr-regular display-4">The mAadhaar app for iPhone is compatible for iOS 10.0 and above.
                                      </p>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a role="button" class="collapsed panel-title" data-toggle="collapse" data-bs-toggle="collapse" data-core="" href="#collapse3_10" aria-expanded="false" aria-controls="collapse3">
                                        <h4 class="mbr-fonts-style header-text mbr-white mbr-semibold display-7"> linking bank account and PAN  with Aadhaar make vulnerable?</h4>
                                        <span class="sign mbr-iconfont mobi-mbri-plus inactive"></span>

                                    </a>
                                </div>
                                <div id="collapse3_10" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion" data-bs-parent="#bootstrap-accordion_10">
                                    <div class="panel-body pt-4">
                                        <p class="mbr-fonts-style panel-text mbr-text mbr-white mb-3 mbr-regular display-4">
                                        No. As your bank information is not shared by the bank with anyone else, no one can have information about your bank account just by knowing your Aadhaar number. Also, UIDAI or any entity for that matter would not have any information about your bank account. For example, you give your mobile number at various places and to various authorities such as bank, passport authorities, income tax departments, etc. Would the telecom company have access to your bank information, income tax returns, etc.? Obviously no! Similarly, when you provide Aadhaar number to various service providers, your detail remains with the respective service providers and no single entity including the Government or UIDAI will have access to your personal information spread across various service providers.</p>
                                    </div>
                                </div>
                                        </div>

                            

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5" class="form3 cid-sz56s32iCe" id="form03-8">
    
    <div class="mbr-overlay"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-lg-7 mx-auto" data-form-type="formoid">
                <!--Formbuilder Form-->
                <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true" value="aE0VQrQ2xBKfmld9DDyWE8ZBP4aiSnmnFr6M3gPDxgfwodHv0xAEUUVXhofQ1fUcLZejefX2RC5FX9MLHZxHkuW7WH6cnR/PO/x8cxPab6aJBb/jEaZupnaXC8kqhHHG.G8mWkc3AS26dCGJqcQJTlN4Dyhvlu2x4ja2Aco4j3kaTRDsGYnhKA+Ikz3yNuxvgkFp/XBOuserXi0Eb07i5o+cTHrS2HwWa+uoigACqpvgIHemg6wCWheiLbPkSQ64s">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out
                            the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...! some
                            problem!</div>
                    </div>
                    <div class="dragArea row">


                        <div class="col-lg-6 col-md-12 col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Name" data-form-field="name" class="form-control display-7" value="" id="name-form03-8">
                        </div>
                        <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <input type="email" name="email" placeholder="Email" data-form-field="email" class="form-control display-7" value="" id="email-form03-8">
                        </div>
                        <div data-for="subject" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <input type="text" name="subject" placeholder="Subject" data-form-field="subject" class="form-control display-7" value="" id="subject-form03-8">
                        </div>
                        <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group mb-3">
                            <input type="tel" name="phone" placeholder="Phone" data-form-field="phone" class="form-control display-7"  value="" id="phone-form03-8">
                        </div>
                        <div data-for="message" class="col-lg-12 col-md-12 col-sm-12 form-group mb-3">
                            <textarea name="message" placeholder="Message" data-form-field="message" class="form-control display-7" id="message-form03-8"></textarea>
                        </div>
                        <div class="navbar-buttons mbr-section-btn">
                        <button type="button" class="btn btn-primary display-4" name="sign_in" ">Send request</button>
                    </div>
                 
                </form>
                <!--Formbuilder Form-->
            </div>
        </div>
    </div>
</section>

<?php
    if (isset($_POST["submit_address"]))
    {
        $address = $_POST["address"];
        $address = str_replace(" ", "+", $address);
        ?>
 
        <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
 
        <?php
    }
?>

<section data-bs-version="5" class="map1 cid-sz57A2ay7Y" id="contacts01-b">
    
    
    <div class="container">
        
        <div class="google-map">
        <form method="POST">
    <p>
        <input type="text" class="form-control display-7" name="address" placeholder="Enter address">
    </p>
 
    <input type="submit"  class="btn btn-primary display-4" name="submit_address">
</form>
        </div>
    </div>
</section>



<section data-bs-version="5" class="contacts8 cid-sz59VlvkYW" id="contacts08-f">
    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="wrapper">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-4">CALL US</h5>
                    <p class="phone mbr-fonts-style mb-4 display-5"><strong>
                         Toll free :1947
                        </strong></p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-4">visit us</h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">help@uidai.gov.in
                    </li>
                  
                </ul>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</section>

<section data-bs-version="5" class="footer1 cid-sz56sBQ95d" once="footers" id="footer02-9">

    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="wrapper">
                    <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                        <strong>UIDAI Head Office</strong>
                    </h5>
                    <p class="mbr-text mbr-fonts-style mb-4 display-4">
                    Headquarters Unique Identification Authority of India Government of India (GoI)<br>

                        Bangla Sahib Road, Behind Kali Mandir<br>

                          Gole Market, New Delhi - 110001<br>
                    </p>
                    
                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Company</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">About</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Jobs</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Contacts</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Blog</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Themes</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">

                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Features</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Team</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Pricing</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Info</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-2">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Support</strong>
                </h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Contacts</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Testimonials</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Terms of Service</a></li>
                    <li class="mbr-text item-wrap"><a href="#" class="text-white">Help</a></li>
                </ul>
            </div>

            
        </div>
    </div>
</section>


<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/index.js"></script>
  <script src="assets/playervimeo/vimeo_player.js"></script>
  <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
  

</body>
</html>