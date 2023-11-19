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
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LOGIN</title>
  <style >
    html
    {
      overflow-y: hidden;
    }

    .main_container
    {
background:linear-gradient(50deg,#274759 30%,#659dbd 90%,#274759 100%); 
/*background:linear-gradient(90deg,#a45cfc 30%, #cd82fa 40%,#d4c5e3 100%);*/
      width: 100%;
/*      margin-left:10%;*/
      height: 100vh;
        display: flex;
        align-content: center;
/*        text-align: center;*/
      justify-content:center;

    }
        .box1
    {
      margin-top: 5%;
      margin-bottom: 5%;
      margin-left: 20%;
      background-image: url("log(1).png");
      background-repeat: no-repeat;
      background-size: 100% 100%;
      background-color: grey;
      width: 60%;
      display:flex;
      flex-wrap: wrap;
      align-content: center;
      justify-content: center;
      padding-left:2% ;
      padding-right: 2%;
      
      
             
    }
    .box2
    {
      margin-top: 5%;
      margin-bottom: 5%;
      margin-right: 20%;
      background-color: whitesmoke;
      width: 45%;
        text-align: center;
        padding-top: 10%;
        
      
    
  
    }
    
    /*.box2 p
    {

      text-align: center;
      font-size: 20px;
      
    }*/
    .login
    {
      width: 60%;
      height: 40px;
      border-radius: 20px;
      border: none;
      font-weight: 600;
/*      background:linear-gradient(90deg ,#4dffff 0%,#bf00ff 100%);*/
background:linear-gradient(50deg,#274759 30%,#659dbd 90%,#274759 100%); 
      color: whitesmoke;
    }
    /*.box2 input
    {
      border-radius: 20px;
      border-color: #d699ff;
      background-color:transparent;
      width: 100px;
      height: 30px;

    }*/
    .input
    {
      border-radius: 5px;
      width: 60%;
      height: 40px;
      font-size: 100%;
      font-weight: 400;
      border: none;
      background-color: #FFFFFF;

    }
    .input:hover 
    {
/*      border:2px solid  #8a00e6 ;*/
border:2px solid  #274759;
    }
        .login:hover
  </style>
</head>
<body>
    <div class="main_container">
      <div class="box1"></div>
      <div class="box2">
        <h1>Sign In</h1>
    		<h4>
    			<?php
    			error_reporting(0);
    			session_start();
    			session_destroy();
    			echo $_SESSION['loginMessage'];
    			?>
    			</h4>


    		<form method="post">
          <input type="text" name="name" placeholder="Account number" required class="input"><br><br>
          <input type="password" name="password" placeholder="Password" required class="input"><br><br>
                <input type="submit" name="login" value="LOGIN" class="login">
        </form>
      </div>
      
    </div>
</body>
</html>
<?php
if(isset($_POST['login']))
{
	$name=$_POST['name'];
	$password=$_POST['password'];
	$sql="select * from login where name='$name' AND password='$password' ";
	$result=mysqli_query($data,$sql);
	if(mysqli_num_rows($result))
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