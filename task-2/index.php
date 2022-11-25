<?php

require('src/functions.php');

task1(['line1', 'line1', 'line1', 'line1']);
echo task1(['line1', 'line1', 'line1', 'line1'], true);
echo "<br>";
echo "<br>";

echo task2('+', 1, 2, 3, 5.2) . "<br>";
echo task2('*', 1, 2, 3, 5.2) . "<br>";
echo task2('/', 1, 2, 3, 5.2) . "<br>";
echo task2('-', 1, 2, 3, 5.2) . "<br>";
echo "<br>";
echo "<br>";

task3(8, 8);
task3(8, 8.5);
echo "<br>";
echo "<br>";

date_default_timezone_set("Asia/Almaty");
echo task41();
echo "<br>";
echo task42();
echo "<br>";
echo "<br>";

echo task5("Карл у Клары украл Кораллы", "К", "");
echo "<br>";
echo task5("Две бутылки лимонада", "Две", "Три");
echo "<br>";
echo "<br>";

task61("Hello again!");
echo task62("test.txt");
