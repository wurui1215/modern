<?php
$email = 'john@ample.com';
// 删除除字母、数字、和英文符号之外的所有其他字符
$emailSafe = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $email . "<br/>";
echo $emailSafe . "<br/>";

$string = "\ni？@#@￥34#@$$falfjowi\t";
$safeString = filter_var(
	$string,
	FILTER_SANITIZE_STRING,
	FILTER_FLAG_STRIP_LOW|FILTER_FLAG_ENCODE_HIGH
);
echo $string . "<br/>";
echo $safeString . "<br/>";

$isEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
echo $isEmail . "<br/>";
if ($isEmail !== false) {
	echo "success";
} else {
	echo "Fail";
}

$output = '<p><script>alert("NSA backdoor installed");</script>';
echo $output;
echo htmlentities($output, ENT_QUOTES, 'UTF-8');
