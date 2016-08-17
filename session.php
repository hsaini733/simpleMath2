<?php

  session_start();
  
  if(!empty($_GET["userid"]) && $_GET["userid"]!="null")
  {
	//echo "I am here";  
  	$_SESSION["userid"] = $_GET["userid"];
  }
 /* if(!isset($_SESSION["userid"]))
  {
    $_SESSION["userid"] = "Samrath";
    
  } */
  
  if(!isset($_SESSION["score"]))
  {
    $_SESSION["score"] = 0;
    
  }
  
  if($_GET["success"]=="y")
  {
  $_SESSION["score"] = $_SESSION["score"] + 1 ;
  }
  
  echo json_encode($_SESSION);
  
  
  ?>