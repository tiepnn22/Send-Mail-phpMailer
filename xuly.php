<?php
	require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'send-mail-phpmailer' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	$mail = new PHPMailer(true);
	try {
	    //Server settings
	    // $mail->SMTPDebug = 2;
	    $mail->isSMTP();
	    $mail->Host = 'smtp.gmail.com';
	    $mail->SMTPAuth = true;
	    $mail->Username = '';
	    $mail->Password = '';
	    $mail->SMTPSecure = 'tls';
	    $mail->Port = 587;
	    $mail->CharSet = 'UTF-8';
	 
	    //Recipients
	    $mail->setFrom('tieungunhi220194@gmail.com', 'TenWeb');

	    $mail->addAddress('tieungunhi220194@gmail.com', 'TenWeb');	//tới, có thể nhiều gmail
	    // $mail->addAddress('tieungunhi220194@example.com');

	    // $mail->addReplyTo('tiepnguyen220194@gmail.com', 'ReplyTo tiepnguyen');	//trả lời

	    // $mail->addCC('Hoaluhue@gmail.com');		//những người khác nhận mail (có show)
	    // $mail->addBCC('tiepnguyen220194@gmail.com');		//những người khác nhận mail (ko show)
	 
	    //Attachments
	    $mail->addAttachment('composer.json');         //url file
	    $mail->addAttachment('composer.json', 'new.jpg');    //url file + rename + rejpg
	 
	    //Content
	    $mail->isHTML(true);
	    $mail->Subject = 'TenWeb - Gửi Mail cho Tên';
	    $mail->Body    = 'Nội dung có thể viết html <b> Bôi đậm </b> !';
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	 
	    $mail->send();
	    echo 'Thành công';
	} catch (Exception $e) {
	    // echo 'Lỗi: ', $mail->ErrorInfo;
	    echo 'Lỗi';
	}
?>