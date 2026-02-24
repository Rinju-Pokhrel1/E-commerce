<!-- 7. Write a program to store page views count in SESSION, increment the count
on each refresh, and show the count on web page. -->

<?php
session_start();    
if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}
$_SESSION['page_views']++;
echo "Page views: " . $_SESSION['page_views'];
?>