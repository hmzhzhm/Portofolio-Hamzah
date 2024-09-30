<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$response = array('status' => '', 'message' => '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['user_name']);
    $email = htmlspecialchars($_POST['user_email']);
    $subject = htmlspecialchars($_POST['user_subject']); // Tambahkan subject
    $project = htmlspecialchars($_POST['user_project']);

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // Ganti dengan SMTP server Anda
        $mail->SMTPAuth   = true;
        $mail->Username   = 'alfariansyah22@gmail.com'; // Ganti dengan email Anda
        $mail->Password   = 'migv fpqb wtho zajz'; // Ganti dengan password email Anda
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('alfariansyah22@gmail.com'); // Ganti dengan email Anda

        // Content
        $mail->isHTML(true);
        $mail->Subject = $subject; // Gunakan subject dari form
        $mail->Body    = "Nama: $name<br>Email: $email<br><br>Pesan:<br>$project";

        $mail->send();
        $response['status'] = 'success';
        $response['message'] = 'Berhasil mengirim email!';
    } catch (Exception $e) {
        $response['status'] = 'error';
        $response['message'] = "Failed to send email. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request.';
}

echo json_encode($response);

