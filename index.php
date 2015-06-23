<?php

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "it":
        //echo "PAGE IT";
        //include("index_it.php");
        header("location: index.html");//redirect
        break;
    case "en":
        //echo "PAGE EN";
        //include("index_en.php");
        header("location: en/index.html");//redirect
        break;        
    default:
        //echo "PAGE EN - Setting Default";
        header("location: index.html");//redirect
        break;
}

//header("location: index.html");//redirect
?>