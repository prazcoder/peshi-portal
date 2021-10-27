<?php
include("echo.php");
error_reporting(0);
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: loginform.php");
}
$mn = $_GET['mn'];
$dn = $_GET['dn'];
$bn = $_GET['bn'];
$pn = $_GET['pn'];
$bin = $_GET['bin'];
$pen = $_GET['pen'];
$kn = $_GET['kn'];
$year1 = $_GET['year1'];
$month1 = $_GET['month1'];
$day1 = $_GET['day1'];
$year2 = $_GET['year2'];
$month2 = $_GET['month2'];
$day2 = $_GET['day2'];
$num1 = $_GET['n1'];
$num2 = $_GET['n2'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>पेसी अपडेट</title>
  <link rel="shortcut icon" type="image/png" href="images/nepal.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
    .content1 h6{
        text-align: center;
        font-size:20px;
    }
    .scroll .content1 form{
        margin:10px 20px 0px 20px;
        padding: 20px 0;
        font-size: 25px;
        border-radius: 5px;	
    }

    table{
        width: 100%;
        border-collapse: collapse;
    }
    td{
        text-align: left;
        font-size: 19px;
        font-weight: 800;
        padding:10px 0 10px 20px;
    }
    tr:nth-child(odd) {background-color: #f2f2f2;}
    input[type= "text"]{
        height: 30px;
        border-radius: 3px;
        width:600px;
        font-size: 20px;
    }
    select{
        border-style: solid;
        border-width: 2px;
        width:60px;
        height:35px;
        border-radius: 3px;
        font-size: 15px;
    }
    input[type="submit"]{
        border:rgb(224, 219, 219);
        border-style: groove;
        z-index: 999;
        border-radius: 10px;
        font-size: 20px;
        font-weight: bold;
        cursor: pointer;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    } 
    input[type="submit"]:hover{
        border: none;
        box-shadow: 0 6px 8px 0 rgba(0,0,0,0.2);
        color:black;
    }
  </style>
</head>
<body>
  <div class="d-flex">
  <?php $page='update'; include("sidenav.php");?>
    <div class="col-10">
        <p class="header text-center pt-1">
            <img src="images/nepal.png" width="50px" height="50px">
            विराटनगर महानगरपालिका,न्यायिक समिति
        </p>
        <div class="scroll">
        <div class="content1">
					<h6>खाता अपडेट</h6>
					<form action="" method="POST">
					<table>
						<tr>
							<td> मुद्दा नं.</td>
							<td>:</td>
							<td><input type="text" name="mudaano"value="<?php echo "$mn" ?>" style="width: 190px;" required /></td>
						</tr>
				
						<tr>
							<td> दर्ता मिति </td>
							<td>:</td>
						<td>
						  <select name="y1">
							<option <?php if($year1=='2082'){ echo "selected";} ?>>2082</option>
							<option <?php if($year1=='2081'){ echo "selected";} ?>>2081</option>
							<option <?php if($year1=='2080'){ echo "selected";} ?>>2080</option>
							<option <?php if($year1=='2079'){ echo "selected";} ?>>2079</option>
							<option <?php if($year1=='2078'){ echo "selected";} ?>>2078</option>
							<option <?php if($year1=='2077'){ echo "selected";} ?>>2077</option>
							<option <?php if($year1=='2076'){ echo "selected";} ?>>2076</option>
							<option <?php if($year1=='2075'){ echo "selected";} ?>>2075</option>
							<option <?php if($year1=='2074'){ echo "selected";} ?>>2074</option>
							<option <?php if($year1=='2073'){ echo "selected";} ?>>2073</option>
							<option <?php if($year1=='2072'){ echo "selected";} ?>>2072</option>
							<option <?php if($year1=='2071'){ echo "selected";} ?>>2071</option>

						  </select>
						  <select name="m1" >
							<option <?php if($month1=='01'){ echo "selected";} ?>>01</option>
							<option <?php if($month1=='02'){ echo "selected";} ?>>02</option>
							<option <?php if($month1=='03'){ echo "selected";} ?>>03</option>
							<option <?php if($month1=='04'){ echo "selected";} ?>>04</option>
							<option <?php if($month1=='05'){ echo "selected";} ?>>05</option>
							<option <?php if($month1=='06'){ echo "selected";} ?>>06</option>
							<option <?php if($month1=='07'){ echo "selected";} ?>>07</option>
							<option <?php if($month1=='08'){ echo "selected";} ?>>08</option>
							<option <?php if($month1=='09'){ echo "selected";} ?>>09</option>
							<option <?php if($month1=='10'){ echo "selected";} ?>>10</option>
							<option <?php if($month1=='11'){ echo "selected";} ?>>11</option>
							<option <?php if($month1=='12'){ echo "selected";} ?>>12</option>
						  </select>
						  <select name="d1" >
							<option <?php if($day1=='01'){ echo "selected";} ?>>01</option>
							<option <?php if($day1=='02'){ echo "selected";} ?>>02</option>
							<option <?php if($day1=='03'){ echo "selected";} ?>>03</option>
							<option <?php if($day1=='04'){ echo "selected";} ?>>04</option>
							<option <?php if($day1=='05'){ echo "selected";} ?>>05</option>
							<option <?php if($day1=='06'){ echo "selected";} ?>>06</option>
							<option <?php if($day1=='07'){ echo "selected";} ?>>07</option>
							<option <?php if($day1=='08'){ echo "selected";} ?>>08</option>
							<option <?php if($day1=='09'){ echo "selected";} ?>>09</option>
							<option <?php if($day1=='10'){ echo "selected";} ?>>10</option>
							<option <?php if($day1=='11'){ echo "selected";} ?>>11</option>
							<option <?php if($day1=='12'){ echo "selected";} ?>>12</option>
							<option <?php if($day1=='13'){ echo "selected";} ?>>13</option>
							<option <?php if($day1=='14'){ echo "selected";} ?>>14</option>
							<option <?php if($day1=='15'){ echo "selected";} ?>>15</option>
							<option <?php if($day1=='16'){ echo "selected";} ?>>16</option>
							<option <?php if($day1=='17'){ echo "selected";} ?>>17</option>
							<option <?php if($day1=='18'){ echo "selected";} ?>>18</option>
							<option <?php if($day1=='19'){ echo "selected";} ?>>19</option>
							<option <?php if($day1=='20'){ echo "selected";} ?>>20</option>
							<option <?php if($day1=='21'){ echo "selected";} ?>>21</option>
							<option <?php if($day1=='22'){ echo "selected";} ?>>22</option>
							<option <?php if($day1=='23'){ echo "selected";} ?>>23</option>
							<option <?php if($day1=='24'){ echo "selected";} ?>>24</option>
							<option <?php if($day1=='25'){ echo "selected";} ?>>25</option>
							<option <?php if($day1=='26'){ echo "selected";} ?>>26</option>
							<option <?php if($day1=='27'){ echo "selected";} ?>>27</option>
							<option <?php if($day1=='28'){ echo "selected";} ?>>28</option>
							<option <?php if($day1=='29'){ echo "selected";} ?>>29</option>
							<option <?php if($day1=='30'){ echo "selected";} ?>>30</option>
							<option <?php if($day1=='31'){ echo "selected";} ?>>31</option>
							<option <?php if($day1=='32'){ echo "selected";} ?>>32</option>
							
						  </select>
						  </td>
						  </tr>
				
						 <tr>
						  <td> तोकिएको पेसी </td>
							<td>:</td>
							<td>
								<select name="y2">
									<option <?php if($year2=='2082'){ echo "selected";} ?>>2082</option>
									<option <?php if($year2=='2081'){ echo "selected";} ?>>2081</option>
									<option <?php if($year2=='2080'){ echo "selected";} ?>>2080</option>
									<option <?php if($year2=='2079'){ echo "selected";} ?>>2079</option>
									<option <?php if($year2=='2078'){ echo "selected";} ?>>2078</option>
									<option <?php if($year2=='2077'){ echo "selected";} ?>>2077</option>
									<option <?php if($year2=='2076'){ echo "selected";} ?>>2076</option>
									<option <?php if($year2=='2075'){ echo "selected";} ?>>2075</option>
									<option <?php if($year2=='2074'){ echo "selected";} ?>>2074</option>
									<option <?php if($year2=='2073'){ echo "selected";} ?>>2073</option>
									<option <?php if($year2=='2072'){ echo "selected";} ?>>2072</option>
									<option <?php if($year2=='2071'){ echo "selected";} ?>>2071</option>
								</select>
								<select name="m2">
								    <option <?php if($month2=='01'){ echo "selected";} ?>>01</option>
									<option <?php if($month2=='02'){ echo "selected";} ?>>02</option>
									<option <?php if($month2=='03'){ echo "selected";} ?>>03</option>
									<option <?php if($month2=='04'){ echo "selected";} ?>>04</option>
									<option <?php if($month2=='05'){ echo "selected";} ?>>05</option>
									<option <?php if($month2=='06'){ echo "selected";} ?>>06</option>
									<option <?php if($month2=='07'){ echo "selected";} ?>>07</option>
									<option <?php if($month2=='08'){ echo "selected";} ?>>08</option>
									<option <?php if($month2=='09'){ echo "selected";} ?>>09</option>
									<option <?php if($month2=='10'){ echo "selected";} ?>>10</option>
									<option <?php if($month2=='11'){ echo "selected";} ?>>11</option>
									<option <?php if($month2=='12'){ echo "selected";} ?>>12</option>
								</select>
								<select name="d2">
								    <option <?php if($day2=='01'){ echo "selected";} ?>>01</option>
									<option <?php if($day2=='02'){ echo "selected";} ?>>02</option>
									<option <?php if($day2=='03'){ echo "selected";} ?>>03</option>
									<option <?php if($day2=='04'){ echo "selected";} ?>>04</option>
									<option <?php if($day2=='05'){ echo "selected";} ?>>05</option>
									<option <?php if($day2=='06'){ echo "selected";} ?>>06</option>
									<option <?php if($day2=='07'){ echo "selected";} ?>>07</option>
									<option <?php if($day2=='08'){ echo "selected";} ?>>08</option>
									<option <?php if($day2=='09'){ echo "selected";} ?>>09</option>
									<option <?php if($day2=='10'){ echo "selected";} ?>>10</option>
									<option <?php if($day2=='11'){ echo "selected";} ?>>11</option>
									<option <?php if($day2=='12'){ echo "selected";} ?>>12</option>
									<option <?php if($day2=='13'){ echo "selected";} ?>>13</option>
									<option <?php if($day2=='14'){ echo "selected";} ?>>14</option>
									<option <?php if($day2=='15'){ echo "selected";} ?>>15</option>
									<option <?php if($day2=='16'){ echo "selected";} ?>>16</option>
									<option <?php if($day2=='17'){ echo "selected";} ?>>17</option>
									<option <?php if($day2=='18'){ echo "selected";} ?>>18</option>
									<option <?php if($day2=='19'){ echo "selected";} ?>>19</option>
									<option <?php if($day2=='20'){ echo "selected";} ?>>20</option>
									<option <?php if($day2=='21'){ echo "selected";} ?>>21</option>
									<option <?php if($day2=='22'){ echo "selected";} ?>>22</option>
									<option <?php if($day2=='23'){ echo "selected";} ?>>23</option>
									<option <?php if($day2=='24'){ echo "selected";} ?>>24</option>
									<option <?php if($day2=='25'){ echo "selected";} ?>>25</option>
									<option <?php if($day2=='26'){ echo "selected";} ?>>26</option>
									<option <?php if($day2=='27'){ echo "selected";} ?>>27</option>
									<option <?php if($day2=='28'){ echo "selected";} ?>>28</option>
									<option <?php if($day2=='29'){ echo "selected";} ?>>29</option>
									<option <?php if($day2=='30'){ echo "selected";} ?>>30</option>
									<option <?php if($day2=='31'){ echo "selected";} ?>>31</option>
									<option <?php if($day2=='32'){ echo "selected";} ?>>32</option>
								</select>
								</td>
							  
					  </tr>  
				
					  <tr>
							<td> वादी/निवेदक </td>
							<td>:</td>
							<td><input type="text" value="<?php echo "$bn" ?>" name="badi" required /></td>
					 </tr>
					 <tr>
							<td> वादीको नम्बर </td>
							<td>:</td>
							<td><input type="text" value="<?php echo "$num1" ?>" name="badinum" /></td>
					 </tr>
					 <tr>
					
							<td> प्रतिवादी/विपक्षी </td>
							<td>:</td>
							<td><input type="text" value="<?php echo "$pn" ?>" name="pratibadi" required /></td>
					  </tr>
				      <tr>
					
							<td> प्रतिवादीको नम्बर </td>
							<td>:</td>
							<td><input type="text" value="<?php echo "$num2" ?>" name="pratinum"/></td>
					  </tr>
					  <tr>
							<td>मुद्दाको विषय  </td>
							<td>:</td>
						<td><input type="text" value="<?php echo "$bin" ?>" name="bisaya" required /></td>
					
							
				</tr>
					  <tr>
							<td> कैफियत </td>
							<td>:</td>
						<td><input type="text" value="<?php echo "$kn" ?>" name="kaifiyat"  /></td>
					  </tr>
				
				
					</table>
					<p><center><input type="submit" name="submit" value="UPDATE"/></center></p>
					</form>
				</div>
					
			</div>
		</div>
    </div>
  </div>
</body>
</html>
<!--php starts here-->
<?php

if (isset($_POST['submit'])) {
  
$mn1=$_POST['mudaano'];
$bn1=$_POST['badi'];
$pn1=$_POST['pratibadi'];
$bis1=$_POST['bisaya'];
$kai1=$_POST['kaifiyat'];
$n11=$_POST['badinum'];
$n22=$_POST['pratinum'];
//for darta miti
$yt3=$_POST['y1'];
$mt3=$_POST['m1'];
$dt3=$_POST['d1'];

$y4=convert($yt3);
$m4=convert($mt3);
$d4=convert($dt3);

$dt1=$y4.'/'.$m4.'/'.$d4;
//for peshi miti
$yt5=$_POST['y2'];
$mt5=$_POST['m2'];
$dt5=$_POST['d2'];

$y6=convert($yt5);
$m6=convert($mt5);
$d6=convert($dt5);
$pes=$y6.'/'.$m6.'/'.$d6;
$date=$yt5.'-'.$mt5.'-'.$dt5;

if($mn1!=""&&$bn1!=""&&$pn1!=""&&$bis1!=""){

$query="UPDATE PESHI SET mudaano = '$mn1' , dartamiti = '$dt1' , badi = '$bn1' , pratibadi = '$pn1' , bisaya = '$bis1' , pesi = '$pes' , kaifiyat = '$kai1' , y1 = '$yt3' , m1 = '$mt3' , d1 = '$dt3' , y2 = '$yt5' , m2 = '$mt5' , d2 = '$dt5' ,  badinum = '$n11' ,  pratinum = '$n22' ,date = '$date' WHERE mudaano = '$mn' and y2 = '$year2' and m2 = '$month2' and d2 = '$day2'";
$data=mysqli_query($conn,$query);

if($data){
 echo "<script>alert('Record Updated');</script>";
   ?>
<META HTTP-EQUIV="Refresh" CONTENT="0; URL=report.php">
<?php
}
}
else{
echo "Failed";}
}

?>
