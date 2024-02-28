<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/problem.css">
    <style>  


</style>  
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
          <h1>แจ้งปัญหาอุปกรณ์</h1>
            <a class="bn31" href="insertdevice.php"><span class="bn31span">เพิ่มข้อมูล</span></a>

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
                    <select name="problem" id="problem">
                        <!-- เพิ่มตัวเลือก <option> -->
                        <option >ปัญหาที่ต้องการแจ้ง</option>    
                        <option value="volvo">เครื่องไม่ติด</option>
                        <option value="saab">จอดับ</option>
                        <option value="mercedes">เครื่องทำงานช้า</option>
                        <option value="audi">ปริ้นเอกสารไม่ได้</option>
                        <option value="audi">กระดาษติด</option>
                        <option value="audi">เน็ตใช้งานไม่ได้</option>
                        <option value="audi">โทรศัพท์โทรออกไม่ได้</option>
                        <option value="audi">เปิดโปรแกรมไม่ได้</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="u_name">ชื่อ-นามสกุล ผู้แจ้ง </label>
                        <input type="text" id="u_name" name="u_name" required>
                    </div>

                    <div class="form-group">
                        <label for="u_phone">เบอร์โทรติดต่อ</label>
                        <input type="text" id="u_phone" name="u_phone" required>
                    </div>


                    <div class="form-group">
                        <button type="submit">บันทึก</button>
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