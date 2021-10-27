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
  <title>मुद्धाको पेसी इन्ट्री</title>
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
        margin-top:10px;
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
  <?php $page='entry'; include("sidenav.php");?>
    <div class="col-10">
        <p class="header text-center pt-1">
            <img src="images/nepal.png" width="50px" height="50px">
            विराटनगर महानगरपालिका,न्यायिक समिति
        </p>
        <div class="scroll">
				<div class="content1">
					<h6 class="p-1">मुद्धाको पेसी सुची</h6>
					<form action="" method="POST">
					<table>
				
						<tr>
							<td> मुद्दा नं.</td>
							<td>:</td>
							<td><input type="text" name="mudaano" style="width: 190px;" required /></td>
						</tr>
				
						<tr>
							<td> दर्ता मिति </td>
							<td>:</td>
						<td>
						  <select name="y1">
							<option>2082</option>
							<option>2081</option>
							<option>2080</option>
							<option>2079</option>
							<option <?php  echo "selected";?>>2078</option>
							<option>2077</option>
							<option>2076</option>
							<option>2075</option>
							<option>2074</option>
							<option>2073</option>
							<option>2072</option>
							<option>2071</option>

						  </select>
						  <select name="m1" >
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
						  </select>
						  <select name="d1" >
							<option>01</option>
							<option>02</option>
							<option>03</option>
							<option>04</option>
							<option>05</option>
							<option>06</option>
							<option>07</option>
							<option>08</option>
							<option>09</option>
							<option>10</option>
							<option>11</option>
							<option>12</option>
							<option>13</option>
							<option>14</option>
							<option>15</option>
							<option>16</option>
							<option>17</option>
							<option>18</option>
							<option>19</option>
							<option>20</option>
							<option>21</option>
							<option>22</option>
							<option>23</option>
							<option>24</option>
							<option>25</option>
							<option>26</option>
							<option>27</option>
							<option>28</option>
							<option>29</option>
							<option>30</option>
							<option>31</option>
							<option>32</option>
							
						  </select>
						  </td>
						  </tr>
				
						 <tr>
						  <td> तोकिएको पेसी </td>
							<td>:</td>
							<td>
								<select name="y2">
									<option>2082</option>
									<option>2081</option>
									<option>2080</option>
									<option>2079</option>
									<option <?php  echo "selected";?>>2078</option>
									<option>2077</option>
									<option>2076</option>
									<option>2075</option>
									<option>2074</option>
									<option>2073</option>
									<option>2072</option>
									<option>2071</option>
								</select>
								<select name="m2">
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
								  <option>05</option>
								  <option>06</option>
								  <option>07</option>
								  <option>08</option>
								  <option>09</option>
								  <option>10</option>
								  <option>11</option>
								  <option>12</option>
								</select>
								<select name="d2">
								  <option>01</option>
								  <option>02</option>
								  <option>03</option>
								  <option>04</option>
								  <option>05</option>
								  <option>06</option>
								  <option>07</option>
								  <option>08</option>
								  <option>09</option>
								  <option>10</option>
								  <option>11</option>
								  <option>12</option>
								  <option>13</option>
								  <option>14</option>
								  <option>15</option>
								  <option>16</option>
								  <option>17</option>
								  <option>18</option>
								  <option>19</option>
								  <option>20</option>
								  <option>21</option>
								  <option>22</option>
								  <option>23</option>
								  <option>24</option>
								  <option>25</option>
								  <option>26</option>
								  <option>27</option>
								  <option>28</option>
								  <option>29</option>
								  <option>30</option>
								  <option>31</option>
								  <option>32</option>
								  
								</select>
								</td>
							  
					  </tr>  
				
					  <tr>
							<td> वादी/निवेदक </td>
							<td>:</td>
							<td><input type="text" name="badi" required /></td>
					 </tr>
					 <tr>
							<td> वादीको नम्बर </td>
							<td>:</td>
							<td><input type="text" name="badinum" /></td>
					 </tr>
					 <tr>
					
							<td> प्रतिवादी/विपक्षी </td>
							<td>:</td>
							<td><input type="text" name="pratibadi" required /></td>
					  </tr>
					  <tr>
					
							<td> प्रतिवादीको नम्बर </td>
							<td>:</td>
							<td><input type="text" name="pratinum"/></td>
					  </tr>
				
					  <tr>
							<td>मुद्दाको विषय  </td>
							<td>:</td>
						<td><input type="text" name="bisaya" required /></td>
					
							
				</tr>
					  <tr>
							<td> कैफियत </td>
							<td>:</td>
						<td><input type="text" name="kaifiyat" /></td>
					  </tr>
				
				
					</table>
					<center><input class="sub" type="submit" name="submit" value="SUBMIT"/></center>
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
  
$mn=$_POST['mudaano'];
$bn=$_POST['badi'];
$pn=$_POST['pratibadi'];
$bis=$_POST['bisaya'];
$kai=$_POST['kaifiyat'];
$n1=$_POST['badinum'];
$n2=$_POST['pratinum'];
//for darta miti
$yt1=$_POST['y1'];
$mt1=$_POST['m1'];
$dt1=$_POST['d1'];

$y1=convert($yt1);
$m1=convert($mt1);
$d1=convert($dt1);

$dt=$y1.'/'.$m1.'/'.$d1;
//for peshi miti
$yt2=$_POST['y2'];
$mt2=$_POST['m2'];
$dt2=$_POST['d2'];

$y2=convert($yt2);
$m2=convert($mt2);
$d2=convert($dt2);

$pes=$y2.'/'.$m2.'/'.$d2;
$date=$yt2.'-'.$mt2.'-'.$dt2;

if($mn!=""&&$bn!=""&&$pn!=""&&$bis!=""){

$query="INSERT INTO PESHI(mudaano,dartamiti,badi,pratibadi,bisaya,pesi,kaifiyat,y1,m1,d1,y2,m2,d2,date,badinum,pratinum) VALUES ('$mn','$dt','$bn','$pn','$bis','$pes','$kai','$yt1','$mt1','$dt1','$yt2','$mt2','$dt2','$date','$n1','$n2')";
$data=mysqli_query($conn,$query);

if($data){
 echo "<script>alert('Data inserted')</script>";
}
}
else{
echo "Failed to insert";}
}

?>
