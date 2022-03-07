<?php

    include('connectDB.php');
    session_start();
    $bat_day = $_POST['bat_day'] ;
    $bat_time = $_POST['bat_time'] ; 
    $d_t = $bat_day.' '.$bat_time ;
    $query = "SELECT * FROM bat_c_03 where day_time = '$d_t' ORDER BY id asc";
    $result = mysqli_query($conn, $query);
    if($result){
        $row = mysqli_num_rows($result);
        if($row){
            $conn -> close();
            echo "<script>  window.location = 'Page3-3.php'; </script>";
        }else{
            $query2  = "INSERT INTO bat_c_03 (day_time, create_date) VALUES ('$bat_day $bat_time', CURRENT_DATE())";
            $result2 = mysqli_query($conn, $query2);
            $conn -> close();
            echo "<script>";
            echo "alert('สนามที่ 2 วัน/เวลา $d_t (กรุณาเก็บรูปภาพไว้เป็นหลักฐาน)');";
            echo "window.location = 'index.php';";
            echo "</script>";
        }
    }else{
        echo 'query error result empty';
    }
    
?>