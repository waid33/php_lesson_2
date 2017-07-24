<?php
//1. Составить список случайной длины (-20 до 20) из случайных чисел в диапазоне от -100 до 100.  Подсчитать количество четных, нечетных, положительных и отрицательных значений. Составить ассоциативный массив их этих значений
echo "<hr/>";
echo "1. Составить список случайной длины (-20 до 20) из случайных чисел в диапазоне от -100 до 100.  Подсчитать количество четных, нечетных, положительных и отрицательных значений. Составить ассоциативный массив их этих значений<br/><br/>";
$arr = [];
$length = rand(-20,20);
 for($i= 0;$i < abs($length); $i++){
     $arr[] = rand(-100, 100);
 }
echo"<pre>";
print_r($arr);
echo"</pre>";

$even = 0;//количесто чётных
$odd = 0;//количество нечётных
$positive = 0;//количество положительных
$negative = 0;//количество отрицательных
$new_arr = [];//ассоциативный массив

foreach($arr as $key => $value){
    if((abs($value)%2) == 0){
        $even ++;
        $new_arr['arr_even'][] = $value;
    }
    if((abs($value)%2) != 0){
        $odd ++;
        $new_arr['arr_odd'][] = $value;
    }
    if($value > 0){
        $positive ++;
        $new_arr['arr_positive'][] = $value;
    }
    if($value < 0){
        $negative ++;
        $new_arr['arr_negative'][] = $value;
    }
}

echo "количесто чётных ".$even."<br/>количество нечётных ".$odd."<br/>количество положительных ".$positive."<br/>количество отрицательных ".$negative."<br/>";

echo"<pre>";
print_r($new_arr);
echo"</pre>";
echo "<hr/>";

//2. Дано случайное число. Определить простое ли оно (загуглите что это, если не помните)
echo "<hr/>";
echo "2. Дано случайное число. Определить простое ли оно (загуглите что это, если не помните)<br/><br/>";
$num = rand(2,10);
for($i = 2; $i <= $num;$i++){
    if($i == $num){
        echo "число $num простое";
        break;
    }
    if($num % $i == 0){
        echo "число $num Не простое";
        break;
    }
}
echo "<hr/>";

//3. Дан текст. Определить какая из двух заданных букв встечается чаще.
echo "<hr/>";
echo "3. Дан текст. Определить какая из двух заданных букв встечается чаще.<br/><br/>";
$text = "Some text eeeruh";
$j = 0;//счётчик
$letter_1 = "t";
$letter_2 = "e";
for($i = 0; $i < strlen($text);$i++){
    if($text[$i] === $letter_1){
        $j++;
    }
    if($text[$i] === $letter_2){
        $j--;
    }
}
if($j > 0){
    echo "<b>$letter_1</b> встречается чаще в тексте <b>$text</b> нежели <b>$letter_2</b>";
}elseif($j < 0){
    echo "<b>$letter_2</b> встречается чаще в тексте <b>$text</b> нежели <b>$letter_1</b>";
}else{
    echo "<b>$letter_1</b> и <b>$letter_2</b> встречаются одинаковое количество раз в тексте <b>$text</b>";
}
echo "<hr/>";

//4. Определить, правильно ли в тексте расставлены круглые скобки
/*
echo "<hr/>";
echo "4. Определить, правильно ли в тексте расставлены круглые скобки<br/><br/>";
$copy = $text = "aaa(b)(c))";
$left_bracket = strpos($copy,"(",1);
$right_bracket = strpos($copy, ")",1);

echo $left_bracket."<br/>";
echo $right_bracket."<br/>";

//while($left_bracket || $right_bracket){
    $left_bracket = strrpos($copy,"(",1);
    $right_bracket = strpos($copy, ")",$left_bracket);
    echo substr($copy,$left_bracket,$right_bracket);
    echo "<br/>";
    $copy = str_replace(substr($copy,$left_bracket,$right_bracket) , "",$copy);
//}

echo "<br/>";
echo "copy text = ".$copy."<br/>";
echo "text = "."$text.<br/>";
echo "<hr/>";
*/
    
//5. Определить является ли строка правильной записью целого числа
echo "<hr/>";
echo "5. Определить является ли строка правильной записью целого числа<br/><br/>";
$str = "174578";
$str_int = (int)$str;
if($str == "$str_int") : 
    echo "строка $str является правильной записью целого числа<br/>"; 
else : 
    echo "строка $str является НЕправильной  записью целого числа<br/>" ;
endif;
echo "<hr/>";

//6. Подсчитать в тексте максимальное количетсво цифр, идущих подряд
echo "<hr/>";
echo "6. Подсчитать в тексте максимальное количетсво цифр, идущих подряд<br/>";

$text = '88888 dskl;fj;dsij12 a sdgfkl14,dfm. 174.gf,m';
$arr = explode(' ', $text);
$max_num = 0;
foreach($arr as $value){
    $num = (int)$value;
    if($num >= $max_num){
        $max_num = $num;
    }
}
echo "максимальное количетсво цифр, идущих подряд в тексте <b>'$text'</b> это <b>$max_num</b><br/>";
echo "<hr/>";

//7. Проверить строку на симметричность
echo "<hr/>";
echo "7. Проверить строку на симметричность<br/><br/>";
$s = "kamazzamak";
$arr = [];
for($i=0;$i < strlen($s);$i++){
    $arr[] = $s[$i];
}
$rev_arr = array_reverse($arr);

if($arr === $rev_arr){
    echo "строка $s симметрична";
}else{
    echo "строка $s  НЕ симметрична";
}
echo "<hr/>";
?>