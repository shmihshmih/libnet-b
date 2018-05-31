<?php
	/*
	Указываем путь к папке, где хранятся файлы
	Например: dirname(__FILE__);
	$currentDir = dirname(__FILE__);
	*/
	$scanArr = scandir(dirname(__FILE__));

	/*
	Указываем путь, кудя ляжет json
	Например "actions.json" для текущей папки
	*/

	$jsonResult = "actions.json";

	$PaulOtletArr = array();

	if (file_exists($jsonResult)) {
		unlink($jsonResult);
	} 

	$fp = fopen($jsonResult, "w");

	foreach ($scanArr as $key => $value) {
		$PaulOtletArr[] = array('title' => $value, 'url' => "", 'decription' => "");
	};

	fwrite($fp, json_encode($PaulOtletArr));
	/*
	Для проверки в консоли
	$fp = fopen($jsonResult, "r");
	$fpDecoded = json_decode(fgets($fp), true);

	foreach ($fpDecoded as $key => $value) {
		print_r($value);
	}
	*/
	
	fclose($fp);
?>