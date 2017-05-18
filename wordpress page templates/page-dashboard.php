<!--
-
-
-Template Name: Dashboard
-
-
-->

<?php get_header(); ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="twelve columns">
		
		<h1><?php the_title(); ?></h1>
			
			</div>	
			
	</div></div>
	
		<!--content-->
		<div class="row" id="content_container">
			
			<!--left col--><div class="eight columns">
		
				<div id="left-col">
		
					<?php

//include 'connectionDB.php';
$server = "localhost";
	$user = "uwsinc_tester";
	$pw = "rO?;.WVSuWWi";
	$db = "uwsinc_staging";

	$connect = mysqli_connect($server, $user, $pw, $db);



	if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}else{
		echo'success!';
	}

$query1 = "SELECT * FROM staging;";
$result1 = mysqli_query($connect,$query1);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style type="text/css">
		table,td,th{
			border:1px solid black;
		}
		table{
			border-collapse: collapse;
		}
		td{
			border-collapse: collapse;
			/*border-right: none;
			border-left: none;*/
		}
		th{
			padding-left: 10px;
			padding-right:10px;
		}
		td{
			padding-left: 10px;
			padding-right:10px;
		}
	</style>
</head>
<body>

<form method="post" action="/selections">
	<input type="submit" name="submit" value="Search or Filter">
</form>

<form method="post" action="clients.php">
	<input type="submit" name="submit" value="View Clients">
</form>

<div class="dashboardTable">
<table style="border: 1px solid black;">
	<tr>
		<th>Work Order Packet</th>
		<th>Work Order Number</th>
		<th>Date</th>
		<th>Utility</th>
		<th>Service Name</th>
		<th>Address</th>
		<th>Serial No.</th>
	</tr>
	
<?php
  while($row = mysqli_fetch_array($result1)){
?>
	<tr>
		<td><? echo $row['workOrderPacket'];?>&nbsp;</td>
		<td><? echo $row['workOrderNum'];?>&nbsp;</td>
		<td><? echo $row['date'];?>&nbsp;</td>
		<td><? echo $row['utility'];?>&nbsp;</td>
		<td><? echo $row['serviceName'];?>&nbsp;</td>
		<td><? echo $row['address'];?>&nbsp;</td>
		<td><?php echo '<a href="linkDisplay.php?id='.$row['serialNumber'].'">'.$row['serialNumber'].'</a>'; ?>	</td>	<!--<td><a href="Display.php?serialNumber=<? //echo $row['serialNumber'];?>">view</a></td>-->
	</tr>
	<?}?>
</table>
</div>


</body>
</html>
				
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>