<?php

$con = mysqli_connect("localhost", "root", '');
mysqli_set_charset($con, 'utf8');
$db = mysqli_select_db($con, "cad_prod");


if (!$con || !$db) echo mysqli_error($con);
  

?>