<?php
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
	<meta name="author" content="Harendra Raghav">
	 <meta http-equiv="Content-Type" content="text/html: charset=utf-8">
	 <meta name="format-detection" content="telephone=no">
	<title>Customer Details</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: monospace; 
		font-size:30px;
		}
		
		td, th {
		border: 1px solid black;
		text-align: center;
		padding: 8px;
		}
	</style>
</head>
<body style="background-image:url(11.jpg);background-repeat: no-repeat;background-size: cover;background-blend-mode:hard-light; ">

	<div align="center" style="top:0px">		  			
		<table width="1316" align="center" class = "t">
			<tr>
            <td width="25%" style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong> Home </strong></font></button></a></td>	 	
			<td width="25%" style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>View Customers</strong></font></button></a></td>
			<td width="25%" style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>View Transaction History</strong></font></button></a></td>
            </tr>
        </table>
	</div>
    <h2 style="color:black;text-align: left;font-family: serif;" >Want to transfer money, click on the user name</h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["C_ID"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["Email"]; ?></td>
		<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
</body>
</html>