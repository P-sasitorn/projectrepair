<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/insertdevice.css">
    
    
    
</head>
<body>

    <header class="header">
        <a href="#" class="logo">สำนักงานสรรพสามิตภาคที่ ๙</a>

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
            <div class="form-container">
                <h2>เพิ่มข้อมูลอุปกรณ์</h2>
               
                <form>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox1" class="custom-checkbox"> 
                        <label for="checkbox">คอมพิวเตอร์</label>

                        <input type="checkbox" id="checkbox2" class="custom-checkbox">
                        <label for="checkbox">ปริ้นเตอร์ & แสกนเนอร์</label>

                        <input type="checkbox" id="checkbox3" class="custom-checkbox">
                        <label for="checkbox">โทรศัพท์</label>

                        <input type="checkbox" id="checkbox4" class="custom-checkbox">
                        <label for="checkbox">อื่น ๆ</label>
                    </div>

                    <div class="form-group">
                        <label for="brand">ยี่ห้อ :</label>
                        <input type="text" id="brand" name="brand" required>
                    </div>

                    <div class="form-group">
                        <label for="model">รุ่น :</label>
                        <input type="text" id="model" name="model" required>
                    </div>

                    <div class="form-group">
                        <label for="serial">หมายเลขเครื่อง :</label>
                        <input type="text" id="serial" name="serial" required>
                    </div>

                    <div class="form-group">
                        <button type="submit">เพิ่มข้อมูล</button>
                    </div>
                    
                </form>
            </div>
        </section>
            
    </main>

    <footer>
        <p>&copy; ระบบแจ้งซ่อม </p>
    </footer>
    

    
    
    
</body>
</html>