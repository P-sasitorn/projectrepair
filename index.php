<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
    <title>signin</title>
</head>


<body>
        <div class="wrapper">
                <?php if (isset($_SESSION['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
                    </div>
                <?php } ?> 
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="alert alert-success" role="alert">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
                    </div>
                <?php } ?>
            <form action="chk-login.php" method="post">
                <h1>ระบบแจ้งปัญหาคอมพิวเตอร์</h1>
               
                <div class="input-box">
                    <input type="text" placeholder="ชื่อผู้ใช้" name="username" require>
                    <i class='bx bxs-user'></i>
                </div>

                <div class="input-box">
                    <input type="password" placeholder="รหัสผ่าน" name="password">
                    <i class='bx bxs-lock'></i>
                </div>

                <div class="remember-forgot">
                    <label><input type ="checkbox">จดจำรหัสนี้ไว้</label>
                </div>

                <button type="submit" class="btn" name="chk_login">เข้าสู่ระบบ</button>

            </form>
        </div>

    
    
</body>
</html>