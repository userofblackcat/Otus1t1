<?php
// aaaaa

class Otus1 {
	public function sqrt1($x) {
		$rez = $x * $x;
		
		return $rez;
	}
}

// ������ �������� �� ����������� � ���� �����
ini_set("display_errors", "on");


//var_dump($argv);

//�������� ������ �� ������� �����
$vvod = $argv[1];
$on = new Otus1();
$vivod = $on->sqrt1($vvod);
echo $vivod;

