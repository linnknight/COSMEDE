<?php
error_reporting(0);
ob_start();
session_start();  
session_destroy();
echo "<script>alert('ע���ɹ�');location='index.php';</script>";
?>