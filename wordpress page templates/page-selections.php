<!--
-
-
-Template Name: Selections
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
		  
            

                 <form method="post" action="display.php" enctype="multipart/form-data">

<?php
 

include 'connectionDB.php';

$query1 = "SELECT * FROM staging;";
$result1 = mysqli_query($connect,$query1);

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
	
?>

<br>

<label>Select Work Order Packet:</label>

<br>

<select name="workOrderPacket">

	<?php

	$sql = mysqli_query($connect, "SELECT stageID,workOrderPacket FROM staging;");
	while($row = $sql->fetch_assoc()){
		echo "<option value='{$row['stageID']}'>" . $row['workOrderPacket'] . "</option>";
	}
	?>	
	
</select>

<br>

<label>Select Work Order Number:</label>

<br>

<select name="workOrderNum">

	<?php

	$sql2 = mysqli_query($connect, "SELECT stageID,workOrderNum FROM staging;");
	while($row2 = $sql2->fetch_assoc()){
		echo "<option value='{$row2['stageID']}'>" . $row2['workOrderNum'] . "</option>";
	}
	?>	
	
</select>

<br>

<label>Select Serial Number:</label>

<br>

<select name="serialNumber">

	<?php

	$sql3 = mysqli_query($connect, "SELECT stageID,serialNumber FROM staging;");
	while($row3 = $sql3->fetch_assoc()){
		echo "<option value='{$row3['stageID']}'>" . $row3['serialNumber'] . "</option>";
	}
	?>	
	
</select>

<br>

<br>
<input type="submit" name="submit" value="Confirm" >
</form>
				
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>