<?php 

	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);

?>

<html>
	<head>
		<title>
	Customer Details
		</title>
		<link rel = "stylesheet" type = "text/css" href = "buttons.css">
		<style>
			table {
			font-family: serif;
			border-collapse: collapse;
			width: 100%;
			}

			h2{
			font-family: monospace;
			font-size:37px;
			}
			
			td, th {
			border: 2px solid black;
			text-align: center;
			padding: 10px;
			cellspacing: 0;
			}
		</style>
	</head>

	<body style="background-image:url(11.jpg);background-repeat: no-repeat;background-size: cover;background-blend-mode:hard-light;">
		<div align="center" style="top:0px">
									
			<table width="100%" align="center">
				<tr>
					<td width="25%" style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>Home</strong></font></button></a></td>
					<td width="25%" style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>Transfer Money</strong></font></button></a></td>
					<td width="25%" style = "text-align:center;border:0px"><a href="transactionhistory.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>View Transaction History</strong></font></button></a></td>
				</tr>
			</table>
				
		</div>
			
		<br>	  
		<h2 style="color:black;text-align: left;font-family: serif;">Customer Details</h2>
		<table class="flat-table flat-table-1" align=center style="font-family: serif;color: black;">
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
					<td><?php echo  $row["Name"]; ?></td>
					<td><?php echo  $row["Email"]; ?></td>
					<td><?php echo  $row["Balance"]; ?></td>
				<tr align = center>
				<?php }
				?>
				</tr>

				
			</tbody>
		</table>
		
		
	</body>
</html>