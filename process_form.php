<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // معلومات البريد الإلكتروني
    $to = "roooya.m211@gmail.com"; //البريد الإلكتروني ه
    $subject = "New Message from your cv Website"; // موضوع البريد الإلكتروني

    // بيانات النموذج
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // إعداد جسم البريد الإلكتروني
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // إرسال البريد الإلكتروني
    $mail_sent = mail($to, $subject, $body);

    // التحقق مما إذا كان البريد قد تم إرساله بنجاح
    if ($mail_sent) {
        echo '<p>Thank you for contacting us. We will be in touch shortly!</p>';
    } else {
        echo '<p>Sorry, an error occurred. Please try again later.</p>';
    }
} else {
    // إرسال رمز الخطأ 405 إذا تم استدعاء الملف بطريقة غير صحيحة
    http_response_code(405);
    exit("Method Not Allowed");
}
?>