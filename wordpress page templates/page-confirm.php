<!--
-
-
-Template Name: Confirm
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


/*PREVIEW BUTTON*/

	if(isset($_POST['preview']))
	{
	ini_set('auto_detect_line_endings', true);

	$file = $_FILES["file"]["tmp_name"];
	$handle = fopen($file, "r");
	$maxPreviewRows = PHP_INT_MAX;  // this will be ~2 billion on 32-bit system, or ~9 quintillion on 64-bit system
	$hasHeaderRow = true;

		echo '<table>';

		/*WE WILL NEED TO QA CONDITIONS AND HIGHLIGHT IN RED HERE. ALSO NEED BORDER STYLINGS*/

		if ($hasHeaderRow) {
		    $headerRow = fgetcsv($handle);
		    echo '<thead><tr>';
		    foreach($headerRow as $value) {
		        echo "<th>$value</th>";
		    }
		    echo '</tr></thead>';
		}

		echo '<tbody>';

		$rowCount = 0;
		while ($row = fgetcsv($handle)) {
		    echo '<tr>';
		    foreach($row as $value) {
		        echo "<td>$value</td>";
		    }
		    echo '</tr>';

		    if (++$rowCount > $maxPreviewRows) {
		        break;
		    }
		}
		echo '</tbody></table>';

	}
?>
</div>



<?php
/*
	$server = "localhost";
	$user = "root";
	$pw = "root";
	$db = "uwsTest";

	$connect = mysqli_connect($server, $user, $pw, $db);

	if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}else{
		echo'success!';
	}
*/

/*SUBMIT BUTTON*/
				if(isset($_POST['submit']))
				{

				$file = $_FILES["file"]["tmp_name"];

				$handle = fopen($file, "r");
				$filesop = fgetcsv($handle, 0, ",");

				while (($filesop = fgetcsv($handle)) !== FALSE) {

				$coldata = array();

				$coldata["orderNumber"] = $filesop[0];
				$coldata["workOrderPacket"] = $filesop[1];
				$coldata["workOrderNum"] = $filesop[2];
				$coldata["lowSideMIUNumArriv"] = $filesop[3];
				$coldata["lowSideMIUNumDepart"] = $filesop[4];
				$coldata["highSideMIUNumArriv"] = $filesop[5];
				$coldata["highSideMIUNumDepart"] = $filesop[6];
				$coldata["accountNum"] = $filesop[7];
				$coldata["filler1"] = $filesop[8];
				$coldata["address"] = $filesop[9];
				$coldata["filler2"] = $filesop[10];
				$coldata["date"] = $filesop[11];
				$coldata["utility"] = $filesop[12];
				$coldata["serialNumber"] = $filesop[13];
				$coldata["serviceName"] = $filesop[14];
				$coldata["locationNotes"] = $filesop[15];
				$coldata["locationComments"] = $filesop[16];
				$coldata["filler3"] = $filesop[17];
				$coldata["WaterValveArriv"] = $filesop[18];
				$coldata["WaterValveDepart"] = $filesop[19];
				$coldata["meterSize"] = $filesop[20];
				$coldata["meterType"] = $filesop[21];
				$coldata["manufacturer"] = $filesop[22];
				$coldata["registration"] = $filesop[23];
				$coldata["technician"] = $filesop[24];
				$coldata["linePressurePSI"] = $filesop[25];
				$coldata["filler4"] = $filesop[26];
				$coldata["filler5"] = $filesop[27];
				$coldata["lowSideRrBefore"] = $filesop[28];
				$coldata["highSideRrBefore"] = $filesop[29];
				$coldata["lowSideRrAfter"] = $filesop[30];
				$coldata["highSideRrAfter"] = $filesop[31];
				$coldata["vgOxygen"] = $filesop[32];
				$coldata["vgCombustGas"] = $filesop[33];
				$coldata["vgCarbonMon"] = $filesop[34];
				$coldata["vgHydroSulf"] = $filesop[35];
				$coldata["test1TestRateGPM"] = $filesop[36];
				$coldata["test1MeterVol"] = $filesop[37];
				$coldata["test1TesterVol"] = $filesop[38];
				$coldata["test1Accuracy"] = $filesop[39];
				$coldata["test1CorrectAcc"] = $filesop[40];
				$coldata["test2TestRateGPM"] = $filesop[41];
				$coldata["test2MeterVol"] = $filesop[42];
				$coldata["test2TesterVol"] = $filesop[43];
				$coldata["test2Accuracy"] = $filesop[44];
				$coldata["test2CorrectAcc"] = $filesop[45];
				$coldata["test3TestRateGPM"] = $filesop[46];
				$coldata["test3MeterVol"] = $filesop[47];
				$coldata["test3TesterVol"] = $filesop[48];
				$coldata["test3Accuracy"] = $filesop[49];
				$coldata["test3CorrectAcc"] = $filesop[50];
				$coldata["test4TestRateGPM"] = $filesop[51];
				$coldata["test4MeterVol"] = $filesop[52];
				$coldata["test4TesterVol"] = $filesop[53];
				$coldata["test4Accuracy"] = $filesop[54];
				$coldata["test4CorrectAcc"] = $filesop[55];
				$coldata["test5TestRateGPM"] = $filesop[56];
				$coldata["test5MeterVol"] = $filesop[57];
				$coldata["test5TesterVol"] = $filesop[58];
				$coldata["test5Accuracy"] = $filesop[59];
				$coldata["test5CorrectAcc"] = $filesop[60];
				$coldata["test6TestRateGPM"] = $filesop[61];
				$coldata["test6MeterVol"] = $filesop[62];
				$coldata["test6TesterVol"] = $filesop[63];
				$coldata["test6Accuracy"] = $filesop[64];
				$coldata["test6CorrectAcc"] = $filesop[65];
				$coldata["test7TestRateGPM"] = $filesop[66];
				$coldata["test7MeterVol"] = $filesop[67];
				$coldata["test7TesterVol"] = $filesop[68];
				$coldata["test7Accuracy"] = $filesop[69];
				$coldata["test7CorrectAcc"] = $filesop[70];
				$coldata["test8TestRateGPM"] = $filesop[71];
				$coldata["test8MeterVol"] = $filesop[72];
				$coldata["test8TesterVol"] = $filesop[73];
				$coldata["test8Accuracy"] = $filesop[74];
				$coldata["test8CorrectAcc"] = $filesop[75];
				$coldata["inletValveLoc"] = $filesop[76];
				$coldata["inletValveSize"] = $filesop[77];
				$coldata["InletValveType"] = $filesop[78];
				$coldata["inletValveCond"] = $filesop[79];
				$coldata["outletValveLoc"] = $filesop[80];
				$coldata["outletValveSize"] = $filesop[81];
				$coldata["outletValveType"] = $filesop[82];
				$coldata["outletValveCond"] = $filesop[83];
				$coldata["bypassValveLoc"] = $filesop[84];
				$coldata["bypassValveSize"] = $filesop[85];
				$coldata["bypassValveType"] = $filesop[86];
				$coldata["bypassValveCond"] = $filesop[87];
				$coldata["vaultLength"] = $filesop[88];
				$coldata["vaultWidth"] = $filesop[89];
				$coldata["vaultHeight"] = $filesop[90];
				$coldata["meterLocation"] = $filesop[91];
				$coldata["testPort"] = $filesop[92];
				$coldata["testPortInstalled"] = $filesop[93];
				$coldata["testPortSize"] = $filesop[94];
				$coldata["picture"] = $filesop[95];
				$coldata["timeTested"] = $filesop[96];
				$coldata["comments"] = $filesop[97];
				$coldata["testResults"] = $filesop[98];
				$coldata["retest"] = $filesop[99];
				$coldata["test1TestRateGPM2"] = $filesop[100];
				$coldata["test1MeterVol2"] = $filesop[101];
				$coldata["test1TesterVol2"] = $filesop[102];
				$coldata["test1Accuracy2"] = $filesop[103];
				$coldata["test1CorrectAcc2"] = $filesop[104];
				$coldata["test2TestRateGPM2"] = $filesop[105];
				$coldata["test2MeterVol2"] = $filesop[106];
				$coldata["test2TesterVol2"] = $filesop[107];
				$coldata["test2Accuracy2"] = $filesop[108];
				$coldata["test2CorrectAcc2"] = $filesop[109];
				$coldata["test3TestRateGPM2"] = $filesop[110];
				$coldata["test3MeterVol2"] = $filesop[111];
				$coldata["test3TesterVol2"] = $filesop[112];
				$coldata["test3Accuracy2"] = $filesop[113];
				$coldata["test3CorrectAcc2"] = $filesop[114];
				$coldata["test4TestRateGPM2"] = $filesop[115];
				$coldata["test4MeterVol2"] = $filesop[116];
				$coldata["test4TesterVol2"] = $filesop[117];
				$coldata["test4Accuracy2"] = $filesop[118];
				$coldata["test4CorrectAcc2"] = $filesop[119];
				$coldata["test5TestRateGPM2"] = $filesop[120];
				$coldata["test5MeterVol2"] = $filesop[121];
				$coldata["test5TesterVol2"] = $filesop[122];
				$coldata["test5Accuracy2"] = $filesop[123];
				$coldata["test5CorrectAcc2"] = $filesop[124];
				$coldata["test6TestRateGPM2"] = $filesop[125];
				$coldata["test6MeterVol2"] = $filesop[126];
				$coldata["test6TesterVol2"] = $filesop[127];
				$coldata["test6Accuracy2"] = $filesop[128];
				$coldata["test6CorrectAcc2"] = $filesop[129];
				$coldata["test7TestRateGPM2"] = $filesop[130];
				$coldata["test7MeterVol2"] = $filesop[131];
				$coldata["test7TesterVol2"] = $filesop[132];
				$coldata["test7Accuracy2"] = $filesop[133];
				$coldata["test7CorrectAcc2"] = $filesop[134];
				$coldata["test8TestRateGPM2"] = $filesop[135];
				$coldata["test8MeterVol2"] = $filesop[136];
				$coldata["test8TesterVol2"] = $filesop[137];
				$coldata["test8Accuracy2"] = $filesop[138];
				$coldata["test8CorrectAcc2"] = $filesop[139];
				$coldata["filler6"] = $filesop[140];
				$coldata["filler7"] = $filesop[141];
				$coldata["filler8"] = $filesop[142];
				$coldata["filler9"] = $filesop[143];
				$coldata["filler10"] = $filesop[144];
				$coldata["filler11"] = $filesop[145];
				$coldata["filler12"] = $filesop[146];
				$coldata["serviceAddCorrect"] = $filesop[147];
				$coldata["serviceLoccCorrect"] = $filesop[148];
				$coldata["meterNumberCorrect"] = $filesop[149];
				$coldata["lowRegisterCorrect"] = $filesop[150];
				$coldata["lowRegisterType"] = $filesop[151];
				$coldata["lowRegisterSize"] = $filesop[152];
				$coldata["highRegisterCorrect"] = $filesop[153];
				$coldata["highRegisterSize"] = $filesop[154];
				$coldata["highRegisterType"] = $filesop[155];
				$coldata["meterLidType"] = $filesop[156];
				$coldata["meterLidMaterial"] = $filesop[157];
				$coldata["lidFit"] = $filesop[158];
				$coldata["lidCondition"] = $filesop[159];
				$coldata["antennaeMountCor"] = $filesop[160];
				$coldata["antennaePosition"] = $filesop[161];
				$coldata["registerCondition"] = $filesop[162];
				$coldata["MIUwire"] = $filesop[163];
				$coldata["registerPinArriv"] = $filesop[164];
				$coldata["registerPinDepart"] = $filesop[165];
				$coldata["vaultType"] = $filesop[166];
				$coldata["vaultSafe"] = $filesop[167];
				$coldata["vaultLadder"] = $filesop[168];
				$coldata["workOrderType"] = $filesop[169];
				$coldata["workOrderLocation"] = $filesop[170];
				$coldata["completeMeter"] = $filesop[171];
				$coldata["ume"] = $filesop[172];
				$coldata["discChamber"] = $filesop[173];
				$coldata["turbineChamber"] = $filesop[174];
				$coldata["automaticValve"] = $filesop[175];
				$coldata["strainer"] = $filesop[176];
				$coldata["lowRegister"] = $filesop[177];
				$coldata["highRegister"] = $filesop[178];
				$coldata["miu"] = $filesop[179];
				$coldata["antennae"] = $filesop[180];
				$coldata["calibrationVane"] = $filesop[181];
				$coldata["meterLeakRepaired"] = $filesop[182];
				$coldata["workOrderType2"] = $filesop[183];
				$coldata["strainerPresent"] = $filesop[184];
				$coldata["apparentLeak"] = $filesop[185];
				$coldata["leakLocation"] = $filesop[186];
				$coldata["leakType"] = $filesop[187];
				$coldata["locateBypassValve"] = $filesop[188];
				$coldata["locateInletValve"] = $filesop[189];
				$coldata["locateOutletValve"] = $filesop[190];
				$coldata["PreformShutdown"] = $filesop[191];
				$coldata["turnOnWater"] = $filesop[192];
				$coldata["repairLid"] = $filesop[193];
				$coldata["repairVault"] = $filesop[194];
				$coldata["repairLadder"] = $filesop[195];
				$coldata["repairLeak"] = $filesop[196];
				$coldata["repairBypassValve"] = $filesop[197];
				$coldata["repairInletValve"] = $filesop[198];
				$coldata["repairOutletValve"] = $filesop[199];
				$coldata["latitude"] = $filesop[200];
				$coldata["longitude"] = $filesop[201];
				$coldata["onsiteSurveyTestCost"] = $filesop[202];
				$coldata["onsiteSurveyTestRepairCost"] = $filesop[203];
				$coldata["offsiteSurveyTestCost"] = $filesop[204];
				$coldata["offsiteSurveyTestRepairCost"] = $filesop[205];
				$coldata["onsiteTestOnlyCost"] = $filesop[206];
				$coldata["onsiteTestRepairOnlyCost"] = $filesop[207];
				$coldata["onsiteRepairOnly"] = $filesop[208];
				$coldata["testPort2"] = $filesop[209];
				$coldata["repairCompleteMeterReplacement"] = $filesop[210];
				$coldata["repairCompleteMeterReplacementLaborCost"] = $filesop[211];
				$coldata["umeCost"] = $filesop[212];
				$coldata["umeLaborCost"] = $filesop[213];
				$coldata["rotatingLowSideDiskChamber"] = $filesop[214];
				$coldata["rotatingLowSideDiskChamberLaborCost"] = $filesop[215];
				$coldata["turbineChamberCost"] = $filesop[216];
				$coldata["turbineChamberLaborCost"] = $filesop[217];
				$coldata["automaticValveCost"] = $filesop[218];
				$coldata["automaticValveLaborCost"] = $filesop[219];
				$coldata["strainerCost"] = $filesop[220];
				$coldata["strainerLaborCost"] = $filesop[221];
				$coldata["lowRegisterCost"] = $filesop[222];
				$coldata["lowRegisterLaborCost"] = $filesop[223];
				$coldata["highRegisterCost"] = $filesop[224];
				$coldata["highRegisterLaborCost"] = $filesop[225];
				$coldata["miuCost"] = $filesop[226];
				$coldata["miuLaborCost"] = $filesop[227];
				$coldata["totalCost"] = $filesop[228];

$table_cols = array();
/*staging*/
$table_cols[0] = "orderNumber,workOrderPacket,workOrderNum,lowSideMIUNumArriv,lowSideMIUNumDepart,highSideMIUNumArriv,highSideMIUNumDepart,accountNum,filler1,address,filler2,date,utility,serialNumber,serviceName,locationNotes,locationComments,filler3,WaterValveArriv,WaterValveDepart,meterSize,meterType,manufacturer,registration,technician,linePressurePSI,filler4,filler5,lowSideRrBefore,highSideRrBefore,lowSideRrAfter,highSideRrAfter,vgOxygen,vgCombustGas,vgCarbonMon,vgHydroSulf,test1TestRateGPM,test1MeterVol,test1TesterVol,test1Accuracy,test1CorrectAcc,test2TestRateGPM,test2MeterVol,test2TesterVol,test2Accuracy,test2CorrectAcc,test3TestRateGPM,test3MeterVol,test3TesterVol,test3Accuracy,test3CorrectAcc,test4TestRateGPM,test4MeterVol,test4TesterVol,test4Accuracy,test4CorrectAcc,test5TestRateGPM,test5MeterVol,test5TesterVol,test5Accuracy,test5CorrectAcc,test6TestRateGPM,test6MeterVol,test6TesterVol,test6Accuracy,test6CorrectAcc,test7TestRateGPM,test7MeterVol,test7TesterVol,test7Accuracy,test7CorrectAcc,test8TestRateGPM,test8MeterVol,test8TesterVol,test8Accuracy,test8CorrectAcc,inletValveLoc,inletValveSize,InletValveType,inletValveCond,outletValveLoc,outletValveSize,outletValveType,outletValveCond,bypassValveLoc,bypassValveSize,bypassValveType,bypassValveCond,vaultLength,vaultWidth,vaultHeight,meterLocation,testPort,testPortInstalled,testPortSize,picture,timeTested,comments,testResults,retest,test1TestRateGPM2,test1MeterVol2,test1TesterVol2,test1Accuracy2,test1CorrectAcc2,test2TestRateGPM2,test2MeterVol2,test2TesterVol2,test2Accuracy2,test2CorrectAcc2,test3TestRateGPM2,test3MeterVol2,test3TesterVol2,test3Accuracy2,test3CorrectAcc2,test4TestRateGPM2,test4MeterVol2,test4TesterVol2,test4Accuracy2,test4CorrectAcc2,test5TestRateGPM2,test5MeterVol2,test5TesterVol2,test5Accuracy2,test5CorrectAcc2,test6TestRateGPM2,test6MeterVol2,test6TesterVol2,test6Accuracy2,test6CorrectAcc2,test7TestRateGPM2,test7MeterVol2,test7TesterVol2,test7Accuracy2,test7CorrectAcc2,test8TestRateGPM2,test8MeterVol2,test8TesterVol2,test8Accuracy2,test8CorrectAcc2,filler6,filler7,filler8,filler9,filler10,filler11,filler12,serviceAddCorrect,serviceLoccCorrect,meterNumberCorrect,lowRegisterCorrect,lowRegisterType,lowRegisterSize,highRegisterCorrect,highRegisterSize,highRegisterType,meterLidType,meterLidMaterial,lidFit,lidCondition,antennaeMountCor,antennaePosition,registerCondition,MIUwire,registerPinArriv,registerPinDepart,vaultType,vaultSafe,vaultLadder,workOrderType,workOrderLocation,completeMeter,ume,discChamber,turbineChamber,automaticValve,strainer,lowRegister,highRegister,miu,antennae,calibrationVane,meterLeakRepaired,workOrderType2,strainerPresent,apparentLeak,leakLocation,leakType,locateBypassValve,locateInletValve,locateOutletValve,PreformShutdown,turnOnWater,repairLid,repairVault,repairLadder,repairLeak,repairBypassValve,repairInletValve,repairOutletValve,latitude,longitude,onsiteSurveyTestCost,onsiteSurveyTestRepairCost,offsiteSurveyTestCost,offsiteSurveyTestRepairCost,onsiteTestOnlyCost,onsiteTestRepairOnlyCost,onsiteRepairOnly,testPort2,repairCompleteMeterReplacement,repairCompleteMeterReplacementLaborCost,umeCost,umeLaborCost,rotatingLowSideDiskChamber,rotatingLowSideDiskChamberLaborCost,turbineChamberCost,turbineChamberLaborCost,automaticValveCost,automaticValveLaborCost,strainerCost,strainerLaborCost,lowRegisterCost,lowRegisterLaborCost,highRegisterCost,highRegisterLaborCost,miuCost,miuLaborCost,totalCost";


$tablenames = array("staging"/*,"clients","meters","tests","costs","workorders"*/);



for($tableno = 0;$tableno < sizeof($tablenames);$tableno++){
	$q = "";
	//$q2 = "";
	//$q3 = "";
	//$q4 = "";
	//$q5 = "";
	//$q6 = "";
	$col_list = '`'.str_replace(',','`,`',$table_cols[$tableno]).'`';
	$q .= "INSERT INTO ".$tablenames[$tableno]." (".$col_list.") VALUES (";
	$last_id = mysqli_insert_id($connect);
	$cols = explode(",",$table_cols[$tableno]);
	$data = array();
	foreach($cols as $key => $fldname) {
		
		$data[] = "'".mysqli_real_escape_string($connect, $coldata[$fldname])."'";

	}

	/*INSERT INTO STAGING TABLE - INITAL CSV UPLOAD*/
	$q .= implode(",",$data).");";



	/*INSERT INTO CLIENTS TABLE FROM STAGING TABLE
	$q2 .= "INSERT INTO clients (orderNumber,place,workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,date,utility,serialNumber,serviceName,address2,servicePreformed)
	 SELECT orderNumber,place,workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,date,utility,serialNumber,serviceName,address2,servicePreformed
	 FROM staging
	 WHERE StageID = (SELECT MAX(StageID)FROM staging);";

	 /*INSERT INTO METERS TABLE FROM STAGING TABLE
	 $q3 .= "INSERT INTO meters (workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,utility,serialNumber,serviceName,bypassSize,meterSize,meterType,manufacturer,registration,technician,linePressurePSI,lat,lon,lowSideRrBefore,highSideRrBefore,firesideRrBefore,lowSideRrAfter,highSideRrAfter,firesideRrAfter,vgOxygen,vgCombustGas,vgCarbonMon,vgHydroSulf)
	 SELECT workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,utility,serialNumber,serviceName,bypassSize,meterSize,meterType,manufacturer,registration,technician,linePressurePSI,lat,lon,lowSideRrBefore,highSideRrBefore,firesideRrBefore,lowSideRrAfter,highSideRrAfter,firesideRrAfter,vgOxygen,vgCombustGas,vgCarbonMon,vgHydroSulf 
	 FROM staging
	 WHERE StageID = (SELECT MAX(StageID)FROM staging);";

	 /*INSERT INTO TESTS TABLE FROM STAGING TABLE
	 $q4 .= "INSERT INTO tests (workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,date,utility,serialNumber,serviceName,test1TestRateGPM,test1MeterVol,test1TesterVol,test1Accuracy,test1CorrectAcc,test2TestRateGPM,test2MeterVol,test2TesterVol,test2Accuracy,test2CorrectAcc,test3TestRateGPM,test3MeterVol,test3TesterVol,test3Accuracy,test3CorrectAcc,test4TestRateGPM,test4MeterVol,test4TesterVol,test4Accuracy,test4CorrectAcc,test5TestRateGPM,test5MeterVol,test5TesterVol,test5Accuracy,test5CorrectAcc,test6TestRateGPM,test6MeterVol,test6TesterVol,test6Accuracy,test6CorrectAcc,test7TestRateGPM,test7MeterVol,test7TesterVol,test7Accuracy,test7CorrectAcc,test8TestRateGPM,test8MeterVol,test8TesterVol,test8Accuracy,test8CorrectAcc,inletValveSize,InletValveType,inletValveCond,outletValveSize,outletValveType,outletValveCond,bypassValveSize,bypassValveType,bypassValveCond,vaultLength,vaultWidth,vaultHeight,meterLocation,testPort,testPortInstalled,testPortSize,picture,comments,testResults,retest,test1TestRateGPM2,test1MeterVol2,test1TesterVol2,test1Accuracy2,test1CorrectAcc2,test2TestRateGPM2,test2MeterVol2,test2TesterVol2,test2Accuracy2,test2CorrectAcc2,test3TestRateGPM2,test3MeterVol2,test3TesterVol2,test3Accuracy2,test3CorrectAcc2,test4TestRateGPM2,test4MeterVol2,test4TesterVol2,test4Accuracy2,test4CorrectAcc2,test5TestRateGPM2,test5MeterVol2,test5TesterVol2,test5Accuracy2,test5CorrectAcc2,test6TestRateGPM2,test6MeterVol2,test6TesterVol2,test6Accuracy2,test6CorrectAcc2,test7TestRateGPM2,test7MeterVol2,test7TesterVol2,test7Accuracy2,test7CorrectAcc2,test8TestRateGPM2,test8MeterVol2,test8TesterVol2,test8Accuracy2,test8CorrectAcc2)
	 SELECT workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,date,utility,serialNumber,serviceName,test1TestRateGPM,test1MeterVol,test1TesterVol,test1Accuracy,test1CorrectAcc,test2TestRateGPM,test2MeterVol,test2TesterVol,test2Accuracy,test2CorrectAcc,test3TestRateGPM,test3MeterVol,test3TesterVol,test3Accuracy,test3CorrectAcc,test4TestRateGPM,test4MeterVol,test4TesterVol,test4Accuracy,test4CorrectAcc,test5TestRateGPM,test5MeterVol,test5TesterVol,test5Accuracy,test5CorrectAcc,test6TestRateGPM,test6MeterVol,test6TesterVol,test6Accuracy,test6CorrectAcc,test7TestRateGPM,test7MeterVol,test7TesterVol,test7Accuracy,test7CorrectAcc,test8TestRateGPM,test8MeterVol,test8TesterVol,test8Accuracy,test8CorrectAcc,inletValveSize,InletValveType,inletValveCond,outletValveSize,outletValveType,outletValveCond,bypassValveSize,bypassValveType,bypassValveCond,vaultLength,vaultWidth,vaultHeight,meterLocation,testPort,testPortInstalled,testPortSize,picture,comments,testResults,retest,test1TestRateGPM2,test1MeterVol2,test1TesterVol2,test1Accuracy2,test1CorrectAcc2,test2TestRateGPM2,test2MeterVol2,test2TesterVol2,test2Accuracy2,test2CorrectAcc2,test3TestRateGPM2,test3MeterVol2,test3TesterVol2,test3Accuracy2,test3CorrectAcc2,test4TestRateGPM2,test4MeterVol2,test4TesterVol2,test4Accuracy2,test4CorrectAcc2,test5TestRateGPM2,test5MeterVol2,test5TesterVol2,test5Accuracy2,test5CorrectAcc2,test6TestRateGPM2,test6MeterVol2,test6TesterVol2,test6Accuracy2,test6CorrectAcc2,test7TestRateGPM2,test7MeterVol2,test7TesterVol2,test7Accuracy2,test7CorrectAcc2,test8TestRateGPM2,test8MeterVol2,test8TesterVol2,test8Accuracy2,test8CorrectAcc2
	 FROM staging
	 WHERE StageID = (SELECT MAX(StageID)FROM staging);";

	 /*INSERT INTO COSTS TABLE FROM STAGING TABLE
	 $q5 .= "INSERT INTO costs (workOrderNum,onsiteSurveyTestCost,onsiteSurveyTestRepairCost,offsiteSurveyTestCost,offsiteSurveyTestRepairCost,onsiteTestOnlyCost,onsiteTestRepairOnlyCost,onsiteRepairOnly,testPort2,repairCompleteMeterReplacement,repairCompleteMeterReplacementLaborCost,umeCost,umeLaborCost,rotatingLowSideDiskChamber,rotatingLowSideDiskChamberLaborCost,turbineChamberCost,turbineChamberLaborCost,automaticValveCost,automaticValveLaborCost,strainerCost,strainerLaborCost,lowRegisterCost,lowRegisterLaborCost,highRegisterCost,highRegisterLaborCost,miuCost,miuLaborCost,totalCost)
	 SELECT workOrderNum,onsiteSurveyTestCost,onsiteSurveyTestRepairCost,offsiteSurveyTestCost,offsiteSurveyTestRepairCost,onsiteTestOnlyCost,onsiteTestRepairOnlyCost,onsiteRepairOnly,testPort2,repairCompleteMeterReplacement,repairCompleteMeterReplacementLaborCost,umeCost,umeLaborCost,rotatingLowSideDiskChamber,rotatingLowSideDiskChamberLaborCost,turbineChamberCost,turbineChamberLaborCost,automaticValveCost,automaticValveLaborCost,strainerCost,strainerLaborCost,lowRegisterCost,lowRegisterLaborCost,highRegisterCost,highRegisterLaborCost,miuCost,miuLaborCost,totalCost 
	 FROM staging
	 WHERE StageID = (SELECT MAX(StageID)FROM staging);";

	 /*INSERT INTO WORKORDERS TABLE FROM STAGING TABLE
	 $q6 .= "INSERT INTO workorders (workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,utility,serialNumber,serviceName)
	 SELECT workOrderNum,lowSideMIUNum,highSideMIUNum,accountNum,custName,address,locID,utility,serialNumber,serviceName 
	 FROM staging
	 WHERE StageID = (SELECT MAX(StageID)FROM staging);";

	 /*DEBUG ALL SQL QUERIES*/
	echo "<p>\$q:<pre>".print_r($q,true)."</pre></p>\n";
	//echo "<p>\$q:<pre>".print_r($q2,true)."</pre></p>\n";
	//echo "<p>\$q:<pre>".print_r($q3,true)."</pre></p>\n";
	//echo "<p>\$q:<pre>".print_r($q4,true)."</pre></p>\n";
	//echo "<p>\$q:<pre>".print_r($q5,true)."</pre></p>\n";
	//echo "<p>\$q:<pre>".print_r($q6,true)."</pre></p>\n";
	//var_dump($cols);
	//var_dump($q);
	//var_dump($coldata);
	//var_dump($table_cols);
	if(mysqli_multi_query($connect, $q)) {echo'File submitted'; } else { /*var_dump($q)*/echo "Error: " . mysqli_error($connect); }

/*CONNECT OTHER QUERIES - NO ERROR PRINTING*/
//mysqli_multi_query($connect,$q2);
//mysqli_multi_query($connect,$q3);
//mysqli_multi_query($connect,$q4);
//mysqli_multi_query($connect,$q5);
//mysqli_multi_query($connect,$q6);

}
}

/*CONNECT INITAL QUERY AND GET ERROR*/

}
?>
				
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>