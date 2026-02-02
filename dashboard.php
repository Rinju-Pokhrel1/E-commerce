<?php
session_start();
require_once 'header.php';?>
<div class="container">
    Welcome to your dashboard, <?php echo $_SESSION['username']; ?>!
</div>
<?php
 require_once 'footer.php'; ?>