<?php

 $resurce = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'out.csv', 'w');

      $lines = [
        ['13.09.2018', "1" => '256.00', 'Слоеный пирог'],
        ['13.10.2018', "1" => '280.00', 'Индейка'],
      ];
        foreach ($lines as $value) {
          fputcsv($resurce, $value, ';');
        }


          foreach ($lines as $value) {
  		if ($lines[0] === date('Y-m-d')) {
  			$flag = true;
        break;
  		}
  	}



     fclose($resurce);



?>



  <!-- $outr = impload(",", $lines);







<!--
$resource = fopen(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', 'w');
  fwrite($resource, 'Hello World 1' . PHP_EOL);
  fwrite($resource, 'Hello World 2' . PHP_EOL);
 fclose($resource);
?>  -->

<!--
$result = file_put_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.txt', implode(PHP_EOL, [
  'first line',
  'second line',
  'second row'
]));

print_r('Добавлена строка:', $result);   -->
