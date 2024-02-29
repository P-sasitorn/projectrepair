<?php 
    session_start();
    require_once 'config/configdb.php';
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
        header("location: login.php");
    } else {
        $users_id = $_SESSION['user_login'];
        $stmt = $conn->query("SELECT * FROM tb_users INNER JOIN tb_office ON tb_users.office_id = tb_office.office_id WHERE user_id = $users_id ");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/home.css">
    <style>  


</style>  
</head>
<body>

<header class="header">
        <a href="#" class="logo">Logo</a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
        <i class='bx bx-menu' id="menu-icon"></i>
        <i class='bx bx-x' id="close-icon"></i>

        </label>

        <nav class="navbar">
            <a href="home.php">หน้าหลัก</a>
            <a href="status.php">ติดตามสถานะ</a>
            <a href="contact.php">ติดต่อเรา</a>
    </header>

    
    <main>
       
    <section>
            <h1>Computer Repair</h1>
            <h1><?php echo $row['office_branch']; ?></h1>
        </section>


        <section>
            <div class="menu menu1" >    
            <a href="problem.php">แจ้งซ่อมอุปกรณ์</a>
                
            </div>

            <div class="menu menu2">
            <a href="status.php">ติดตามสถานะ</a>
             
            </div>

            <div class="menu menu3">
            <a href="contact.php">ติดต่อ - สอบถาม</a>
              
            </div>

        </section>

       

    </main>


    
    

    <footer>
        <p>&copy; ระบบแจ้งซ่อม </p>
    </footer>
    
    
    
    
</body>
</html>