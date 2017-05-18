<!--
-
-
-Template Name: Dash Display
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

  //$dataTest = $_REQUEST['serialNumber'];
  //echo $dataTest;

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Display Page</title>
	<link rel="stylesheet" href="style.css">
  <style type="text/css">
    .container{
      width: 1200px;
      margin: 0 auto;
      border: 1px black;
    }
    .TitleContainer{
      text-align: left;
      border: 1px black;
      margin:0 auto;
      max-width: 1200px;
      overflow: auto;
    }

  

  </style>
</head>
<body>
<?php
  
  if(isset($_GET['id'])) 
  {

  $query1 = "SELECT * FROM staging WHERE serialNumber = ".$_REQUEST['id'].";";
  $result1 = mysqli_query($connect,$query1);

  while($row = mysqli_fetch_array($result1)){
?>
<div class="container">
<!--Title Line-->
<DIV class="title">
<h3>REPORT TITLE</h3>
</DIV>

<div class="TitleContainer" style="width: 100%;">
<!--Column 1 for header info-->
<DIV class="headerCol1">	
<table style=" float: left; border:none;
    border-collapse:collapse;">
  <tr style="border: none;">
    <th style="border: none; text-align: left;">Account:</th>
    <th style="border: none; text-align: right;"><? echo $row['accountNum'];?>&nbsp;</th>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Date/Time:</td>
    <td style="border: none; text-align: right;"><? echo $row['date'];?>,&nbsp;&nbsp;<?echo $row['timeTested'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Utility:</td>
    <td style="border: none; text-align: right;"><? echo $row['utility'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">enQuesta No:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Siebel No:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Customer Name:</td>
    <td style="border: none; text-align: right;"><? echo $row['serviceName'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Customer Address:</td>
    <td style="border: none; text-align: right;"><? echo $row['address'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Corrected Address:</td>
    <td style="border: none; text-align: right;"><? echo $row['serviceAddCorrect'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Latitude:</td>
    <td style="border: none; text-align: right;"><? echo $row['latitude'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Longitude:</td>
    <td style="border: none; text-align: right;"><? echo $row['longitude'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Zone Code:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Premise No:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Plat Card No:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Premise Type:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Technician:</td>
    <td style="border: none; text-align: right;"><? echo $row['technician'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Test Equipment:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Line Pressure:</td>
    <td style="border: none; text-align: right;"><? echo $row['linePressurePSI'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Estimated Water Loss:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
</table>
</DIV>

<!--Column 2 for header info-->
<DIV class="headerCol1">
<table style=" float: right; border:none;
    border-collapse:collapse;">
  <tr style="border: none;">
    <th style="border: none; text-align: left;">Work Order Number:</th>
    <th style="border: none; text-align: right;"><? echo $row['workOrderNum'];?>&nbsp;</th>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">WO Package:</td>
    <td style="border: none; text-align: right;"><? echo $row['workOrderPacket'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">WO Transmittal Date:</td>
    <td style="border: none; text-align: right;"><? echo $row['date'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Group WO No:</td>
    <td style="border: none; text-align: right;"><? echo $row['workOrderNum'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Activity Code:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Service Preformed:</td>
    <td style="border: none; text-align: right;"><? echo $row['workOrderType2'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Serial No:</td>
    <td style="border: none; text-align: right;"><? echo $row['serialNumber'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Corrected Meter No:</td>
    <td style="border: none; text-align: right;"><? echo $row['meterNumberCorrect'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter No. From Low Side:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Nos. Are Unreadable:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Manufacturer:</td>
    <td style="border: none; text-align: right;"><? echo $row['manufacturer'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Type:</td>
    <td style="border: none; text-align: right;"><? echo $row['meterType'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Size:</td>
    <td style="border: none; text-align: right;"><? echo $row['meterSize'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Model:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Bypass Size:</td>
    <td style="border: none; text-align: right;"><? echo $row['bypassValveSize'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Registration:</td>
    <td style="border: none; text-align: right;"><? echo $row['registration'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style="border: none; text-align: left;">Meter Model Change:</td>
    <td style="border: none; text-align: right;"></td>
  </tr>
</table>	
</DIV>
</div>
&nbsp;
<br>
<br>

<!--NOTES/COMMENTS SECTION-->
<div style="clear: both;">
<table style="width: 100%; text-align: left;border:none;
    border-collapse:collapse;"">
  <tr style="border: none;">
    <th style="text-align: left; border-bottom: none;">Meter Location Notes:</th>
  </tr>
  <tr style="border: none;">
    <td style="text-align: left; border-top: none;"><? echo $row['locationNotes'];?>&nbsp;</td>
  </tr>
</table>
&nbsp;
<table style="width: 100%; text-align: left;">
  <tr style="border: none;">
    <th style="text-align: left; border-bottom: none;">Corrected Meter Location Notes:</th>
  </tr>
  <tr style="border: none;">
    <td style="text-align: left; border-top:none;"><? echo $row['locationComments'];?>&nbsp;</td>
  </tr>
</table>
&nbsp;
<table style="width: 100%; text-align: left;">
  <tr style="border: none;">
    <th style="text-align: left; border-bottom: none;">Comments:</th>
  </tr>
  <tr style="border: none;">
    <td style="text-align: left;  border-top:none;"><? echo $row['comments'];?>&nbsp;</td>
  </tr>
</table>
</div>
&nbsp;




<div class="mainTables" style="clear: both;">
<div class="FirstMainGroup">
<div class="qaTable" style="width:50%;float: left;text-align: left;">
<!--Qa Table-->
<table style="width: 100%; text-align: left;">
  <tr style="text-align: left;">
    <th colspan="2" style="text-align: left;">Qa/Qc CheckList</th>
  </tr>
  <tr>
    <td style="text-align: left;">Service Address Correct</td>
    <td><? echo $row['serviceAddCorrect'];?>&nbsp;</td>
  </tr>
   <tr style="text-align: left;">
    <td style="text-align: left;">Service Loc Correct</td>
    <td><? echo $row['serviceLoccCorrect'];?>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">Meter Number Correct</td>
    <td><? echo $row['meterNumberCorrect'];?>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">Meter Manufacturer Changed</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">Meter Type Changed</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">Meter Model Changed</td>
    <td>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">Low Register Correct</td>
    <td><? echo $row['lowRegisterCorrect'];?>&nbsp;</td>
  </tr>
  <tr style="text-align: left;">
    <td style="text-align: left;">High Register Correct</td>
    <td><? echo $row['highRegisterCorrect'];?>&nbsp;</td>
  </tr>
</table>
<br>
<br>
</div>

<!--Situation Table-->
<div class="situationTable" style="width: 40%;float: right;">
<table style="width: 100%;">
  <tr>
    <th style="text-align: left;">Situation</th>
    <th>Arrival</th>
    <th>Departure</th>
    <th>Change</th>
  </tr>
  <tr>
    <td style="text-align: left;">Register Pins Installed</td>
    <td><? echo $row['registerPinArriv'];?>&nbsp;</td>
    <td><? echo $row['registerPinDepart'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Bypass Locked</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Bypass Open</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Water On</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
</div>
</div>


<!--Meter Test (1) Table-->
<div class="FirstMeterTable" style=" width:100%; clear: both;">
	<table style="width:100%; border:none;
    border-collapse:collapse;">
		<tr style="border:none;">
			<th style="border:none; text-align: left;" >Meter Test</th>
			<th style="border:none;">Test 1</th>
			<th style="border:none;">Test 2</th>
			<th style="border:none;">Test 3</th>
			<th style="border:none;">Test 4</th>
			<th style="border:none;">Test 5</th>
			<th style="border:none;">Test 6</th>
			<th style="border:none;">Test 7</th>
			<th style="border:none;">Test 8</th>
		</tr>
		<tr style="border: none;" >
			<td style="border:none; text-align: left;">Test Rate GPM: </td>
			<td><? echo $row['test1TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test2TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test3TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test4TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test5TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test6TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test7TestRateGPM'];?>&nbsp;</td>
			<td><? echo $row['test8TestRateGPM'];?>&nbsp;</td>
		</tr>
		<tr>
			<td style="border:none; text-align: left;">Meter Volume: </td>
			<td><? echo $row['test1MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test2MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test3MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test4MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test5MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test6MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test7MeterVol'];?>&nbsp;</td>
			<td><? echo $row['test8MeterVol'];?>&nbsp;</td>
		</tr>
		<tr>
			<td style="border:none; text-align: left;">Tester Volume: </td>
			<td><? echo $row['test1TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test2TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test3TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test4TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test5TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test6TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test7TesterVol'];?>&nbsp;</td>
			<td><? echo $row['test8TesterVol'];?>&nbsp;</td>
		</tr>
		<tr>
			<td style="border:none; text-align: left;">Tester Accuracy: </td>
			<td><? echo $row['test1Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test2Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test3Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test4Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test5Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test6Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test7Accuracy'];?>&nbsp;</td>
			<td><? echo $row['test8Accuracy'];?>&nbsp;</td>
			<td style="border:none;">Overall</td>
		</tr>
		<tr>
			<td style="border:none; text-align: left;">Corrected Accuracy: </td>
			<td><? echo $row['test1CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test2CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test3CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test4CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test5CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test6CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test7CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row['test8CorrectAcc'];?>&nbsp;</td>
			<td><? echo $row[''];?>&nbsp;</td>
		</tr>
	</table>
</div>
<br>
<br>


  <!--Meter Test (2) Table-->
<div class="SecondMeterTable" style=" width:100%; clear: both;">
	<table style="width:100%; border:none;
    border-collapse:collapse;">
		<tr style="border:none;">
			<th style="border:none; text-align: left;">Meter Retest</th>
			<th style="border:none;">Test 1</th>
			<th style="border:none;">Test 2</th>
			<th style="border:none;">Test 3</th>
			<th style="border:none;">Test 4</th>
			<th style="border:none;">Test 5</th>
			<th style="border:none;">Test 6</th>
			<th style="border:none;">Test 7</th>
			<th style="border:none;">Test 8</th>
		</tr>
		<tr style="border:none;">
			<td style="border:none; text-align: left;">Test Rate GPM: </td>
			<td><? echo $row['test1TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test2TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test3TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test4TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test5TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test6TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test7TestRateGPM2'];?>&nbsp;</td>
			<td><? echo $row['test8TestRateGPM2'];?>&nbsp;</td>
		</tr>
		<tr style="border:none;">
			<td style="border:none; text-align: left;">Meter Volume: </td>
			<td><? echo $row['test1MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test2MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test3MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test4MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test5MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test6MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test7MeterVol2'];?>&nbsp;</td>
			<td><? echo $row['test8MeterVol2'];?>&nbsp;</td>
		</tr>
		<tr style="border:none;">
			<td style="border:none; text-align: left;">Tester Volume: </td>
			<td><? echo $row['test1TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test2TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test3TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test4TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test5TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test6TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test7TesterVol2'];?>&nbsp;</td>
			<td><? echo $row['test8TesterVol2'];?>&nbsp;</td>
		</tr>
		<tr style="border:none;">
			<td style="border:none; text-align: left;">Tester Accuracy: </td>
			<td><? echo $row['test1Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test2Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test3Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test4Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test5Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test6Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test7Accuracy2'];?>&nbsp;</td>
			<td><? echo $row['test8Accuracy2'];?>&nbsp;</td>
			<td style="border:none;">Overall</td>
		</tr>
		<tr style="border:none;">
			<td style="border:none; text-align: left;">Corrected Accuracy: </td>
			<td><? echo $row['test1CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test2CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test3CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test4CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test5CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test6CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test7CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row['test8CorrectAcc2'];?>&nbsp;</td>
			<td><? echo $row[''];?>&nbsp;</td>
		</tr>
	</table>
</div>
<br>
<br>


<div class="registerGroup" style="width: 100%;">
<!--Register Info Table-->
<div class="registerInfo" style="float: left;width: 50%">
<table style="width: 100%;">
  <tr>
    <th rowspan="2" style="text-align: left;">Register Information</th>
    <th colspan="2">Upon Arrival</th>
    <th colspan="2">Upon Departure</th>
  </tr>
  <tr>
    <!--<td>&nbsp;</td>-->
    <td>High Side</td>
    <td>Low Side</td>
    <td>High Side</td>
    <td>Low Side</td>
  </tr>
   <tr>
    <td style="text-align: left;">Register/MIU No.</td>
    <td><? echo $row['highSideMIUNumArriv'];?>&nbsp;</td>
    <td><? echo $row['lowSideMIUNumArriv'];?>&nbsp;</td>
    <td><? echo $row['highSideMIUNumDepart'];?>&nbsp;</td>
    <td><? echo $row['lowSideMIUNumDepart'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Register Size</td>
    <td><? echo $row['highRegisterSize'];?>&nbsp;</td>
    <td><? echo $row['lowRegisterSize'];?>&nbsp;</td>
    <td><? echo $row['highRegisterSize'];?>&nbsp;</td>
    <td><? echo $row['lowRegisterSize'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Register Type</td>
    <td><? echo $row['highRegisterType'];?>&nbsp;</td>
    <td><? echo $row['lowRegisterType'];?>&nbsp;</td>
    <td><? echo $row['highRegisterType'];?>&nbsp;</td>
    <td><? echo $row['lowRegisterType'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
 </div>

 <!--Register Reading Table-->
 <div class="registerReading" style="float: right; width: 40%;">
<table style="width: 100%;">
  <tr>
    <th style="text-align: left;">Register Readings</th>
    <th>Upon Arrival</th>
    <th>After Meter Test</th>
  </tr>
   <tr>
    <td style="text-align: left;">AMR</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Low Side</td>
    <td><? echo $row['lowSideRrBefore'];?>&nbsp;</td>
    <td><? echo $row['lowSideRrAfter'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">High Side</td>
    <td><? echo $row['highSideRrBefore'];?>&nbsp;</td>
    <td><? echo $row['highSideRrAfter'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Fire Side</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
</div>
</div>

   <!--Leakage Table-->
<div class="leakageVaultGases">
<div class="leakage" style="float: left; width: 70%;">
<table style="width: 100%;">
  <tr>
    <th style="text-align: left;">Apparent Leakage</th>
    <th>Inside Box</th>
    <th>Outside Box</th>
    <th>City Side of Meter</th>
    <th>Customer Side of Meter</th>
    <th>Can't Tell</th>
    <th>Leaking Upon Arrival</th>
    <th>Leaking upon Departure</th>
  </tr>
   <tr>
    <td style="text-align: left;">Meter Leak</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
    <td rowspan="6"><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Pipe Leak</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Inlet Valve</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Outlet Valve</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Bypass Valve</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Source Unknown</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
  </div>


  <!--Vault Gases Table-->
  <div class="vaultGases" style="float: right; width: 20%;">
<table style="width: 100%; height: 25%;">
  <tr>
    <th colspan="2" height="40">Vault Gases</th>
  </tr>
  <tr>
    <td style="text-align: left;">Oxygen</td>
    <td><? echo $row['vgOxygen'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Combustible gas</td>
    <td><? echo $row['vgCombustGas'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Carbon Monoxide</td>
    <td><? echo $row['vgCarbonMon'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Hydrogen Sulfide</td>
    <td><? echo $row['vgHydroSulf'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
  </div>
</div>


<div class="valveInfoMeterLocGroup" style="clear:both;">
    <!--Valve Info Table-->
    <div class="valveInfo" style="float: left; width: 50%">
<table style="width: 100%; border:none;
    border-collapse:collapse;">
  <tr>
    <th style="text-align: left;">Valve Information</th>
    <th>Size</th>
    <th>Type</th>
    <th>Condition</th>
  </tr>
   <tr>
    <td style="text-align: left;">Inlet Valve</td>
    <td><? echo $row['inletValveSize'];?>&nbsp;</td>
    <td><? echo $row['inletValveType'];?>&nbsp;</td>
    <td><? echo $row['inletValveCond'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Outlet Valve</td>
    <td><? echo $row['outletValveSize'];?>&nbsp;</td>
    <td><? echo $row['outletValveType'];?>&nbsp;</td>
    <td><? echo $row['outletValveCond'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Bypass Valve</td>
    <td><? echo $row['bypassValveSize'];?>&nbsp;</td>
    <td><? echo $row['bypassValveType'];?>&nbsp;</td>
    <td><? echo $row['bypassValveCond'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Vault Dimensions</td>
    <td><? echo $row['vaultLength'];?>&nbsp;</td>
    <td><? echo $row['vaultWidth'];?>&nbsp;</td>
    <td><? echo $row['vaultHeight'];?>&nbsp;</td>
  </tr>
   <tr style="border:none;">
    <td style="border-left:none; border-bottom: none;">&nbsp;</td>
    <td>Length</td>
    <td>Width</td>
    <td>Depth</td>
  </tr>
  </table>
  <br>
  <br>
  </div>

    <!--Meter Location Table-->
    <div class="meterLocation" style="float:right; width: 30%;">
<table style="width: 100%;">
  <tr>
    <th colspan="2">Meter Location</th>
  </tr>
  <tr>
    <td style="text-align: left;">Vault/Pit</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Other Outside</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Basement</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Mechanical Room</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Boiler Room</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Hot Box</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Other Inside</td>
    <td><? echo $row['meterLocation'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
  </div>
</div>

<div class="testRepairGroup" style="border: 1px #fff;">
<div class="testResults" style=" width: 30%; clear:both; float: left;">
 <!--Test Results Table-->
<table style="width: 100%;">
  <tr>
    <th colspan="2">Test Results</th>
  </tr>
  <tr>
    <td style="text-align: left;">Tested Within AWWA Standards</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Meter Failed on Low Side</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Meter Failed on High Side</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Meter Failed Low and High Side</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Unable To Test</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
  <!--Asset Conditions Table-->
  <div class="assetsTable" style="width: 100%; float: left;">
<table style="width: 100%;">
  <tr>
    <th colspan="2">Asset Conditions</th>
  </tr>
  <tr>
    <td style="text-align: left;">Meter Lid Present</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Meter Lid Type</td>
    <td><? echo $row['meterLidType'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Meter Lid Material</td>
    <td><? echo $row['meterLidMaterial'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Lid Fit</td>
    <td><? echo $row['lidFit'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Lid Condition</td>
    <td><? echo $row['lidCondition'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Vault Type</td>
    <td><? echo $row['vaultType'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Vault Ladder</td>
    <td><? echo $row['vaultLadder'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Register Condition</td>
    <td><? echo $row['registerCondition'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Antenna Condition</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Antennae Position</td>
    <td><? echo $row['antennaePosition'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Antennae Mount Cor?</td>
    <td><? echo $row['antennaeMountCor'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Strainer Present</td>
    <td><? echo $row['strainerPresent'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
</div>
</div>


  <!--Repairs Completed Table-->
  <div class="repairsCompleted" style=" width: 50%; float:right;">
<table style="width: 100%; height: 60%;">
  <tr>
    <th>Repairs Completed</th>
    <th>Labor</th>
    <th>Materials</th>
    <th>Total</th>
  </tr>
   <tr>
    <td style="text-align: left;">Complete Meter</td>
    <td><? echo $row['repairCompleteMeterReplacementLaborCost'];?>&nbsp;</td>
    <td><? echo $row['repairCompleteMeterReplacement'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">UME</td>
    <td><? echo $row['umeLaborCost'];?>&nbsp;</td>
    <td><? echo $row['umeCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Disc Chamber</td>
    <td><? echo $row['rotatingLowSideDiskChamberLaborCost'];?>&nbsp;</td>
    <td><? echo $row['rotatingLowSideDiskChamber'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Turbine Chamber</td>
    <td><? echo $row['turbineChamberLaborCost'];?>&nbsp;</td>
    <td><? echo $row['turbineChamberCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Automatic Valve</td>
    <td><? echo $row['automaticValveLaborCost'];?>&nbsp;</td>
    <td><? echo $row['automaticValveCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Strainer</td>
    <td><? echo $row['strainerLaborCost'];?>&nbsp;</td>
    <td><? echo $row['strainerCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Low Register</td>
    <td><? echo $row['lowRegisterLaborCost'];?>&nbsp;</td>
    <td><? echo $row['lowRegisterCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">High Register</td>
    <td><? echo $row['highRegisterLaborCost'];?>&nbsp;</td>
    <td><? echo $row['highRegisterCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">MIU</td>
    <td><? echo $row['miuLaborCost'];?>&nbsp;</td>
    <td><? echo $row['miuCost'];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Antennae Replaced</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Antenna Mounted</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Switched Registers</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Calibration</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Meter Leak Repaired</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Total</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
    <td><? echo $row[''];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
</div>
</div>


<div class="workOrderCityGroup" style="clear: both;">
 <!--Work Order Type Table-->
 <div class="workOrderTable" style="width:30%; float: left;">
<table style="width: 100%; height: 30%; border: none; border-collapse: collapse;">
  <tr>
    <th>Work Order Type</th>
    <th>Cost</th>
  </tr>
  <tr>
    <td style="text-align: left;">Onsite Survey and Test</td>
    <td><? echo $row['onsiteSurveyTestCost'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Offsite Survey and Test</td>
    <td><? echo $row['offsiteSurveyTestCost'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Offsite Survey Test and Repair</td>
    <td><? echo $row['offsiteSurveyTestRepairCost'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Onsite Test Only</td>
    <td><? echo $row['onsiteTestOnlyCost'];?>&nbsp;</td>
  </tr>
   <tr>
    <td style="text-align: left;">Onsite Repair Only</td>
    <td><? echo $row['onsiteRepairOnly'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Return Repair Only</td>
    <td><? echo $row['orderNumber'];?>&nbsp;</td>
  </tr>
  <tr style="border: none;">
    <td style=" text-align:left; border-left: none;border-bottom: none; border-right: none;">Total Cost for Work Order and Repairs:</td>
    <td style="border-left: none;border-bottom: none; border-right: none;"><!--This is total of repair and WO--></td>
  </tr>
  </table>
  <br>
  <br>
</div>

<!--Required Repairs for City Table-->
<div class="cityTable" style="width:50%; float: right;">
<table style="width: 100%;">
  <tr>
    <th colspan="2">Required Repairs for City</th>
  </tr>
  <tr>
    <td style="text-align: left;">Locate/Uncover Bypass Valve</td>
    <td><? echo $row['locateBypassValve'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Locate/Uncover Inlet Valve</td>
    <td><? echo $row['locateInletValve'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Locate/Uncover Outlet Valve</td>
    <td><? echo $row['locateOutletValve'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Preform Shut-Down</td>
    <td><? echo $row['PreformShutdown'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Turn on Water</td>
    <td><? echo $row['turnOnWater'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Lid</td>
    <td><? echo $row['repairLid'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Vault</td>
    <td><? echo $row['repairVault'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Ladder</td>
    <td><? echo $row['repairLadder'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Leak</td>
    <td><? echo $row['repairLeak'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Bypass Valve</td>
    <td><? echo $row['repairBypassValve'];?>&nbsp;</td>
  </tr>
    <tr>
    <td style="text-align: left;">Repair Inlet Valve</td>
    <td><? echo $row['repairInletValve'];?>&nbsp;</td>
  </tr>
  <tr>
    <td style="text-align: left;">Repair Outlet Valve</td>
    <td><? echo $row['repairOutletValve'];?>&nbsp;</td>
  </tr>
  </table>
  <br>
  <br>
  </div>
</div>



<!--Valve Operation Table-->
<!--This table will be commented out in final version but still needs to be formatted-->
<div class="valveOperation" style="width: 100%; clear: both;">
<table style="width: 100%;">
	<tr>
		<th rowspan="2">Valve Operation Meter Test</th>
		<th rowspan="2">Valve No.</th>
		<th colspan="3">Valve Closing</th>
		<th colspan="3">Valve Opening</th>
		<th>Valve Opens</th>
		<th>Vave Left</th>
	</tr>
	<tr>
		<!--<td></td>
		<td></td>-->
		<td>Date</td>
		<td>Time</td>
		<td>No. Turns</td>
		<td>Date</td>
		<td>Time</td>
		<td>No. Turns</td>
		<td>(LH/RH)</td>
		<td>(Open/Closed)</td>
	</tr>
	<tr>
		<td style="text-align: left;">Inlet Valve</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">Outlet Valve</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
	</tr>
	<tr>
		<td style="text-align: left;">Bypass Valve</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
		<td><? echo $row['orderNumber'];?>&nbsp;</td>
	</tr>
</table>
<br>
<br>


<div class="pictureDiv" style="width: 40%;">
<table style="width: 100%; height: 40%;">
	<tr>
		<th colspan="4" height="35" style="text-align: left;">Pictures:</th>
	</tr>
	<tr>
		<td colspan="4" rowspan="4"><? echo $row['picture'];?></td>
	</tr>
</table>
</div>

<?
}
}
?>
</div>
</div>
</body>
</html>
  </div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
    

<?php get_footer(); ?>