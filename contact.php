<?php
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$to = 'yama56th@gmail.com';
$subject = 'お問い合わせ';
$message = '[お名前]'."\n".$name."\n";
$message .= '[email]'."\n".$email."\n";
$message .= '[コメント]'."\n".$message."\n\n\n";
$header = 'From: '.$email."\r\n";
$header .= 'Reply-To: '.$email."\r\n";
$status = mb_send_mail($to, $subject, $message, $header);
if ($status) {
echo '<p class="msg">メッセージは正常に送信されました</p>';
} else {
echo '<p class="msg">メッセージの送信に失敗しました</p>';
}

?>