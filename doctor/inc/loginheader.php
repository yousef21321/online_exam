<?php
include_once("../lib/Session.php");
Session::checkAdminLogin();

header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache");
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
?>
<!doctype html>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="no-cache">
	<meta http-equiv="Expires" content="-1">
	<meta http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" href="css/login.css">
</head>
<style>
body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background: linear-gradient(120deg,#2980b9,#8e44ad);
    height: 100vh;
   overflow: hidden;
    font-size:30px;  
  }    
  .center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
   width: 400px;
    border-radius: 10px;
    background-color: white;
  }
  .center h1 {
   text-align: center;
   padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
  }
  .center form{
  padding: 0 40px;
   box-sizing: border-box;
  }
  form .txt_field {
  border-bottom: 2px solid #adadad;
   margin: 30px 0;
  }
  .txt_field input {
   width: 100%;
   padding: 0 5px;
   height: 40px;
  font-size: 16px;
   border: none;
   background: none;
   outline: none;
}
  .txt_field label{
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
}
 input[type="submit"]{
  width: 300px;
  height: 50px;
  border: 1 solid; 
 background: #2691d2;
 border-radius: 25px;
   font-size: 18px;
   color: #e9f4fb;
   font-weight: 700px;
   cursor: pointer;
    outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d2;
   transition: .5%;
} 
   li{
    width: 300px;
  height: 50px;
  border: 1 solid; 
 background: #2691d2;
 border-radius: 25px;
   font-size: 18px;
   color: #e9f4fb;
   font-weight: 700px;
   cursor: pointer;
    outline: none;
   } 
button{width: 300px;
  height: 50px;
  border: 1 solid; 
 background: #2691d2;
 border-radius: 25px;
   font-size: 18px;
   color: #e9f4fb;
   font-weight: 700px;
   cursor: pointer;
    outline: none;}
</style>
</head>
<body>


	