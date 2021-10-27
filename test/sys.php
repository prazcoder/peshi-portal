<?php
include("echo.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: loginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>हाल प्रकाशित</title>
  <link rel="shortcut icon" type="image/png" href="images/nepal.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="d-flex">
  <?php $page='sys'; include("sidenav.php");?>
  <div class="col-10">
      <p class="header text-center pt-1">
        <img src="images/nepal.png" width="50px" height="50px">
        विराटनगर महानगरपालिका,न्यायिक समिति</p>
        <div class="container">
        <p class="h3 text-center">हाल प्रकाशित</hp>
             <h6 style="float: right;padding: 5px;font-size: 20px;">
        <?php
            $fromdate= convert($from);
            echo "$fromdate";
        ?> 
     देखि 
    <?php
        $todate= convert($to);
        echo "$todate"; 
     ?> 
    सम्म</h6><br>
    <div class="tb">
        <table border="0">
            <tr>
                <th width="4%">क्र.म</th>
                <th width="4%">मुद्दा नं.</th>
                <th width="5%">दर्ता मिति</th>
                <th width="10%">बादी/निवेदक</th>
                <th width="5%">बादीको नम्बर</th>
                <th width="10%">प्रतिवादी/बिपक्षी</th>
                <th width="5%">प्रतिवादीको नम्बर</th>
                <th width="10%">मुद्दाको बिषय</th>
                <th width="5%">तोकिएको पेसी मिति</th>
                <th width="8%">कैफियत</th>
                <th colspan="2" align="center" width="4%">Operation</th>
            </tr>
<!--php starts here-->
<?php

include("connection.php");
error_reporting(0);

$query1 = "select * from filterdata where sn = 2";
$data1 = mysqli_query($conn,$query1);
$total1 = mysqli_num_rows($data1);
$result = mysqli_fetch_assoc($data1);

$yt1 = $result['y1'];
$mt1 = $result['m1'];
$day1 = $result['d1'];

$yt2 = $result['y2'];
$mt2 = $result['m2'];
$day2 = $result['d2'];


$fd=$yt1.'-'.$mt1.'-'.$day1;
$td=$yt2.'-'.$mt2.'-'.$day2;

//$query = "select * from peshi where date between '$fd' and '$td'";
$m=$mt2-$mt1;
$y=$yt2-$yt1;
if ($m==1 && $y==0) {
  $query = "select * from peshi where (y2 between '$yt1' AND '$yt2') and (m2 = '$mt1') and (d2 between '$day1' and 32)";
  $query2 = "select * from peshi where (y2 between '$yt1' AND '$yt2') and (m2 = '$mt2') and (d2 between 0 and '$day2')";
}
elseif($m==0 && $y==0)
{
  $query = "select * from peshi where (d2 between '$day1' and '$day2') and (m2 between '$mt1' and '$mt2') and (y2 between '$yt1' and '$yt2')";
}
elseif($y==1 && $m==-11){
  $query = "select * from peshi where (y2='$yt1') and (m2='$mt1') and (d2 between '$day1' and 32)";
  $query2 = "select * from peshi where (y2='$yt2') and (m2='$mt2') and (d2 between 0 and '$day2')";
}
else{
  $query = "select * from peshi where date between '$fd' and '$td'";
}

$data = mysqli_query($conn,$query);
$data2 = mysqli_query($conn,$query2);

$total = mysqli_num_rows($data);
$total2 = mysqli_num_rows($data2);
$i=1;

if ($total!=0) {
    
    while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <tr>
        <td>$i</td>
        <td>".$result['mudaano']."</td>
        <td>".$result['dartamiti']."</td>
        <td>".$result['badi']."</td>
        <td>".$result['badinum']."</td>
         <td>".$result['pratibadi']."</td>
         <td>".$result['pratinum']."</td>
        <td>".$result['bisaya']."</td>
        <td>".$result['pesi']."</td>
        <td>".$result['kaifiyat']."</td>
  ";
        ?>
       <?php
        echo "<td><a href = 'update.php?mn=$result[mudaano]&dn=$result[dartamiti]&bn=$result[badi]&pn=$result[pratibadi]&bin=$result[bisaya]&pen=$result[pesi]&kn=$result[kaifiyat]&year1=$result[y1]&month1=$result[m1]&day1=$result[d1]&year2=$result[y2]&month2=$result[m2]&day2=$result[d2]'>";
    ?>
        <i class="material-icons" style="color: green;">edit</i></a></td>
        <?php
        echo "<td><a href = 'delete.php?sn=$result[mudaano]&dn=$result[pesi]' onclick='return checkdelete()'>";
        ?>
        <i class="material-icons" style="color: red;">delete</i></a></td>
        </tr>
        <?php
        $i++;
    }

}
if ($total2!=0) {
    
    while ($result2 = mysqli_fetch_assoc($data2)) {
        echo "
        <tr>
        <td>$i</td>
        <td>".$result2['mudaano']."</td>
        <td>".$result2['dartamiti']."</td>
        <td>".$result2['badi']."</td>
        <td>".$result2['badinum']."</td>
         <td>".$result2['pratibadi']."</td>
         <td>".$result2['pratinum']."</td>
        <td>".$result2['bisaya']."</td>
        <td>".$result2['pesi']."</td>
        <td>".$result2['kaifiyat']."</td>
 ";
        ?>
       <?php
        echo "<td><a href = 'update.php?mn=$result2[mudaano]&dn=$result2[dartamiti]&bn=$result2[badi]&pn=$result2[pratibadi]&bin=$result2[bisaya]&pen=$result2[pesi]&kn=$result2[kaifiyat]&year1=$result2[y1]&month1=$result2[m1]&day1=$result2[d1]&year2=$result2[y2]&month2=$result2[m2]&day2=$result2[d2]'>";
    ?>
        <i class="material-icons" style="color: green;">edit</i></a></td>
        <?php
        echo "<td><a href = 'delete.php?sn=$result2[mudaano]&dn=$result2[pesi]' onclick='return checkdelete()'>";
        ?>
        <i class="material-icons" style="color: red;">delete</i></a></td>
        </tr>
        <?php
        $i++;
    }
}
?>
            </table>
        </div>
    </div>
</div>
</body>
<html>