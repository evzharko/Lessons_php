<?php
echo "Lesson 10.28 <br><br>";

$string1 = 'привет';
$string2 = 'как привет дела';
$need   = "п";

function LIterCount ($string1, $string2, $need){
	
	$array_lit = preg_split('//u', $string1.$string2);
	
	$count = 0;
	//echo "<pre>";
	foreach ($array_lit as $value) {
		if ($value === $need){
			$count ++;
		}
	}
return $count;
}

echo (LIterCount($string1, $string2, $need));

echo "<hr><pre>";
//Тестовая регулярка

$string1 = 'привет';
$string2 = 'как привет дела привет привет';
$need   = "п";

preg_match_all("/($need)/u", $string1.$string2, $matches);

var_dump ($matches[0]);