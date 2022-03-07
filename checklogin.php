<?php

//echo $_POST['pass'];

include('connectDB.php');
session_start();
$stuid = $_POST['pass'];


$sqlcheck = "select * from bat_stu where stu_id=$stuid";

$resultcheck = $conn -> query($sqlcheck);


$_SESSION['stuid']= $stuid;
if($stuid == null ){
    echo "<script>";
    echo "alert('กรอกข้อมูลนักศึกษาไม่ถูกต้อง');";
    echo "window.location = 'index.php';";
    echo "</script>";
}else{
    $row =  mysqli_num_rows($resultcheck );//ถ้าเป็น 0 =ไม่มีข้อมูล
    if($row == 0){
        $insertuser = "insert into bat_stu (stu_id) values('$stuid') ";
        $result = $conn -> query($insertuser);
        //echo "<script> alert('กรอกข้อมูลนักศึกษาไม่ถูกต้อง'); window.location = '../new_log.php'; </script>";
        echo "<script>  window.location = 'SelectPage.php'; </script>";
        //Header("Location: ../new_log.php");
    } else if($row > 0 ){
        echo "<script>  window.location = 'SelectPage.php'; </script>";
    }
}
?>