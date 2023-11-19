<?php

error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="eems";
$data=mysqli_connect($host,$user,$password,$db);
if ($data==false)
{
	echo "connection error";
}
else
{
	echo "connection established";
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$sql="select * from login where name='".$name."' AND password='".$pass."'";
	$result=mysqli_query($data,$sql);
	if($result)
	{
        
		header("location:adminlist.php");
	}
	else
	{
		session_start();
		$message= "username or password does not match";
		$_SESSION['loginMessage']=$message;
		header("location:login.php");
	}
}
?>




















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Entry Page</title>
	<style type="text/css">
		html,body
		{
			height: 100%;
			width: 100%;

		}
		*
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		form
		{
			background:url("bg2.png");
			background-repeat: no-repeat;
/*			background-position: center;*/
		  background-size: cover;
		}
		.header,.footer
		{
			
			position: absolute;
			width: 100%;
			z-index:1000;
		}
		.header
		{
			height:100px;
			background-color:red;
			color:floralwhite;
           
		}
		.header a
		{
			color:white;
			float:right;
			padding-right:50px;
		}
		.header a:hover
		{
			color:gold;
		}

		.footer{
/*			position: absolute;*/
			bottom: 0;
			background-color: black;
           color: white;
           width: 100%;
           height: 200px;
           text-align: center;
		}
		main
		{
			width: 100%;
/*			height: calc(100% - 100px);*/
			position:absolute;
		}

		form
		{/*
			width: 100%;
			height:80%;*/
			text-align:center;
            padding-top: 160px;
			font-size:20px;
			font-size:150%;
			
			width: 100%;
			height: calc(100% - 100px);
			color:white;
		}
		form label:hover
		{
			color: gold;
		}
		.box
		{
			border: 4px solid white;
			border-radius:10px;
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
/*  z-index:2;*/
  width: 40%;
  padding-top: 20px;
  padding-bottom:20px;
  text-align: center;
		}
		.box:hover
		{
			border:4px solid gold;
		}
		.txt
		{
			width:50%;
			height:30px;
			border-radius:5px;
			border:none;
			background:#999999;
			color:#999999;
			font-size:70%;
		}
		.submit{
			margin-left:6%;
			width:75%;
			height:30px;
			border-radius:5px;
			border:none;
			background: #999999;
			color:black;
			font-size:70%;
		}
		.opt
		{
			width:50%;
			height:30px;
			border-radius: 5px;
			border:none;
			background: #999999;
			color:black;
			font-size:70%;
		}
		input:hover
		{
			border:2px solid gold;
		}
		select:hover
		{
			border:2px solid gold;
		}
		label
		{
			font-weight: 600;
		}
		h1
		{
			font-size:300%;
			margin-left:4%;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>ENTRY PAGE</h1>
		<a href="main.php">EXIT</a>
	</div>

<div class="main"></div>	

<form method="post">
	<div class="box">
	<label>Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input class="txt" type="text" placeholder="Enter your name" name="name" required><br><br>
	<label>Purpose:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input class="txt" type="text" placeholder="Enter your purpose" name="purpose" required><br><br>
	<label>Phone no.:</label>&nbsp&nbsp&nbsp
	<input class="txt" type="number" placeholder="Enter your phone no." name="phone" required><br><br>
	<label>Gender:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select class="opt" value="gender" required>
	<option hidden>Select Option</option>
    		<option>Male</option>
    		<option>Female</option>
    </select><br><br>
    <label>Vehicle No.:</label>&nbsp
    <input class="txt" type="text" placeholder="Enter your vehicle no."><br><br>
    <input class="submit" type="submit" name="Submit">
</div>
    </form>

<div class="footer">
	<h3>Copyright</h3>
</div>
</body>
</html>