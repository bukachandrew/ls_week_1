<?php

function task1(array $lists, bool $association = false)
{
    if ($association) {
        return implode(" ", $lists);
    } else {
        foreach ($lists as $list) {
            echo "<p>$list</p>";
        }
    }
}

function task2()
{
    $args = func_get_args();
    $resultString = '';
    $result = 0;
    for ($i = 1; $i < sizeof($args); $i++) {
        if ($args[0] == '+') {
            $result += $args[$i];
        }
        if ($args[0] == '*') {
            $result = 1;
            $result *= $args[$i];
        }
        if ($args[0] == '-') {
            if ($i == 1) {
                $result = $args[$i];
            } else {
                $result -= $args[$i];
            }
        }
        if ($args[0] == '/') {
            if ($i == 1) {
                $result = $args[$i];
            } else {
                $result /= $args[$i];
            }
        }

        $resultString .= $i != 1 ? " $args[0] " : "";
        $resultString .= $args[$i];
    }
    return $resultString . " = " . $result;
}

function task3($x, $y)
{
    if (!is_int($x) || !is_int($y)) {
        echo "Введены не целые числа";
        return 0;
    }
    echo "<table>";
    for ($i = 1; $i <= $x; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $y; $j++) {
            echo "<td>";
            echo "<center>";
            echo $i * $j;
            echo "</center>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function task41()
{
    return date("d.m.Y H:m");
}

function task42()
{
    return date("d.m.Y H:m:s", time());
}

function task5(string $string, string $search, string $replace)
{
    echo str_replace($search, $replace, $string);
}

function task61(string $string)
{
    file_put_contents("test.txt", $string);
}

function task62(string $fileName)
{
    return file_get_contents($fileName);
}