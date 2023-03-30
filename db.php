<?php
$server="sql301.epizy.com";
$username="epiz_33394011";
$password="efIDqJWDCSNTe";
$dbname="epiz_33394011_messages";
$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn)
{
    die("connect failed:".mysqli_connect_error());
    echo"yv";
}
?>