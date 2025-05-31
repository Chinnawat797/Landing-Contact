<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // คลาสสำหรับการทำงานหลักของการส่งอีเมล์
    class FormHandler {
        public function sendContact($data) {
            $name = htmlspecialchars(trim($data['name']));
            $email = htmlspecialchars(trim($data['email']));
            $message = htmlspecialchars(trim($data['message']));

            // ตรวจเช็คค่าว่างใน Input
            if (empty($name) || empty($email) || empty($message)) {
                return ['success' => false, 'กรุณากรอกข้อมูลให้ครบถ้วน'];
            }

            try {
                // ตั่งค่า Email สำหรับการส่งข้อความในกรณีนี้อาจะใช้เป็น Email ส่วนกลาง
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->Host = $_ENV["SMTP_HOST"];
                $mail->SMTPAuth = true;
                $mail->Username = $_ENV["SMTP_USERNAME"];
                $mail->Password = $_ENV["SMTP_PASSWORD"];
                $mail->SMTPSecure = $_ENV["SMTP_SECURE"];
                $mail->Port = $_ENV["SMTP_PORT"];

                // ตั้งค่าผู้ส่งผู้รับและ Contant ภายใน Email
                $mail->setFrom($_ENV["MAIL_FROM"], $_ENV["MAIL_FROM_NAME"]);
                $mail->addAddress($_ENV['MAIL_FROM']);
                $mail->Subject = "New message from ITHub";
                $mail->Body = "ชื่อ: $name\nอีเมล: $email\nข้อความ: $message";

                $mail->send();
                return ["success" => true, "message" => "Successfully"];
            } catch (Exception $e) {
                return ["success" => false, "message" => "Send Message To Failed" . $mail->ErrorInfo];
            }
        }
    }
?>