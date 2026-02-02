<?php
include_once "header.php";?>
<div class="container">
            <div id="login_form">
                <form action="login_process.php" method="post">
                    <div>
                        <label><b>Username</b></label>
                        <input type="text" id="username" name="username" />
                    </div>
                    <div>
                        <label><b>Password</b></label>
                        <input type="password" id="password" name="password" />
                    </div>
                    <div>

                        <input type="submit" id="login_btn" value="Login" />
                    </div>
                </form>

            </div>
        </div>
        <?php
        include_once "footer.php"; ?>