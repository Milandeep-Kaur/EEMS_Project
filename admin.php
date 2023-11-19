 <?php 
include("common.php");
$host="localhost";
$user="root";
$password="";
$db="eems";
$conn=mysqli_connect($host,$user,$password,$db);
if ($conn==false)
{
    echo "connection error";
}
$query="select * from admin";
$result=mysqli_query($conn,$query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>admin dashboard</title>
<style type="text/css">
        table,td,th
        {
            border: 2px solid whitesmoke;
            border-collapse: collapse;
            /*width: 100%;*/
            text-align: center;
            margin-left:-120px;
        }
        td,th
        {
            padding:5px;

        }
        .w1{
            width:10%;
        }
        .w2{
            width:15%;
        }
    </style>
 </head>
 <body>
    <div class="container2">
        <form>
        <table>
            <tr>
                <th class="w2">Name</th>
                <th class="w1">Purpose</th>
                <th class="w1">Phone number</th>
                <th class="w2">Gender</th>
                <th class="w2">Vehicle</th>
                <th class="w1">Entry time</th>
                <th class="w1">Exit time</th>
            </tr>
            <tr>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['purpose'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['vehicle'];?></td>
                <td><?php echo $row['entry'];?></td>  
                <td><?php echo $row['exit'];?></td>  
                  
                
            </tr>
            <?php
                }
            ?>
            
        </table>
    </form>
    </div>
 </body>
 </html>