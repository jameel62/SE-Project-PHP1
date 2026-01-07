<?php
session_start(); // تفعيل الجلسة لتذكر المستخدم
include('db.php');

if (isset($_POST['login'])) {
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    // البحث عن المستخدم في جدول app_user
    $sql = "SELECT * FROM app_user WHERE username='$user' AND password='$pass'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $user;
        echo "<h3> مرحباً بك  $user، تم تسجيل دخولك بنجاح!</h3>";
    } else {
        echo "<h3 style='color:red;'>خطأ: اسم المستخدم أو كلمة المرور غير صحيحة.</h3>";
    }
}
?>

<form method="POST" action="">
    <h2>تسجيل الدخول</h2>
    <input type="text" name="username" placeholder="اسم المستخدم" required><br>
    <input type="password" name="password" placeholder="كلمة المرور" required><br>
    <button type="submit" name="login">دخول</button>
</form>