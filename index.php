<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="new_log.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">
</head>

<body style="background-color: #4c6e88; font-family: 'Prompt', sans-serif;">
    <div class="container">
        <div class="div-right-1" style="border-radius: 40px;">
            <div class="row row-cols-2">
                <div class="col-4" style="padding-left: 50px;">
                    <div style="padding-left: 18px;">
                        <img src="image/Logo-tni.png" style="width: 195.5px; height: 260.5px; margin-top: 50px;">
                        <!-- <h3 class="text-menu" style="margin-top: 100px;">สนามกีฬาสถาบันเทคโนโลยีไทย-ญี่ปุ่น</h3> -->
                    </div>
                    <div class="div-login" >
                        <h5 class="text-menu" align='center'>Login to your account</h5>
                        <form style="width:100%;" method="post" action="checklogin.php">
                            <label for="basic-url" class="text-menu">กรอกรหัสนักศึกษา</label>
                            <div class="input-group mb-3">
                                <input type="text" name="pass" maxlength="10" min="0" max="9" class="form-control"  placeholder="ไอดีสถาบัน">
                            </div>
                            <button class="btn btn-dark button-log " type="submit">Login now</button>
                        </form>
                    </div>
                </div>
            <div class="col-6">
                <img src="image/db2e8e19c9ed6047.jpg" width="800" height="550" style="margin-top: 10px; margin-left: -10px; border-top-right-radius: 40px; border-bottom-right-radius: 40px" alt="" srcset="">
            </div>
            </div>
            
        </div>
    </div>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>