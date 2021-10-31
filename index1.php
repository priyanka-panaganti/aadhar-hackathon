<!DOCTYPE html>
<html>
<head>
    <title>sign up</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
     
    session_start();
    ?>
    <div class="header-icon">
        <img src="icon.png" height="100px" width="200px" >
    </div>

   

    
    <div id="message">
        My best friend is like my Aadhar Card ...<br>
        I link her with all my important stuff...<br>
        .... And I need her wherever I go!!!<br>
    </div>
    <div class="login-wrap">
    <?php
    if(isset($_SESSION['status']))
    {
        include('alert.php');
        unset($_SESSION['status']);
    }
    ?>

           
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
          
                <div class="sign-in-htm">
                <form action="web page\main.php" method="post" enctype="multipart/form-data">
                     

                    <div class="group">
                        <label for="pass" class="label">Mobile number</label>
                        <input id="number" type="text" class="input" data-type="password" placeholder="+91**********">
                    </div>
                    <div data-for="message" class="group">
                    <label for="pass" class="label">KYC zip file</label>
                            <input name="filetoupload" placeholder="" type="file" data-form-field="message" class="input" id="filetoupload">
                        </div>
                        <div class="foott-lnk">
                        <a id="kyc" href="https://resident.uidai.gov.in/offline-kyc">Download your offline KYC file</a>
                    </div>
                      
                        <div data-for="message" class="group">
                        <label for="user" class="label">password</label>
                            <input name="password"  type="password" data-form-field="password" class="input" >
                        </div>

                        <div data-for="message" class="group">
                    <label for="pass" class="label">POA Document</label>
                            <input  placeholder="" type="file" data-form-field="message" class="input" >
                        </div>
                        <div id="recaptcha-container" class="group"></div>
                        <div class="group" style="align-items:center" ><input type="submit" class="button" name="submit" value="upload file/sign up"></div>

                    <div class="hr"></div>
                    <div class="foott-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                 </form>
                </div>
                <form action="insert.php" method="post">
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" placeholder="user-name" name="username" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Aadhar number</label>
                        <input id="pass" type="password" class="input" name="aadhar" placeholder="Aadhar-number"data-type="password" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mobile number</label>
                        <input id="number" type="tel" class="input" name="mobile" placeholder="+91**********" data-type="password" required>
                    </div>
                   
                    <div class="group">
                        <label for="user" class="label">Father name</label>
                        <input id="user" type="text" class="input" placeholder="father-name" name="father" required>
                    </div>
                    <div class="group">
                        <label for="user" class="label">mother name</label>
                        <input id="user" type="text" class="input" placeholder="mother-name" name="mother" required>
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email Address</label>
                        <input id="pass" type="text" class="input" name="email" placeholder="email-address" required>
                    </div>

                    <div class="group">
                        <input type="radio" name="gender" value="male"> Male
                              <input type="radio" name="gender" value="female"> Female
                                   <input type="radio" name="gender" value="other"> Other
                    </div>
                   
                    <div class="group">
                        <input type="submit" class="button" name="sign_up" value="Sign Up">
                    </div>
                     <div class="foott-lnk">
                        <label for="tab-1">Already Member?</label>
                              </div>
                
            </div>
            </form>
        </div>
    </div>   
     
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

      
<script src="NumberAuthentication.js" type="text/javascript"></script>

</body>
</html>
