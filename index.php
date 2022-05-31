<?php 

$page = isset($_GET["pg"]) ? $_GET["pg"] : "index";


if( file_exists(__DIR__."/pages/$page.inc.php") ){
    include_once __DIR__."/pages/$page.inc.php";
}else{
    include_once __DIR__."/pages/index.inc.php";
}