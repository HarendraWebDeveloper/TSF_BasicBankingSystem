<?php

	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	
?>
<html>
<head>
    <meta name="author" content="Harendra Raghav">
	 <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	 <meta name="format-detection" content="telephone=no">
	<title>Transaction History</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
	<style>
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid black;
		text-align: center;
		padding: 10px;
		cellspacing: 0;
		}
		
	</style>
</head>
<body style="background-image:url(11.jpg);background-repeat: no-repeat;background-size: cover;background-blend-mode:hard-light; ">
<link rel = "stylesheet" type = "text/css" href = "style.css">

	<div align="center" style="top:0px">		  			
		<table width="100%" align="center">
			<tr>
		
            <td width="25%" style = "text-align:center;border:0px"> <a href="index.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong> Home </strong></font></button></a></td>	 	
			<td width="25%" style = "text-align:center;border:0px"><a href="customer.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>View Customers</strong></font></button></a></td>
			<td width="25%" style = "text-align:center;border:0px"><a href="Transfermoney.php" target="frame"><button class = "btn"><font face="arial" size="4" ><strong>Transfer Money</strong></font></button></a></td>
			</tr>
		</table>
	</div>

    <h1 style="color:black;text-align: left;font-family: serif;" >Transaction History</h1>
    <table style="font-family: serif;color: black;font-weight: bold;">
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT TRANSFERED</th>	
	</thead>
	<tbody>
		<tr align = center>
        <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Receiver"]; ?></td>
	<td><?php echo  $row["Amount"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
	<div class="four" style="font-family: serif;color: black;font-weight: bold;">HERE  IS  THE  LIST  OF  YOUR  SUCCESSFUL  TRANSACTIONS</div> 	
</body>
</html>
