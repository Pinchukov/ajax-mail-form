<?php
$frm_name  = "Company Name";
$recepient = "info@mydomain.com";
$sitename  = "Site Name";
$subject   = "New message from site \"$sitename\"";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$select1 = trim($_POST["select1"]);
$select2 = trim($_POST["select2"]);
$radio1 = trim($_POST["radio1"]);
$checkbox1 = trim($_POST["checkbox1"]);
$formname = trim($_POST["formname"]);


$message = "
Form: $formname <br>
Name: $name <br>
Phone or mail: $phone <br>
Message: $text <br>
Select 1: $select1 <br>
Select 2: $select2 <br>
Radio 1: $radio1 <br>
Checkbox 1: $checkbox1 <br>
";

$domain = $_SERVER['SERVER_NAME'];

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: ✉ $sitename <$domain>\r\n";


mail($recepient, $subject, $message, $headers);