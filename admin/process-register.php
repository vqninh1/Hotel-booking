<?php
include('./config/db.php');

$username = $_POST['username'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$str=rand();
$code = md5($str);
$sql_1 = "SELECT * from db_users where email_user = '$email'";
$result_1 = mysqli_query($conn, $sql_1);

if (mysqli_num_rows($result_1)>0){
    $value ='existed';
    header("Location: register.php?response=$value");
} else {
    $pass_hash = password_hash($pass1, PASSWORD_DEFAULT);
    $sql_2 = "insert into db_users(name_user, password_user, email_user, phone, address) 
    values ('$username','$pass_hash','$email','$phonenumber','$address')";
    $result_2 = mysqli_query($conn, $sql_2);
<<<<<<< HEAD
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'tuanmanucian2001@gmail.com'; // SMTP username
        $mail->Password = 'zwptqlvmaqmdceei'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom('tuanmanucian2001@gmail.com', ' Đăng ký tài khoản Hilton Hotel');

        $mail->addReplyTo('tuanmanucian2001@gmail.com', 'Dăng kí tài khoản Hilton Hotel');

        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true);   // Set email format to HTML
        $tieude = '[Đăng kí tài khoản ] kích hoạt tài khoản';
        $mail->Subject = $tieude;

        
        // Mail body content 
        $bodyContent = '<p>Chào mừng bạn đến với dbdt</h1>';
        $bodyContent .= '<p>Bạn vui lòng nhấp vào đường link dưới đây để kích hoạt tài khoản</p>';
        $bodyContent .= '<p><a href="http://localhost/Hotel-booking/admin/activation.php?email='.$email.'&code='.$code.'">Click here</a></p>';
        
        $mail->Body = $bodyContent;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        if ($mail->send()) {
            echo 'Thư đã được gửi đi';
        } else {
            echo 'Lỗi. Thư chưa gửi được';
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$email->ErrorInfo}";
    }
=======
>>>>>>> cb5ba91fb5cc27fe9565c216521c0d129bbf0163

    if ($result_2 > 0) {
        $value = 'successfully';
        header("Location: register.php?response=$value");
    }
}