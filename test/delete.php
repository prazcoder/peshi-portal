<?php
include("connection.php"); 

$idno=$_GET['sn'];
$pno=$_GET['dn'];
$query = "DELETE FROM PESHI WHERE mudaano='$idno' AND pesi = '$pno'";
$data=mysqli_query($conn,$query);
if($data){
	echo "<script>alert(RECORD DELETED)</script> ";
}
?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=report.php">
