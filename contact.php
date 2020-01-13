<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'alexter.od.ua@gmail.com';
	$subject = 'Контактная форма сайта';

    $headers = 'From: '. $email . "\r\n" .
            'Reply-To: '. $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == true){
		$res['sendstatus'] = 'done';

		$res['message'] = 'Отправка формы прошла успешно';
    }
	else{
		$res['message'] = 'Не удалось отправить почту';
	}
	
	
	echo json_encode($res);
}