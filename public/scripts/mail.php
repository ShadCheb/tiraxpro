<?php

if ($_POST) {
  $to = "s.admin@tirax.pro";
  $subject = "Сообщение с сайта Tirax.pro";
  $email = "admin@tirax.pro";
	$mess = '';

	if($_POST['name']) $name = trim(strip_tags($_POST['name']));
	if($_POST['phone']) {
		$phone = stripslashes($_POST['phone']);
		$phone = preg_replace('/\s|\+|-|\(|\)/','', $phone);
	}
  if($_POST['service']) $service = trim(strip_tags($_POST['service']));
  if($_POST['link']) $link = trim(strip_tags($_POST['link']));
  
	if ($name) {
		$mess .= "Имя: " . $name . " ";
	}
	if ($phone) {
		$mess .= "Телефон: " . $phone . "\r\n";
  }
  if ($link) {
		$mess .= "Ссылка: " . $link . "\r\n";
	}
	if ($service) {
		$mess .= "Выбранная услуга: " . $service . "\r\n";
  }
  

  $mail = mail($to, $subject, $mess,
  	"From: ".$name." <".$email.">\r\n"
  	."Reply-To: ".$name."<".$email.">\r\n"
  );

  if ($mail) {
    echo "Ok";
  }
  else{
    header('HTTP/1.1 500 ' . $error );
      exit();
  }
}

?>
