<?php 
// connect database
   date_default_timezone_set('Asia/Ho_Chi_Minh');
   $date = date('Y-m-d H:i:s');
   $now = strtotime($date);
   $date10 = date('Y-m-d');
   $conn = mysqli_connect("localhost","root","","webnv");
   //$conn = mysqli_connect("sql101.epizy.com","epiz_33928032","KDCmLExHsGc","epiz_33928032_demo_nv");
   mysqli_set_charset($conn, 'UTF8');
   // end connect database

?>

