<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json ; charset=utf-8');

require_once "dbconfig.php";
$query= "SELECT * FROM tbl_product";
$result= mysqli_query($conn,$query) or die ("Select query failled.");
$count = mysqli_num_rows($result);

if($count > 0)
{
     $row =mysqli_fetch_all($result,MYSQLI_ASSOC);
     echo json_encode($row);

}
else
{
     echo json_encode(array("message"=> "no product found." , "status" =>false));
}
?>