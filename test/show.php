<?php
include("echo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>साप्ताहिक पेसी</title>
    <link rel="shortcut icon" type="image/png" href="images/nepal.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/design.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <img src="images\nepal.png" width="80px">
        </div>
        <div class="col-10 pt-2">
            <h4>
                विराटनगर महानगरपालिका, नगर कार्यपालिकाको कार्यालय<br>
                 न्यायिक समिति<br>
                 प्रदेश नं १, मोरङ, विराटनगर
            </h4>
        </div>
    </div>
  </div>
  <div class="h4 mt-4">
    <p>साप्ताहिक पेसी सुची</p>
  </div>
  <p class="h3 p-3">मिति
    <?php
             $fromdate= convert($from);
             echo "$fromdate";
         ?> 
      देखि 
    
     
     <?php
         $todate= convert($to);
         echo "$todate"; 
      ?> 
     सम्मको साप्ताहिक पेशी सुची 
    </p>
    <div style="overflow-x:auto;">
    <table border="0"width="98%" >
    
     <tr id="header">
        <th width="7%">क्र.म</th>
        <th width="7%">मुद्दा नं.</th>
        <th width="10%">दर्ता मिति</th>
        <th width="15%">बादी/निवेदक</th>
        <th width="15%">प्रतिवादी/बिपक्षी</th>
        <th width="24%">मुद्दाको बिषय</th>
        <th width="10%">तोकिएको पेसी मिति</th>
        <th width="12%">कैफियत</th>
    </tr>

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
        $j=convert($i);
        echo "
        <tr>
        <td>$j</td>
        <td>".$result['mudaano']."</td>
        <td>".$result['dartamiti']."</td>
        <td>".$result['badi']."</td>
         <td>".$result['pratibadi']."</td>
        <td>".$result['bisaya']."</td>
        <td>".$result['pesi']."</td>
        <td>".$result['kaifiyat']."</td>
        </tr>
        ";
        $i++;
    }
}
if ($total2!=0) {
    
    while ($result2 = mysqli_fetch_assoc($data2)) {
        $j=convert($i);
        echo "
        <tr>
        <td>$j</td>
        <td>".$result2['mudaano']."</td>
        <td>".$result2['dartamiti']."</td>
        <td>".$result2['badi']."</td>
         <td>".$result2['pratibadi']."</td>
        <td>".$result2['bisaya']."</td>
        <td>".$result2['pesi']."</td>
        <td>".$result2['kaifiyat']."</td>
        </tr>
        ";
        $i++;
    }
}
?>
</table>
</div>
</body>
</html>