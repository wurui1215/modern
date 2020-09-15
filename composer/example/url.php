<?php

require(dirname(__DIR__) . '/vendor/autoload.php');

function abc($clsname) {
	include "../src/Url/{$clsname}.php";
}

spl_autoload_register('abc');

$urls = [
    'https://www.baidu.com/',
    'https://www.php.net/autoload',
    'https://blog.csdn.net/',
    'https://www.heronsky.com/'
];

$scanner = new Scanner($urls);
echo "<pre>";
print_r($scanner->getInvalidUrls());
