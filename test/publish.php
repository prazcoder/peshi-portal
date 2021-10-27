<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: loginform.php");
}
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>प्रकाशन पेज</title>
  <link rel="shortcut icon" type="image/png" href="images/nepal.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
.container .form{
    font-size: 25px;
    padding: 10px;
    font-family: kalimati;
    border:groove;
    border-color:grey;
}
fieldset table td{
	text-align: left;
	font-size: 20px;
	font-weight: 800;
	padding:10px 0 10px 20px;
}
select{
	border-style: solid;
	border-width: 2px;
	width:80px;
	height:37px;
	border-radius: 3px;
	font-size: 15px;
}
.sub{
	border:rgb(192, 188, 188);
	border-style: groove;
    z-index: 999;
	border-radius: 10px;
	margin:10px 20px 10px 100px;
	padding: 5px ;
	font-size: 18px;
	font-weight: bold;
	cursor: pointer;
	font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
} 

.sub:hover{
	box-shadow: 0 6px 8px 0 rgba(0,0,0,0.2);
	color:black;
    padding: 5px ;
}
  </style>
</head>
<body>
  <div class="d-flex">
  <?php $page='publish'; include("sidenav.php");?>
  <div class="col-10">
      <p class="header text-center pt-1">
        <img src="images/nepal.png" width="50px" height="50px">
        विराटनगर महानगरपालिका,न्यायिक समिति</p>
        <div class="container">
        <form method="POST" class="form">
            <fieldset>
              <legend><h3 style="font-size: 20px;">प्रकाशित हुने मिति:</h3></legend>
              <table>
                <tr>
                    <td> देखि </td>
                    <td>:</td>
                <td>
                  <select name="y1">
                    <option <?php if($_POST['y1']=='2082'){ echo "selected";} ?>>2082</option>
                    <option <?php if($_POST['y1']=='2081'){ echo "selected";} ?>>2081</option>
                    <option <?php if($_POST['y1']=='2080'){ echo "selected";} ?>>2080</option>
                    <option <?php if($_POST['y1']=='2079'){ echo "selected";} ?>>2079</option>
                    <option <?php if($_POST['y1']=='2078'){ echo "selected";} ?>>2078</option>
                    <option <?php if($_POST['y1']=='2077'){ echo "selected";} ?>>2077</option>
                    <option <?php if($_POST['y1']=='2076'){ echo "selected";} ?>>2076</option>
                    <option <?php if($_POST['y1']=='2075'){ echo "selected";} ?>>2075</option>
                    <option <?php if($_POST['y1']=='2074'){ echo "selected";} ?>>2074</option>
                    <option <?php if($_POST['y1']=='2073'){ echo "selected";} ?>>2073</option>
                    <option <?php if($_POST['y1']=='2072'){ echo "selected";} ?>>2072</option>
                    <option <?php if($_POST['y1']=='2070'){ echo "selected";} ?>>2071</option>

                  </select>
                  <select name="m1">
                    <option <?php if($_POST['m1']=='01'){ echo "selected";} ?>>01</option>
                    <option <?php if($_POST['m1']=='02'){ echo "selected";} ?>>02</option>
                    <option <?php if($_POST['m1']=='03'){ echo "selected";} ?>>03</option>
                    <option <?php if($_POST['m1']=='04'){ echo "selected";} ?>>04</option>
                    <option <?php if($_POST['m1']=='05'){ echo "selected";} ?>>05</option>
                    <option <?php if($_POST['m1']=='06'){ echo "selected";} ?>>06</option>
                    <option <?php if($_POST['m1']=='07'){ echo "selected";} ?>>07</option>
                    <option <?php if($_POST['m1']=='08'){ echo "selected";} ?>>08</option>
                    <option <?php if($_POST['m1']=='09'){ echo "selected";} ?>>09</option>
                    <option <?php if($_POST['m1']=='10'){ echo "selected";} ?>>10</option>
                    <option <?php if($_POST['m1']=='11'){ echo "selected";} ?>>11</option>
                    <option <?php if($_POST['m1']=='12'){ echo "selected";} ?>>12</option>
                  </select>
                  <select name="d1">
                    <option <?php if($_POST['d1']=='01'){ echo "selected";} ?>>01</option>
                    <option <?php if($_POST['d1']=='02'){ echo "selected";} ?>>02</option>
                    <option <?php if($_POST['d1']=='03'){ echo "selected";} ?>>03</option>
                    <option <?php if($_POST['d1']=='04'){ echo "selected";} ?>>04</option>
                    <option <?php if($_POST['d1']=='05'){ echo "selected";} ?>>05</option>
                    <option <?php if($_POST['d1']=='06'){ echo "selected";} ?>>06</option>
                    <option <?php if($_POST['d1']=='07'){ echo "selected";} ?>>07</option>
                    <option <?php if($_POST['d1']=='08'){ echo "selected";} ?>>08</option>
                    <option <?php if($_POST['d1']=='09'){ echo "selected";} ?>>09</option>
                    <option <?php if($_POST['d1']=='10'){ echo "selected";} ?>>10</option>
                    <option <?php if($_POST['d1']=='11'){ echo "selected";} ?>>11</option>
                    <option <?php if($_POST['d1']=='12'){ echo "selected";} ?>>12</option>
                    <option <?php if($_POST['d1']=='13'){ echo "selected";} ?>>13</option>
                    <option <?php if($_POST['d1']=='14'){ echo "selected";} ?>>14</option>
                    <option <?php if($_POST['d1']=='15'){ echo "selected";} ?>>15</option>
                    <option <?php if($_POST['d1']=='16'){ echo "selected";} ?>>16</option>
                    <option <?php if($_POST['d1']=='17'){ echo "selected";} ?>>17</option>
                    <option <?php if($_POST['d1']=='18'){ echo "selected";} ?>>18</option>
                    <option <?php if($_POST['d1']=='19'){ echo "selected";} ?>>19</option>
                    <option <?php if($_POST['d1']=='20'){ echo "selected";} ?>>20</option>
                    <option <?php if($_POST['d1']=='21'){ echo "selected";} ?>>21</option>
                    <option <?php if($_POST['d1']=='22'){ echo "selected";} ?>>22</option>
                    <option <?php if($_POST['d1']=='23'){ echo "selected";} ?>>23</option>
                    <option <?php if($_POST['d1']=='24'){ echo "selected";} ?>>24</option>
                    <option <?php if($_POST['d1']=='25'){ echo "selected";} ?>>25</option>
                    <option <?php if($_POST['d1']=='26'){ echo "selected";} ?>>26</option>
                    <option <?php if($_POST['d1']=='27'){ echo "selected";} ?>>27</option>
                    <option <?php if($_POST['d1']=='28'){ echo "selected";} ?>>28</option>
                    <option <?php if($_POST['d1']=='29'){ echo "selected";} ?>>29</option>
                    <option <?php if($_POST['d1']=='30'){ echo "selected";} ?>>30</option>
                    <option <?php if($_POST['d1']=='31'){ echo "selected";} ?>>31</option>
                    <option <?php if($_POST['d1']=='32'){ echo "selected";} ?>>32</option>
                    
                  </select>
                  </td>
                  </tr>
        
                 <tr>
                  <td> सम्म </td>
                    <td>:</td>
                    <td>
                        <select name="y2">
                            <option <?php if($_POST['y2']=='2082'){ echo "selected";} ?>>2082</option>
                            <option <?php if($_POST['y2']=='2081'){ echo "selected";} ?>>2081</option>
                            <option <?php if($_POST['y2']=='2080'){ echo "selected";} ?>>2080</option>
                            <option <?php if($_POST['y2']=='2079'){ echo "selected";} ?>>2079</option>
                            <option <?php if($_POST['y2']=='2078'){ echo "selected";} ?>>2078</option>
                            <option <?php if($_POST['y2']=='2077'){ echo "selected";} ?>>2077</option>
                            <option <?php if($_POST['y2']=='2076'){ echo "selected";} ?>>2076</option>
                            <option <?php if($_POST['y2']=='2075'){ echo "selected";} ?>>2075</option>
                            <option <?php if($_POST['y2']=='2074'){ echo "selected";} ?>>2074</option>
                            <option <?php if($_POST['y2']=='2073'){ echo "selected";} ?>>2073</option>
                            <option <?php if($_POST['y2']=='2072'){ echo "selected";} ?>>2072</option>
                            <option <?php if($_POST['y2']=='2070'){ echo "selected";} ?>>2071</option>
                        </select>
                        <select name="m2">
                            <option <?php if($_POST['m2']=='01'){ echo "selected";} ?>>01</option>
                            <option <?php if($_POST['m2']=='02'){ echo "selected";} ?>>02</option>
                            <option <?php if($_POST['m2']=='03'){ echo "selected";} ?>>03</option>
                            <option <?php if($_POST['m2']=='04'){ echo "selected";} ?>>04</option>
                            <option <?php if($_POST['m2']=='05'){ echo "selected";} ?>>05</option>
                            <option <?php if($_POST['m2']=='06'){ echo "selected";} ?>>06</option>
                            <option <?php if($_POST['m2']=='07'){ echo "selected";} ?>>07</option>
                            <option <?php if($_POST['m2']=='08'){ echo "selected";} ?>>08</option>
                            <option <?php if($_POST['m2']=='09'){ echo "selected";} ?>>09</option>
                            <option <?php if($_POST['m2']=='10'){ echo "selected";} ?>>10</option>
                            <option <?php if($_POST['m2']=='11'){ echo "selected";} ?>>11</option>
                            <option <?php if($_POST['m2']=='12'){ echo "selected";} ?>>12</option>
                        </select>
                        <select name="d2">
                            <option <?php if($_POST['d2']=='01'){ echo "selected";} ?>>01</option>
                            <option <?php if($_POST['d2']=='02'){ echo "selected";} ?>>02</option>
                            <option <?php if($_POST['d2']=='03'){ echo "selected";} ?>>03</option>
                            <option <?php if($_POST['d2']=='04'){ echo "selected";} ?>>04</option>
                            <option <?php if($_POST['d2']=='05'){ echo "selected";} ?>>05</option>
                            <option <?php if($_POST['d2']=='06'){ echo "selected";} ?>>06</option>
                            <option <?php if($_POST['d2']=='07'){ echo "selected";} ?>>07</option>
                            <option <?php if($_POST['d2']=='08'){ echo "selected";} ?>>08</option>
                            <option <?php if($_POST['d2']=='09'){ echo "selected";} ?>>09</option>
                            <option <?php if($_POST['d2']=='10'){ echo "selected";} ?>>10</option>
                            <option <?php if($_POST['d2']=='11'){ echo "selected";} ?>>11</option>
                            <option <?php if($_POST['d2']=='12'){ echo "selected";} ?>>12</option>
                            <option <?php if($_POST['d2']=='13'){ echo "selected";} ?>>13</option>
                            <option <?php if($_POST['d2']=='14'){ echo "selected";} ?>>14</option>
                            <option <?php if($_POST['d2']=='15'){ echo "selected";} ?>>15</option>
                            <option <?php if($_POST['d2']=='16'){ echo "selected";} ?>>16</option>
                            <option <?php if($_POST['d2']=='17'){ echo "selected";} ?>>17</option>
                            <option <?php if($_POST['d2']=='18'){ echo "selected";} ?>>18</option>
                            <option <?php if($_POST['d2']=='19'){ echo "selected";} ?>>19</option>
                            <option <?php if($_POST['d2']=='20'){ echo "selected";} ?>>20</option>
                            <option <?php if($_POST['d2']=='21'){ echo "selected";} ?>>21</option>
                            <option <?php if($_POST['d2']=='22'){ echo "selected";} ?>>22</option>
                            <option <?php if($_POST['d2']=='23'){ echo "selected";} ?>>23</option>
                            <option <?php if($_POST['d2']=='24'){ echo "selected";} ?>>24</option>
                            <option <?php if($_POST['d2']=='25'){ echo "selected";} ?>>25</option>
                            <option <?php if($_POST['d2']=='26'){ echo "selected";} ?>>26</option>
                            <option <?php if($_POST['d2']=='27'){ echo "selected";} ?>>27</option>
                            <option <?php if($_POST['d2']=='28'){ echo "selected";} ?>>28</option>
                            <option <?php if($_POST['d2']=='29'){ echo "selected";} ?>>29</option>
                            <option <?php if($_POST['d2']=='30'){ echo "selected";} ?>>30</option>
                            <option <?php if($_POST['d2']=='31'){ echo "selected";} ?>>31</option>
                            <option <?php if($_POST['d2']=='32'){ echo "selected";} ?>>32</option>
                          
                        </select>
                        </td>
                     </tr>      
              </table>
              <p><input class="sub" type="submit" name="search" value="FILTER"/></p>
            </fieldset>
          </form>
  
      <?php

if (isset($_POST['search'])) {
  

$yt3=$_POST['y1'];
$mt3=$_POST['m1'];
$day3=$_POST['d1'];

$yt4=$_POST['y2'];
$mt4=$_POST['m2'];
$day4=$_POST['d2'];

$fd1=$yt3.'-'.$mt3.'-'.$day3;
$td1=$yt4.'-'.$mt4.'-'.$day4;

$query2 = "UPDATE FILTERDATA SET y1 = '$yt3' , m1 = '$mt3' , d1 = '$day3' , y2 = '$yt4' , m2 = '$mt4' , d2 = '$day4' , fromdate = '$fd1' , todate = '$td1' WHERE sn = 1";
$query_run = mysqli_query($conn,$query2);


//$query3 = "select * from peshi where date between '$fd1' and '$td1'";
$m=$mt4-$mt3;
$y=$yt4-$yt3;
if ($m==1 && $y==0) {
  $query3 = "select * from peshi where (y2 between '$yt3' AND '$yt4') and (m2 = '$mt3') and (d2 between '$day3' and 32)";
  $query4 = "select * from peshi where (y2 between '$yt3' AND '$yt4') and (m2 = '$mt4') and (d2 between 0 and '$day4')";
}
elseif($m==0 && $y==0)
{
  $query3 = "select * from peshi where (d2 between '$day3' and '$day4') and (m2 between '$mt3' and '$mt4') and (y2 between '$yt3' and '$yt4')";

}
elseif($y==1 && $m==-11){
  $query3 = "select * from peshi where (y2='$yt3') and (m2='$mt3') and (d2 between '$day3' and 32)";
  $query4 = "select * from peshi where (y2='$yt4') and (m2='$mt4') and (d2 between 0 and '$day4')";
}
else{
  $query3 = "select * from peshi where date between '$fd1' and '$td1'";
}

$data = mysqli_query($conn,$query3);
$data2 = mysqli_query($conn,$query4);

$total = mysqli_num_rows($data);
$total2 = mysqli_num_rows($data2);



?>
        <div class="tb pt-2">
            <table border="0"width="100%">
                <tr>
                    <th width="5%">क्र.म</th>
                    <th width="6%">मुद्दा नं.</th>
                    <th width="9%">दर्ता मिति</th>
                    <th width="12%">बादी/निवेदक</th>
                    <th width="12%">प्रतिवादी/बिपक्षी</th>
                    <th width="25%">मुद्दाको बिषय</th>
                    <th width="9%">तोकिएको पेसी मिति</th>
                    <th width="12%">कैफियत</th>
                    <th colspan="2" align="center" width="11%">Operation</th>
                </tr>

<?php
$i=1;
if ($total!=0) {
       
     while ($result = mysqli_fetch_assoc($data)) {
        echo "
        <tr>
        <td>$i</td>
        <td>".$result['mudaano']."</td>
        <td>".$result['dartamiti']."</td>
        <td>".$result['badi']."</td>
         <td>".$result['pratibadi']."</td>
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
         <td>".$result2['pratibadi']."</td>
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
if ($total3!=0 || $total2!=0) {
    

?>
</table>
</form></div>
<form method="POST">
<center><input type="submit" value="Publish" class="sub" onclick='return check()' name="publish"></center>
</form>
<?php
}
else{
    echo "रेकोर्ड भेटिएन";
}
?>

<?php 
}
?>
  </div>
  <script type="text/javascript">
    function check(){
        if(confirm('Are you sure you want to publish the records?')){
            location.reload();
        }
    }
</script> 
        </div>
    </div>
</div>
</body>
<html>
<?php
if (isset($_POST['publish'])) {
$query4 = "select * from filterdata where sn = 1";
$data2 = mysqli_query($conn,$query4);
$total2 = mysqli_num_rows($data2);
$result2 = mysqli_fetch_assoc($data2);

$yt11 = $result2['y1'];
$mt11 = $result2['m1'];
$day11 = $result2['d1'];

$yt22 = $result2['y2'];
$mt22 = $result2['m2'];
$day22 = $result2['d2'];


$fd2=$yt11.'-'.$mt11.'-'.$day11;
$td2=$yt22.'-'.$mt22.'-'.$day22;

$query5 = "UPDATE FILTERDATA SET y1 = '$yt11' , m1 = '$mt11' , d1 = '$day11' , y2 = '$yt22' , m2 = '$mt22' , d2 = '$day22' , fromdate = '$fd2' , todate = '$td2' WHERE sn = 2";
$queryrun = mysqli_query($conn,$query5);

if ($queryrun) {
    ?>
    <script type="text/javascript">
        alert("Records Published");
    </script>
    <?php
 
}
else{
  echo "<script>alert(FAILED)</script> ";
}

}


?>