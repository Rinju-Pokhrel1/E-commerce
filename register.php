<?php
include_once "header.php";?>
<div class="container">
        <div id="register_form">
            <form action="register_process.php" method="POST" onsubmit="return validate()">
                <div>
                    <label>Firstname</label>
                    <input type="text" name="first_name" id="first_name" />
                    <span class="validation_error" id="first_name_error"></span>
                </div>
                <div>
                    <label>Lastname</label>
                    <input type="text" name="last_name" id="last_name" />
                    <span class="validation_error" id="last_name_error"></span>

                </div>
                <div>
                    <label>Email</label>
                    <input type="text" name="email" id="email" />
                    <span class="validation_error" id="email_error"></span>

                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" id="password" />
                    <span class="validation_error" id="password_error"></span>

                </div>
                <div>
                    <p>Do you accept terms and conditions?
                        <input type="radio" name="term" value="1" /><label>Yes</label>
                        <input type="radio" name="term" value="0" /><label>No</label>
                        <span class="validation_error" id="term_error"></span>
                </div>
                <div>
                    <input type="submit" value="Register now" id="Register_btn" />
                </div>
        </div>
        </form>
    </div>
    <?php
    include_once "footer.php"; ?>   
    <script src="assets/validate.js"></script>