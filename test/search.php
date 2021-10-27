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
  <title>खोजी</title>
  <link rel="shortcut icon" type="image/png" href="images/nepal.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style>
      #search{
          width:20vw;
          height:40px;
          font-size:18px;
          border-color:black;
      }
  </style>
</head>
<body>
  <div class="d-flex">
  <?php $page='search'; include("sidenav.php");?>
  <div class="col-10">
      <p class="header text-center pt-1">
        <img src="images/nepal.png" width="50px" height="50px">
        विराटनगर महानगरपालिका,न्यायिक समिति</p>
        <div class="scroll">
        <div class="container-fluid">
           <form style="float:right;line-height:1" method="POST">
               <input type="text" class="p-1" name="data" placeholder="मुद्दा नं" id="search">
               <button class="btn p-1 m-1" name="search"><i class="material-icons" style="color: black;">search</i></button>
            </form>
        </div>
        <?php 
       if (isset($_POST['search'])) {
           $data = $_POST['data'];
           $query = "select * from peshi where mudaano = '$data'";
           $query_run = mysqli_query($conn,$query);
           $total = mysqli_num_rows($query_run);
           if ($total!=0) {
              ?>
            <div class="tb">
            <table border="0"width="100%">
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
                </tr>
              <?php 
              $i=1;
            while ($result4 = mysqli_fetch_assoc($query_run)) {
        echo "
        <tr>
        <td>$i</td>
        <td>".$result4['mudaano']."</td>
        <td>".$result4['dartamiti']."</td>
        <td>".$result4['badi']."</td>
        <td>".$result4['badinum']."</td>
        <td>".$result4['pratibadi']."</td>
        <td>".$result4['pratinum']."</td>
        <td>".$result4['bisaya']."</td>
        <td>".$result4['pesi']."</td>
        <td>".$result4['kaifiyat']."</td>

        </tr>
  ";   
  $i++;     
    }

       }
         else{
    echo "no records found";
  }
}

       ?>
   </table>
        </div>
        </div>
    </div>
</div>
</body>
<html>