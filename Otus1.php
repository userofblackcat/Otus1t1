<?php
// aaaaa

class Otus1 {
	public function sqrt1($x) {
		$rez = $x * $x;
		
		return $rez;
	}
}

// ошибки включены на отображение в этом файле
ini_set("display_errors", "on");


//var_dump($argv);

//получаем данные из консоли ввода
$vvod = $argv[1];
$on = new Otus1();
$vivod = $on->sqrt1($vvod);
echo $vivod;

