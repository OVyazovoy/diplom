<?php
  //создание массивов для тестов
  function array_gen($it)
  {
    $array = [];
    for ($i=0; $i < $it ; $i++) {
      array_push($array, rand());
    }
    return json_encode($array);
  }
  //сохранение в файлы для дальнейшего использования
  file_put_contents('json.arrays/array_10.json',array_gen(10));
  file_put_contents('json.arrays/array_100.json',array_gen(100));
  file_put_contents('json.arrays/array_1000.json',array_gen(1000));
  file_put_contents('json.arrays/array_10000.json',array_gen(10000));
  file_put_contents('json.arrays/array_100000.json',array_gen(100000));
  file_put_contents('json.arrays/array_1000000.json',array_gen(1000000));
  file_put_contents('json.arrays/array_10000000.json',array_gen(10000000));
  file_put_contents('json.arrays/array_1000000000.json',array_gen(1000000000));  
?>
