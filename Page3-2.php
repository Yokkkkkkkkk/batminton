<?php
include('connectDB.php');

$query = "SELECT * FROM bat_day ORDER BY b_id asc";
$result = mysqli_query($conn, $query);

$query2 = "SELECT * FROM bat_time ORDER BY b_id asc";
$result2 = mysqli_query($conn, $query2);





function check_time($day)
{
    global $conn;
    $arrTime = array('8:00-9:00', '9:00-10:00', '10:00-11:00', '11:00-12:00', '12:00-13:00', '13:00-14:00', '14:00-15:00', '15:00-16:00', '16:00-17:00', '17:00-18:00', '18:00-19:00', '19:00-20:00');
    unset($st);
    $st = array();
    $query3 = "SELECT * FROM bat_c_02 ORDER BY id asc";
    $result3 = mysqli_query($conn, $query3);

    while ($row = $result3->fetch_assoc()) {
        //echo $row['day_time'];
        $time = explode(" ", $row['day_time']);

        if ($time[0] != $day)
            continue;
        array_push($st, $time[1]);
    }
    for ($im = 0; $im < count($arrTime); $im++) {
        if (in_array($arrTime[$im], $st)) {
            echo '<td><img src="image/Red.png" style="width: 50px;"></td>';
        } else {
            echo '<td><img src="image/Square.png" style="width: 50px;"></td>';
        }
    }
}

?>
<!doctype html>
<html lang="EN">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>
</head>

<body style="font-family: 'Prompt', sans-serif;">
    <div class="contianer">
        <div class="row menu-bar" align="center">
            <form class="time-form" action="book_02.php" method="POST">
                <div class="row">
                    <div class="col" style="margin-left: -50px;">
                        <p class="text-menu"> เลือกสนาม </p>
                        <label class="form-control" style="margin-left: 250px; width: 400px;">สนามที่2</label>
                    </div>
                    <div class="col-2" align="center">
                        <p class="text-menu"> เลือกวันที่จอง</p>
                        <select class="form-select" name="bat_day" style="margin-left: 150px; width: 100px;">
                            <?php foreach ($result as $results) { ?>
                                <option value="<?php echo $results["b_day"]; ?>">
                                    <?php echo $results["b_day"]; ?>
                                </option>
                            <?php } ?>

                        </select>

                    </div>
                    <div class="col-2" align="center">
                        <p class="text-menu"> เลือกเวลาเข้า - ออก </p>
                        <select class="form-select" name="bat_time" style="margin-left: 150px; width: 150px;">
                            <?php foreach ($result2 as $results2) { ?>
                                <option value="<?php echo $results2["b_time"]; ?>">
                                    <?php echo $results2["b_time"]; ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-dark btn-lg" style="width: 200px; margin-top: 10px;">
                            ยืนยัน
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <p style="margin-top: 100px;"></p>

    <div class="container time-table">
        <div class="booking">
            <h3 class="text-menu">ตารางการใช้งานสนานที่ 2</h3>
        </div>
        <table class="table table-borderless text-menu">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">8:00-9:00</th>
                    <th scope="col">9:00-10:00</th>
                    <th scope="col">10:00-11:00</th>
                    <th scope="col">11:00-12:00</th>
                    <th scope="col">12:00-13:00</th>
                    <th scope="col">13:00-14:00</th>
                    <th scope="col">14:00-15:00</th>
                    <th scope="col">15:00-16:00</th>
                    <th scope="col">16:00-17:00</th>
                    <th scope="col">17:00-18:00</th>
                    <th scope="col">18:00-19:00</th>
                    <th scope="col">19:00-20:00</th>
                </tr>
            </thead>
            <tbody>
                <tr align="center">
                    <th scope="row">Sun</th>
                    <?php check_time("Sun"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Mon</th>
                    <?php check_time("Mon"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Tue</th>
                    <?php check_time("Tue"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Wed</th>
                    <?php check_time("Wed"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Thu</th>
                    <?php check_time("Thu"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Fri</th>
                    <?php check_time("Fri"); ?>
                </tr>
                <tr align="center">
                    <th scope="row">Sat</th>
                    <?php check_time("Sat"); ?>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>
<?php $conn->close(); ?>