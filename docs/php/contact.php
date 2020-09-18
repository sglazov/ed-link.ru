<?php

if ( isset($_POST['name']))  { $name = $_POST['name']; }
if ( isset($_POST['mail']))  { $mail = $_POST['mail']; }
if ( isset($_POST['message']))  { $type = $_POST['message']; }

$ip    = getenv(REMOTE_ADDR);
$time  = date("H:i:s d M Y");
$soft  = getenv(HTTP_USER_AGENT);
$url_o = getenv(HTTP_REFERER);
$sub   = "=?utf-8?b?".base64_encode("Письмо с Ed-Link.ru")."?=";
$address = "dmitry@promopult.ru"; //
$headers  = "From: " . strip_tags($mail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($mail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
$mes  = "<html><body style='font-family:Arial,sans-serif;'>";
$mes .= "<h1 style='Margin: .5em 0; font-family: Roboto, Helvetica, Arial, sans-serif; font-size: 24px; line-height: 34px;color:#333333;'>Ed-Link.ru</h1>\r\n";
if (isset($_POST['name'])){$mes .= "<p style=\"Margin: 1em 0; font-family: -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 26px;\"><strong>Представились:</strong> ".$name."<br />\r\n";}
if (isset($_POST['mail'])) {$mes .= "<strong>Адрес электронной почты:</strong> ".$mail."<br />\r\n";}
if (isset($_POST['message'])) {$mes .= "<strong>Что пишут:</strong> ".$type."</p>\r\n";}
$mes .= "<p style=\"Margin: 1em 0; color: #657195; font-family: -apple-system, BlinkMacSystemFont, Roboto, Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; text-align: left;\">IP: ".$ip."<br />\r\n";
$mes .= "<strong>Время отправки заявки:</strong> ".$time."<br />\r\n";
$mes .= "<strong>Браузер:</strong> ".$soft."<br />\r\n";
$mes .= "<strong>Откуда пришёл посетитель:</strong> ".$url_o."</p>\r\n";
$mes .= "</body></html>";
mail ($address,$sub,$mes,$headers);

// Записать данные из формы в файл

$fo=fopen("log_orders.txt", "a");
fwrite($fo, "
  <tr>
   <td>$time</td>
   <td>{$_POST['name']}</td>
   <td><a href=\"mailto:{$_POST['mail']}\">{$_POST['mail']}</a></td>
   <td>{$_POST['message']}</td>
  </tr>\n");
fclose($fo);
?>