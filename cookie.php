<?php

function addCookie(){
    setcookie("username","Rinju",time()+360 ,"/");


}
function readCookie(){
    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"];
    }

}
function deleteCookie(){
    setcookie("username","",time()-1 ,"/");

}
// addCookie();
// readCookie();
deleteCookie();
?>