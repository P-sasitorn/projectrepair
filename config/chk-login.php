<?php
// Connect to the database
    session_start();
    require_once 'configdb.php';

    if (isset($_POST['chk_login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];


        if (empty($username)) {
            $_SESSION["error"] = 'กรุณากรอกชื่อผู้ใช้งาน';
            header("location: index.php");
        } else if (empty($password)) {
            $_SESSION["error"] = 'กรุณากรอกรหัสผ่าน';
            header("location: index.php");
        } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 8) {
            $_SESSION["error"] = 'รหัสผ่านต้องมีความยาวระหว่าง 8 ถึง 20 ตัวอักษร';
            header("location: index.php");
        } else {

            try {

                $chk_data = $conn->prepare("SELECT * FROM tb_users WHERE username = :username");
                $chk_data->bindParam(":username", $username);
                $chk_data->execute();
                $row = $chk_data->fetch(PDO::FETCH_ASSOC);

                if ($chk_data->rowCount() > 0) {
                    
                    if ($username == $row['username']) {
                        if (password_verify($password, $row['password'])) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['user_id'];
                                header("location: admin_home.php");
                            } else {
                                $_SESSION['user_login'] = $row['user_id'];
                                header("location: home.php");
                            }

                        } else {
                            $_SESSION['error'] = 'รหัสผ่านไม่ถูกต้อง';
                            header("location: index.php");
                        }
                    } else {
                        $_SESSION['error'] = 'ชื่อผู้ใช้งานไม่ถูกต้อง';
                        header("location: index.php");
                    }

                }else {
                    $_SESSION['error'] = 'ไม่มีข้อมูลผู้ใช้งานในระบบ';
                    header('location: index.php');
                }   

            }catch(Exception $e) {
                $_SESSION["error"] = $e->getMessage();
            }


        }


    }

?>
