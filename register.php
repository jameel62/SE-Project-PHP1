<?php
include('db.php'); // استدعاء ملف الاتصال

if (isset($_POST['register'])) {
    // تصحيح الخطأ الإملائي الذي ظهر في الصورة السابقة
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']); 

    // إدخال البيانات في الجدول الصحيح app_user
    $sql = "INSERT INTO app_user (username, password) VALUES ('$user', '$pass')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<h3>تم إنشاء الحساب بنجاح!</h3>";
    } else {
        echo "خطأ في التسجيل: " . mysqli_error($conn);
    }
}
?>

<form method="POST" action="">
    <h2>تسجيل حساب جديد</h2>
    <input type="text" name="username" placeholder="اسم المستخدم" required><br>
    <input type="password" name="password" placeholder="كلمة المرور" required><br>
    <button type="submit" name="register">تسجيل</button>
</form>