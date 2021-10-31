<div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="user" type="text" class="input" placeholder="user-name">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Mobile number</label>
                        <input id="number" type="text" class="input" data-type="password" placeholder="+91**********">
                    </div>
                    <div id="recaptcha-container" class="group"></div>
                    <div class="group">
                        <button type="button" class="button1" onclick="phoneAuth();">SEND OTP</button>
                    </div>
                    <div class="group">

                        <label for="pass" class="label">ENTER otp</label>
                        <input id="verificationCode" type="tel" class="input" placeholder="6 digit code" data-type="password">
                    </div>
                    <div class="group">
                        <button type="button" class="button" name="sign_in" onclick="codeverify();">SIGN IN</button>
                    </div>