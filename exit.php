<?php
// include("headerfooter.php");
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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Entry-Exit Management System</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap">
<style>
 html
    {
      overflow-x: hidden;
    }
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
  background: url('black.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  margin: auto;
  width: 100%;
  height: 100%;
}
   form
            {
                text-align: center;
                margin-top:60px;
                display: flex;
                justify-content: center;
            }
            h2
            {
                color:ghostwhite;
                text-align: center;
                margin-top: 40px;
                padding: 5px;
                font-size: 30px;
            }
       .box2
      {
        margin-top: 120px;
      }

                table,th,td,tr
                {
                  border: 2px solid orange;
                    border-collapse: collapse;
                    text-align: center;
                    padding: 5px 10px;
                    font-size: 20px;
                }
                table
                {
                  margin-top: -50px;
                  display: flex;
                  justify-content: center;
                  border: none;
                  color:white;
                
                }
                input
                {
                    border: none;
                    font-size:25px;
                    padding:6px;
                    border-bottom-left-radius:10px;
                    border-top-left-radius:10px;
                }
                button
                {
                    padding: 6px 10px;
                    border: none;
                    font-size: 25px;
                    cursor: pointer;
                    border-bottom-right-radius: 10px;
                    border-top-right-radius: 10px;
                    background:darkgrey;
                }
                button:hover
                {
                    background-color: #0066cc;
                }
                i
                {
                    color:white;
                }
                i:hover
                {
                    color:red;
                }

</style>
</head>
<body>
  <header>
    <h1>Entry-Exit Management System</h1>
  </header>

  <nav>
    <a href="main.php">HOME</a> |
    <a href="about.php">ABOUT</a> |
    <a href="login.php">ADMIN</a> |
    <a href="appointment.php">APPOINTMENT</a>
  </nav>
  
  <div class="form-container">
    
    <h2>Enter your name / phone / vehicle no. to search...</h2>
    <form method="post">
    <!-- <label>Search :</label> -->
    <!-- <h2>Enter your phone number to exit...</h2><br> -->
    <input type="text" name="search" placeholder="Search...">
    <button type="submit" name="submit"><i class="fa fa-search"></i></button>
   </form>
   <div class="box2">
     <table>
        <?php 
            if(isset($_POST['submit']))
{
  
  $search= $_POST['search'];
  $query="SELECT * FROM admin WHERE vehicle='$search' OR name='$search' OR phone='$search'";
    $result=mysqli_query($conn,$query);
    
    if ($result) 
    {
      ?>
      <?php
      if (mysqli_num_rows($result)>0) 
      {
        echo '
        <tr>
                <th class="w2">Name</th>
                <th class="w1">Purpose</th>
                <th class="w1">Phone number</th>
                <th class="w2">Gender</th>
                <th class="w2">Vehicle</th>
                <th class="w1">Entry time</th>
                <th class="w1">Exit </th>
            </tr>
            ';
             $row=mysqli_fetch_assoc($result);
             echo '
                  <tr>
                     <td> '.$row['name'].'</td>
                     <td> '.$row['purpose'].'</td>
                     <td> '.$row['phone'].'</td>
                     <td> '.$row['gender'].'</td>
                     <td> '.$row['vehicle'].'</td>
                     <td> '.$row['entry'].'</td>';
    ?>              
                     <td><a href="temporary.php?id=<?php echo $row['id'];?>"><i class="fa fa-sign-out"></i></a>
                    
                    </td>
                  </tr>
  <?php             
    } 
    else
        {
            echo "
    <script>
         alert('data not found');
    </script>
    ";

}
    
}
        
        else
        {
            echo "
    <script>
         alert('data not found');
    </script>
    ";

}

  }       ?>
                              
        </table>
   </div>
  </div>


   <footer>
    <p>&copy; 2023 Entry-Exit Management System. All rights reserved.<br>Designed by:- Nishant Khanna, Milandeep Kaur</p>
  </footer>
</body>
</html>
<?php
    if(isset($_POST['exit']))
{
    echo "
    <script>
         alert('exit done');
    </script>
    ";
    $exit=date("Y-m-d");
    $query = "INSERT INTO admin(exit)VALUES('$exit')";
    $result=mysqli_query($conn, $query );
    
}?>