<?php
$frm_name  = "Company Name";
$recepient = "info@mydomain.com";
$sitename  = "Site Name";
$subject   = "New message from site \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$formname = trim($_POST["formname"]);

$message = "
Form: $formname <br>
Name: $name <br>
Phone or mail: $phone <br>
";

$domain = $_SERVER['SERVER_NAME'];

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ✉ $sitename <$domain>\r\n";


mail($recepient, $subject, $message, $headers);