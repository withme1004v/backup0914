<?php

  include "PHPMailer/PHPMailer.php";
  include "PHPMailer/SMTP.php";

  $mail = new PHPMailer(true);

  $mail->IsSMTP();
  
  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $phone = $_POST['tel']; 
  $message = $_POST['message']; 
  $chkvalue = $_POST['hobby']; 
  /*$cnt = count($chkvalue); */
  //$in_str = implode(",", $chkvalue); 
//radio 버튼 name hobby 인경우 $hobby = $_POST['hobby'];-->가능하다
//checkbox 버튼 name hobby[]인경우 $chkvalue = $_POST['hobby'];
try {

//메일서버나 인증에관련된 내용

	$mail->Host = "smtp.naver.com";  // 메일서버 주소 

	$mail->SMTPAuth = true; // SMTP 인증을 사용함

	$mail->Port = 465; 	// email 보낼때 사용할 포트를 지정

	$mail->SMTPSecure = "ssl";  // SSL을 사용함

	$mail->Username = "withme1004v@naver.com";  // 계정  [ ??? =gmail 메일주소 @앞부분]

	$mail->Password ="jinju445!"; // 패스워드         [ ??? = gamil 계정 페스워드 ]

	$mail->CharSet = 'utf-8'; 

	$mail->Encoding = "base64";

	

	//실제 메일에 관련된내용

	$mail->From="withme1004v@naver.com"; // 메일보내는사람 메일주소

	$mail->FromName= "하의숙"; //보내는사람 이름

  // 받는사람메일주소 , 받는사람이름	

  $mail->AddAddress("withme1004v@naver.com", "하의숙"); 

	$mail->Subject = "TEST 메일 제목"; // 메일 제목

	$mail->Body = "이름 : $name \r\n메일주소 : $email \r\n전화 : $phone \r\n관심분야 : $chkvalue \r\n내 용 : $message \r\n"; // 메일 내용

	$mail->Send(); // 실제로 메일을 보냄

//	echo "메일을 전송하였습니다.";
   echo "<script>location.href='http://www.naver.com'</script>";

} catch (phpmailerException $e) {

	echo $e->errorMessage();

} catch (Exception $e) {

	echo $e->getMessage();

}
