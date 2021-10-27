<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: loginform.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>पेशी रिपोर्ट</title>
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
  <?php $page='report'; include("sidenav.php");?>
  <div class="col-10">
      <p class="header text-center pt-1">
      <img src="images/nepal.png" width="50px" height="50px">
       विराटनगर महानगरपालिका,न्यायिक समिति</p>
       <div class="container">
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

$query = "select * from peshi";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
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
        echo "<td><a href = 'update.php?mn=$result[mudaano]&dn=$result[dartamiti]&bn=$result[badi]&pn=$result[pratibadi]&bin=$result[bisaya]&pen=$result[pesi]&kn=$result[kaifiyat]&year1=$result[y1]&month1=$result[m1]&day1=$result[d1]&year2=$result[y2]&month2=$result[m2]&day2=$result[d2]&n1=$result[badinum]&n2=$result[pratinum]'>";
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
else{
    echo "no records to display";
}

?>
        </table>
       </div>
  </div>
</div>
</body>
</html>