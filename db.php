<?php
// إعدادات الاتصال بالسيرفر المحلي XAMPP
$host = "localhost";
$user = "root";
$pass = ""; 
$db   = "project_db"; // اسم القاعدة كما يظهر في صورتك

// إنشاء الاتصال باستخدام مكتبة mysqli
$conn = mysqli_connect($host, $user, $pass, $db);

// التحقق من أن الاتصال يعمل بنجاح
if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>