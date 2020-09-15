<?php
// 判断是否使用内置服务器
if (php_sapi_name() === 'cli-server') {
	echo '123';
} else {
	echo '456';
}
?>