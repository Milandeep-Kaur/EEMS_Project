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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>database</title>
	<style type="text/css">
		    table,th,td,tr
                {
                	border:3px solid #274759;
                	border-radius:5px;
                	 border-collapse: collapse;
                    text-align: center;
                    padding: 5px 10px;
                    font-size: 20px;
                }
                table
                {
                  margin-top: 30px;
                  margin-left: -30px;
                  border: none;

                }
        .date  
        {
          background:url("https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png");
          background-repeat: no-repeat;
          background-color: #fff;
          background-position: 95% 50%;
        }
       .date::-webkit-inner-spin-button 
       {
        display: none;
       }
       .date::-webkit-calendar-picker-indicator 
       {
          opacity: 0;
       }

		input
		{
			padding: 5px 7px;
			width: 170px;
			font-size: 15px;
			border-radius: 20px;
			
		}
		button
                {
                    padding: 7px 13px;
                    border: none;
                    background-color: #274759;
                    font-size: 15px;
                    cursor: pointer;
                    border-radius: 20px;
                }
                button:hover
                {
                    background-color: #bc986a;
                }
              i
              {
              	color:#274759;
              }
                i:hover
                {
                    color:#fbeec1;
                }
                label
                {
                	font-size: 20px;
                	font-weight: 600;
                }
	</style>
</head>
<body>
	<div class="container2">	
<form method="post">
	<label>From Date</label>&nbsp&nbsp&nbsp
	<input class="date" type="date" name="from_date" value="<?php if(isset($_POST['from_date'])){echo $_POST['from_date'];}?>">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<label>To Date</label>&nbsp&nbsp&nbsp
	<input class="date" type="date" name="to_date" value="<?php if(isset($_POST['to_date'])){echo $_POST['to_date'];}?>">
	<button type="submit" ><i class="fa fa-search"></i></button>

<table>

<?php
if(isset($_POST['from_date']) && isset($_POST['to_date']))
{
	$from_date=$_POST['from_date'];
	$to_date=$_POST['to_date'];
	$query="SELECT * FROM admin WHERE entry BETWEEN '$from_date' AND '$to_date'";
	$result= mysqli_query($conn,$query);
	?>
	<?php
	if(mysqli_num_rows($result)>0)
	{

	  echo '
		<tr>
			<!-- <th>ID</th> -->
			<th>Name</th>
			<th>Purpose</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Vehicle</th>
			<th>Entry</th>
		</tr>
	';
		while($row=mysqli_fetch_assoc($result))
		{
			?>
			<tr>
				<!-- <td><?=$row['id'];?></td> -->
				<td><?php echo $row['name'];?></td>
                <td><?php echo $row['purpose'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['vehicle'];?></td>
                <td><?php echo $row['entry'];?></td>  
                <!-- <td><?php echo $row['exit'];?></td>   -->
                  
			</tr>

			<?php
		}
		
	}
	else
	{
		echo "
		<script>
         alert('No Record Found');
    </script>
    ";
	}
}
?>
</table>
</form>
</div>
</body>
</html>
