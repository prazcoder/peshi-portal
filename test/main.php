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
  <title>Admin Panel</title>
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
  <?php $page='main'; include("sidenav.php");?>
  <div class="col-10">
      <p class="header text-center pt-1">
        <img src="images/nepal.png" width="50px" height="50px">
        विराटनगर महानगरपालिका,न्यायिक समिति</p>
        <div class="container mt-5">
          <div class="row">
            <div class="col-4">
              <div class="well">
                <h6>टोटल इन्ट्री</h6>
                <p class="h4" style="line-height:2;font-size:30px">
                <?php
                 $query = "SELECT * FROM PESHI";
                 $data = mysqli_query($conn,$query);
                 $total = mysqli_num_rows($data);
                 $t = convert($total);
                 echo "$t";
              ?>
                </p>
              </div>
            </div>
            <div class="col-4">
              <div class="well">
                <h6 style=" padding-bottom: 9px;">हाल प्रकाशित मिति</h6>
                <p class="h4">
                <?php
                    $fromdate= convert($from);
                    echo "$fromdate";
                ?>
                <b style="padding-left: 15px;"> देखि</b></p>
                <p class="h4">
                <?php
                $todate= convert($to);
                echo "$todate"; 
                 ?>  
                <b style="padding-left: 15px;">सम्म</b>
                </p>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
</body>
</html>