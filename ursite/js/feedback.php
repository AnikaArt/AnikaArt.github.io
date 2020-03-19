<?php
$check = @ trim ($_POST['check']);
$phone = @ trim(strip_tags($_POST['phone']));
$email = @ trim(strip_tags($_POST['email']));
$title = @ trim(strip_tags($_POST['title']));
$name = @ trim(strip_tags($_POST['name']));
$message = @ trim(strip_tags($_POST['message']));



if(isset($_POST['check'])) {
    if ($_POST['check'] == 'stopSpam')  {
        $to  = "<anika_rus@mail.ru>,";
        $subject = "$title";
        $msg = "<p><b>ФИО: </b>".$_POST['name']."<br><b>Телефон: </b>".$_POST['phone']."<br><b>Email: </b>".$_POST['email']."<br>".$_POST['message']."</p>";
        $headers  = "Content-type: text/html; charset=\"utf-8\" \r\n";
        $headers .= "From: <info@site.ru>\r\n";
        mail($to, $subject, $msg, $headers);
        $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'/feed_back.php'; header("Location: $redirect#thanks"); exit();
    }
    else {
        $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'/feed_back.php'; header("Location: $redirect#error"); exit();
    }
} else {
    $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'/feed_back.php'; header("Location: $redirect#error"); exit();
}
?>