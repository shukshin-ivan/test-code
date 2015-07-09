<?php

$file = <<<TXT
1234567890 2013-03-08 12:26:09
0987654321 2013-03-09 09:23:17
1234567890 2014-01-01 00:00:34
0087645544 2015-02-03 17:45:01
0087645544 2015-01-03 11:05:06    
TXT;

/** 
 * работа напрямую с файлом неэффективна
 * это 250тыс юзеров * 100 записей * 5 лет * 365  - 45млрд записей, 1.5Тб данных
 * лучше использовать алгоритм qsort, открыть файл через fopen('file', 'a+');
 * и работать построчно, перемещая курсор с помощью fseek, читая fgets и дописывая fputs
 */