<?php
include("connection.php");
function convert($number){
    $eng=array(
        
        "1",
        "2",
        "3",
        "4",
        "5",
        "6",
        "7",
        "8",
        "9",
        "0",
        "-"
    );
    $nep=array( 
        
        "१",
        "२",
        "३",
        "४",
        "५",
        "६",
        "७",
        "८",
        "९",
        "०",
        "/"
         
    );
    return str_replace($eng,$nep,$number);

}
$query11 = "select * from filterdata where sn = 2";
$data11 = mysqli_query($conn,$query11);
$result11 = mysqli_fetch_assoc($data11);
$y11=$result11['y1'];
$m11=$result11['m1'];
$d11=$result11['d1'];
$y12=$result11['y2'];
$m12=$result11['m2'];
$d12=$result11['d2'];
if($m11<10){
    $m11='0'.$m11;
}
if($m12<10){
    $m12='0'.$m12;
}
if($d11<10){
    $d11='0'.$d11;
}
if($d12<10){
    $d12='0'.$d12;
}
$from=$y11.'-'.$m11.'-'.$d11;
$to=$y12.'-'.$m12.'-'.$d12;
?>