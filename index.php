<?php
/*
Работа с foreach
1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.*/
echo "<hr/>";
echo "1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.<br/><br/>";
$arr = ['html','css','php','js','jq'];
foreach($arr as $key =>$value){
    echo "$value<br/>";
}
echo "<hr/>";

//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
echo "<hr/>";
echo "2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную \$result.<br/><br/>";
$result = 0;
$arr = [1, 20, 15, 17, 24, 35];
foreach($arr as $value){
    $result+=$value;
}
echo "result = ".$result;
echo "<hr/>";

//3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
echo "<hr/>";
echo "3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную \$result.<br/><br/>";
$result = 0;
$arr = [26, 17, 136, 12, 79, 15];
foreach($arr as $value){
    $result+= pow($value , 2);
}
echo "Сумма квадратов элементов = ".$result;
echo "<hr/>";


/*Работа с ключами
4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
*/
echo "<hr/>";
echo "4. Дан массив \$arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.<br/><br/>";

$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
foreach($arr as $key=>$value){
    echo "$key<br/>";
}

foreach($arr as $value){
    echo "$value<br/>";
}
echo "<hr/>";

//5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
echo "<hr/>";
echo "5. Дан массив \$arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.<br/><br/>";

$arr = ['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];

foreach($arr as $key => $value){
   echo $key."- зарплата ".$value." долларов.<br/>";
}
echo "<hr/>";

//6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');
echo "<hr/>";
echo "6. Дан массив \$arr. С помощью цикла foreach запишите английские названия в массив \$en, а русские — в массив \$ru.<br/><br/>";
$arr = array('green' => 'зеленый', 'red' => 'красный','blue' => 'голубой');
$en=[];
$ru=[];
foreach($arr as $key => $value){
     array_push($en,$key);
    $ru[] = $value;    
}
print_r($en);    
print_r($ru);    
echo "<hr/>";

//7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
echo "<hr/>";
echo "7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.<br/><br/>";

$arr = [2, 5, 9, 15, 0, 4];
foreach($arr as $value){
    if( 3 < $value && $value < 10){
        echo $value."<br/>";
    }
}
echo "<hr/>";

//8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '123456789'. Циклы while и for
echo "<hr/>";
echo "8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '123456789'. Циклы while и for<br/><br/>";

$arr =[1, 2, 3, 4, 5, 6, 7, 8, 9];
$i=0;
$str='';

foreach($arr as $value){
    $str.=$value;
}
echo $str."<br/>";

$str = '';
while($i < count($arr)){
    $str.=$arr[$i];
    $i++;
}
echo $str."<br/>";

$str='';
for($i=0; $i < count($arr); $i++){
    $str.=$arr[$i];
}
echo $str;
echo "<hr/>";

//9. Выведите столбец чисел от 1 до 100.
echo "<hr/>";
echo "9. Выведите столбец чисел от 1 до 100.<br/><br/>";
for($i=1; $i <101;$i++){
    echo $i."<br/>";
}
echo "<hr/>";

//10. Выведите столбец чисел от 11 до 33.
echo "<hr/>";
echo "10. Выведите столбец чисел от 11 до 33.<br/><br/>";
$i = 11;
while($i < 34){
    echo $i."<br/>";
    $i++;
}
echo "<hr/>";

//11. Выведите столбец четных чисел в промежутке от нуля до 100.
echo "<hr/>";
echo "11. Выведите столбец четных чисел в промежутке от нуля до 100.<br/><br/>";
for($i=0; $i <101; $i++){
    if(($i%2)==0 && $i!=0){
        echo $i."<br/>";
    }
}
echo "<hr/>";

//12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
echo "<hr/>";
echo "12. Дано число \$n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную \$num.<br/><br/>";
$n = 1000;
$num = 0;

while($n >= 50){
    $n = $n / 2;
     $num ++;
}
echo "количество итераций: ".$num;
echo "<hr/>";

//13. Вывести таблицу умножения
echo "<hr/>";
echo "13. Вывести таблицу умножения<br/><br/>";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<link rel ="stylesheet" type="text/css" href="css/style.css">
        <title>Таблица умножения</title>
	</head>
	<body>
	  <table border="1px">
	   <?php 
          $x = 10;
          $y = 10;
          for($i=1; $i <= $x; $i++){
              echo "<tr>";
              for($j=1; $j <= $y; $j++){
                  echo "<td>";
                  echo $i * $j;
                  echo "</td>";
              }
              echo "</tr>";
          }
        ?>
     </table>
<?php
    echo "<hr/>";
//14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.
echo "<hr/>";
echo "14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением \$e, равном 2, 3 или 4. Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.<br/><br/>";
$arr = [4, 2, 5, 19, 13, 0, 10];
$i = 0;
foreach($arr as $e){
    if($e === 2 || $e === 3 || $e === 4 )
       $i++;
}
if($i > 0){
    echo "Есть!".$i." совпадений";
}else{
    echo "Нет!";
} 
echo "<hr/>";

//15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.
echo "<hr/>";
echo "15. Дан массив \$arr. С помощью цикла foreach и переменной \$count подсчитайте количество элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2, 5, 19, 13, 0, 10.<br/><br/>";
$arr = [4, 2, 5, 19, 13, 0, 10];
$i = 0;
foreach($arr as $value){
    $i++;
}
echo "количество элементов массива ".$i."<br/>";
echo "проверочка ".count($arr);
echo "<hr/>";

//16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9
echo "<hr/>";
echo "16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке. 1, 2, 3 4, 5, 6 7, 8, 9<br/><br/>";
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($arr as $value){
    if(($value%3)===0){
        echo "$value<br/>";
        continue;
    }
     echo "$value ,<br/>";
}
echo "<hr/>";

//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.
echo "<hr/>";
echo "17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной \$month.<br/><br/>";
$month = (int)(date('m'));
$arr_monthes =[1=>'январь','февраль','март','апрель','май','июнь','июль','август','сентябрь','октябрь','ноябрь','декабрь'];
foreach($arr_monthes as $key => $value){
    if($key === $month){
        echo "<b>$value</b><br/>";
        continue;
    }
    echo $value."<br/>";
}
echo "<hr/>";

//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.
echo "<hr/>";
echo "18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, выходные дни следует вывести жирным.<br/><br/>";
$week = [1=>'понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
foreach($week as $key => $day){
    if($key === 6 || $key === 7){
        echo "<b>$day</b><br/>";
        continue;
    }
    echo $day."<br/>";
}
echo "<hr/>";

//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
echo "<hr/>";
echo "19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной \$day.<br/><br/>";
$week = ['monday' => 'понедельник',
         'tuesday' =>'вторник',
         'wednesday' => 'среда',
         'thursday' =>'четверг',
         'friday' => 'пятница',
         'saturday' =>'суббота',
         'sunday' => 'воскресенье'];
        
$day = jddayofweek ( cal_to_jd(CAL_GREGORIAN, date("m"),date("d"), date("Y")) , 1 );
$day = strtolower($day);
        
echo "<br/>";
foreach($week as $key => $value){
    if($day === $key){
        echo "<i>$value</i><br/>";
        continue;
    }
    echo $value."<br/>";
}
echo "<hr/>";

/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
x
xx
xxx
xxxx
xxxxx
    */
echo "<hr/>";
echo "20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.<br/><br/>";
$x = 20;//количество рядов

for($i = 1; $i <= $x; $i++){
    for($j=1; $j <= $i;$j++){
        echo 'x';
    }
    echo "<br/>";
}
echo "<hr/>";

/*21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.

1
22
333
4444
55555
*/
echo "<hr/>";
echo "21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5<br/><br/>";
$x = 9;//количество рядов

for($i = 1; $i <= $x; $i++){
    for($j=1; $j <= $i;$j++){
        echo $i;
    }
    echo "<br/>";
}
echo "<hr/>";

/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.

xx
xxxx
xxxxxx
xxxxxxxx
xxxxxxxxxx
*/
echo "<hr/>";
echo "22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br/><br/>";
$x = 5;//количество рядов

for($i = 1; $i <= $x; $i++){
    for($j=1; $j <= $i;$j++){
        echo 'xx';
    }
    echo "<br/>";
}
echo "<hr/>";

/*23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.

По желанию можете сделать проверку на корректность введения данных пользователем.
*/
echo "<hr/>";
echo "23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.<br/><br/>";
?>
<form action="index.php" method="post">
  <p><input type="text" name="number" placeholder="Enter some number"></p>
  <p><input type="submit"></p>
 </form>
<?php
    if(isset($_POST['number'])){
        if(is_numeric($_POST['number'])){
            $num = $_POST['number'];
            $sum = 0;
            
            while($num > 0){
                $sum+=$num % 10;
                $num = (int)$num / 10;
            }
            echo "Сумма составляющих числа ".$_POST['number']." равна ".$sum;
        }else{
            echo "Вы ввели не число";
        }
    }else{
        echo "Введите целое число в поле формы";
    }
echo "<hr/>";
//24. Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.
echo "<hr/>";
echo "24. Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза.<br/><br/>";
        
$num = $first_num = 1058755745;
$search_num = 5;
$i=0;
while($num > 0){
    $current_num = $num%10;
    echo $current_num."<br/>";
    if($current_num === $search_num){
        $i++;
    }
    $num = (int)$num / 10;
}
echo "количество вхождений цифры ".$search_num." в числе ".$first_num." равно ".$i;
echo "<hr/>";
        
//25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
echo "<hr/>";
echo "25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами<br/><br/>";
$max = 0;
$min = 0;
$key_max = 0;
$key_min = 0; 

for($i=0; $i < 10; $i++){
    $rand_arr[] = rand(1, 100);
}
foreach($rand_arr as $key=>$value){
    if($key!= 0){
        if($value >= $max){
            $max = $value;
            $key_max = $key;
        }
        if($min >= $value){
            $min = $value;
            $key_min = $key;
        }
    }else{
        $max = $value;
        $min = $value;
    }
}
echo "<pre>";
print_r($rand_arr);
echo "</pre>";
        
echo "min = ".$min."<br/>";
echo "max = ".$max."<br/>";
        
$rand_arr[$key_min] = $max;
$rand_arr[$key_max] = $min;

echo "<pre>";
print_r($rand_arr);
echo "</pre>";
echo "<hr/>";
        
//26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (фя rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
echo "<hr/>";
echo "26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (фя rand). Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. После вывести на экран элементы, которые больше ноля и у которых не парный индекс.<br/><br/>";
for($i=0; $i < 5; $i++){
    $rand_arr2[] = rand(1, 100);
}
$mult = 1;
foreach($rand_arr2 as $key=>$value){
    if(($value > 0) && ($key%2 == 0)){
        $mult*=$value;
    }
    if(($value > 0) && ($key%2 != 0)){
        echo "[$key]=>".$value."<br/>";
    }
}
echo "<pre>";
print_r($rand_arr2);
echo "</pre>";
echo "Произведение парных чисел равно ".$mult;
echo "<hr/>";
        
//27. Создать генератор случайных таблиц. Есть переменные: $rows - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. 
echo "<hr/>";
echo "27. Создать генератор случайных таблиц. Есть переменные: \$rows - кол-во строк в таблице, \$cols - кол-во столбцов в таблице. Есть список цветов, в массиве: \$colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера \$rows на \$cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива \$colors. В каждой ячейке должно находиться случайное число.<br/><br/>";
$rows = 5;//кол-во строк в таблице
$cols = 5;// кол-во столбцов в таблице 
$colors = array('red','yellow','blue','gray','maroon','brown','green');
?>
    <table border="1px">
       <?php
            for($i=0; $i < $rows; $i++){
                echo "<tr>";
                for($j=0; $j < $cols; $j++){
                    $color = $colors[rand(0, count($colors)-1)];
                    echo "<td style='background:$color'>";
                    echo $num = rand();
                    echo "</td>";
                }        
                echo "</tr>";
            }
        ?>
    </table>
<?php
  echo "<hr/>";      
?>
 	</body>
</html>

