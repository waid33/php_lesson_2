<?php
//28. Вывести таблицу умножения с помощью двух циклов for.
//MVC conception
$table =[];

for($a = 1; $a < 10; $a++){
    $table[$a] = [];
    for($b = 1; $b < 10; $b++){
        $table[$a][$b] = $a * $b;
    }
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset = utf-8">
		<link rel ="stylesheet" type="text/css" href="css/style.css">
        <title>Таблица умножения(MVC концепция)</title>
	</head>
	<body>
	  <table>
          <?php foreach($table as $rowKey => $row):?>
	      <tr>
              <?php foreach($row as $tdKey => $value):?>
              <?php 
                $r = dechex(rand(0,255));
                $g = dechex(rand(0,255));
                $b = dechex(rand(0,255));
                $color = "#$r$g$b";
                $style = "style = 'background:$color'";
              ?>
               <td <?=$style?>>
                <?php if($rowKey == 1 || $tdKey ==1):?>
                   <b><?=$value?></b>
                <?php else:?>
                    <?=$value?>
                <?php endif;?>  
	           </td>
	           <?php endforeach;?>
	      </tr>
	      <?php endforeach;?>
	  </table>
	</body>
</html>