<?php
	include "../../cgi-bin/mysqlcred.php";

	$personId = $_GET['personId'];
	$deptId = $_GET['deptId'];
	$check = "SELECT * FROM `roleAssignment` WHERE `personId` = $personId AND `departmentId` = $deptId";
	$result = mysqli_query($link, $check);
	$row = mysqli_fetch_assoc($result);
	if(mysqli_num_rows($result) == 0){
		$sql = "INSERT INTO `roleAssignment`(`personId`, `roleId`, `departmentId`) VALUES ($personId, 3, $deptId)";
			mysqli_query($link, $sql);
	}
?>