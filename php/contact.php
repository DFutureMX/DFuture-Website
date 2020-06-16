<?php
	ob_start();
	session_start();
	require_once './php/PHPMailerAutoload.php';
	$errors = [];
	if(isset($_POST['f_name'], $_POST['l_name'], $_POST['email'], $_POST['cell'], $_POST['message'])){
		$fields = [
			'f_name' => $_POST['f_name'],
            'l_name' => $_POST['l_name'],
            'email' => $_POST['email'],
			'cell' => $_POST['cell'],
			'message' => $_POST['message']
		];
		foreach ($fields as $field => $data) {
			if(empty($data)){
				$errors[] = 'The '. $field. ' field is required';
			}
		}
		if(empty($errors)){
			$mail = new PHPMailer(true);
			$mail->isSMTP();
			$mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			$mail->SMTPDebug = 4;
			$mail->Mailer = "smtp";
			$mail->SMTPSecure = 'ssl'; 
			$mail->isHTML();
			$mail->Host = 'dfuture.mx';
			$mail->Username = 'abraham.cepeda@dfuture.mx';
			$mail->Password = 'Code2019$';
			$mail->Port = 465;
			$mail->SMTPAuth = true;
			$mail->setFrom('abraham.cepeda@dfuture.mx', 'Abraham Cepeda');
			$mail->AddAddress('abrahamgolf@gmail.com', 'Abraham Cepeda');
			$mail->Subject = 'Form -- '. $fields['subject'];
			$mail->Body = 'From: '. $fields['f_name'] + ' ' + $fields['l_name']. ' Email: '. $fields['email']. ' Cell: '. $fields['cell']. '<p>'. $fields['message']. '</p>';
			if ($mail->send()) {
				header("Location: contact.php", true, 303);
				ob_enf_fluch();
				exit;
			} else{
				header("Location: contact.php", true, 303);
				$errors[] = 'Sorry, try agaaain';
			}
		}
    } else {
			header("Location: contact.php", true, 303);
            $errors[] = 'Something went wrong';
        }
        $_SESSION['errors'] = $errors;
        $_SESSION['fields'] = $fields;
