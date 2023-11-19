<?php 
$host="localhost";
$user="root";
$password="";
$db="eems";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
	echo "connection error";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Entry-Exit Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
<style>
  body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
/*    background: url('') no-repeat center center fixed;*/
    background-size: cover;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  header {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  header::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.1);
    clip-path: polygon(0 0, 100% 0, 100% 80%, 0 100%);
  }
  nav {
    background-color: black;
   border:2px solid white;
    padding: 10px 0px;
    text-align: center;
  }
  nav a{
    color:white;
    padding:10px;
    text-decoration: none;
  }
  nav a:hover
  {
    color:orange;
    
  }
   footer {
    background: linear-gradient(to bottom, #00a8cc, #007bff);
    color: white;
    padding: 5px 0px;
    text-align: center;
  }
  .form-container
  {
    width: 100%;
    height:100%;

    background-color:black;
    background: url('black.jpg');
/*    filter:blur(2px);*/
    background-size: cover;
    background-repeat: no-repeat;
    margin: auto;
display: flex;
flex-direction: column;
align-content: center;
justify-content: center;
    font-size:20px;
  }
.box {

    
     background-color:transparent;

    border-radius:10px;
    border:5px solid #80bfff;
    box-shadow: 0px 0px 30px rgba(0, 0, 0, 1);

    width: 40%;

  padding-top: 20px;
  padding-bottom:20px;
  text-align: center;
margin-left: 30%;
margin-right: 30%;
    max-width: 600px;
    color: #80bfff;
  }
  .box:hover
  {
    border:5px solid ghostwhite;
  }
  form label:hover
    {
      color: ghostwhite;
    }
    .txt
    {
      width:50%;
      height:30px;
      border-radius:5px;
/*      border:none;*/
      /*border-bottom: 2px solid #80bfff;
      outline: none;
      transition: border-bottom-color 0.3s ease-in-out;*/
      background:transparent;
      color:white;
      font-size:90%;
    }
    .form-container input
    {
      border:none;
      border-bottom: 2px solid #80bfff;
      outline: none;
      transition: border-bottom-color 0.2s ease-in;
    }
    .submit{
      margin-left:6%;
      width:75%;
      height:30px;
      border-radius:5px;
      border:none;
      background:#80bfff;
      color:black;
/*      font-size:70%;*/
    }
    .opt
    {
      width:50%;
      height:30px;
      border-radius: 5px;
      border:none;
      background:  black;
      color:white;
      border-bottom: 2px solid #80bfff;
      outline: none;
      transition: border-bottom-color 0.2s ease-in;
      font-size:90%;
    }
    input:focus
    {
      border-bottom-color: ghostwhite;
    }
    select:hover
    {
      border-bottom-color: ghostwhite;
    }
    label
    {
/*      font-weight: 600;*/
      padding:10px;
    }
    h1
    {
      text-align: center;
      font-size:300%;
/*      margin-left:4%;*/
    }







</style>
</head>
<body>
  <header>
    <h1>ENTRY PAGE</h1>
  </header>

  <nav>
    <a href="main.php">HOME</a> 
    <a href="about.php">ABOUT</a> 
    <a href="login.php">ADMIN</a> 
    <a href="appointment.php">APPOINTMENT</a>
  </nav>
  <div class="form-container">
      <form method="post">
        <div class="box">
        <label>Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input class="txt" type="text" placeholder="Enter your name" name="name" required><br><br>
        <label>Purpose:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input class="txt" type="text" placeholder="Enter your purpose" name="purpose" required><br><br>
        <label>Phone no.:</label>&nbsp&nbsp&nbsp
        <input class="txt" type="number" placeholder="Enter your phone no." name="phone" required><br><br>
        <label>Gender:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <select class="opt" value="gender" required name="gender">
        <option hidden>Select Option</option>
              <option>Male</option>
              <option>Female</option>
          </select><br><br>
          <label>Vehicle No.:</label>&nbsp
          <input class="txt" type="text" placeholder="Enter your vehicle no." name="vehicle"><br><br>
          <input class="submit" type="submit" name="submit">
      </div>
    </form>

  </div>
   <footer>
    <p>&copy; 2023 Entry-Exit Management System. All rights reserved.<br>Designed by:- Nishant Khanna, Milandeep Kaur</p>
  </footer>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$purpose= $_POST['purpose'];
	$phone= $_POST['phone'];
	$gender= $_POST['gender'];
	$vehicle= $_POST['vehicle'];
    $entry=date("Y-m-d");
	$query = "INSERT INTO admin(name,purpose,phone,gender,vehicle,entry) VALUES('$name','$purpose','$phone','$gender','$vehicle','$entry')";
	mysqli_query($conn, $query );
    echo "
    <script>
         alert('data inserted successfully');
    </script>
    ";
 
}
?>