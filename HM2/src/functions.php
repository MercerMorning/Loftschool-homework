<?php
function task1($strings, $isMergeString = 0)
{
    $result = "";
    if ($isMergeString) {
        return $result = implode("", $strings);
    }
    foreach ($strings as $string) {
        $result .= "$string\n";
    }
    return $result;
}

function task2($action, ...$args)
{
    foreach ($args as $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            return"Не все аргументы являются целыми или вещественными числами";
        }
    }
    switch ($action) {
        case "+":
            return array_sum($args);
            break;
        case "-":
            return array_shift($args) - array_sum($args);
        case "*":
            if (in_array(0, $args)) {
                return "На ноль умножать нельзя";
            }
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }
            return $result;
        case "/":
            if (in_array(0, $args)) {
                return "На ноль делить нельзя";
            }
            $result = 1;
            foreach ($args as $arg) {
                $result /= $arg;
            }
            return $result;
        default:
            return "ERROR: UNKNOWN ARGUMENT";
    }
}
function task3(int $val1,int $val2)
{
    $table = "";
    for ($row = 1; $row <= $val1; $row++) {
        for ($col = 1; $col <= $val2; $col++) {
            $result = $row * $col;
            if (($row + $col) % 2 == 0) {
                if ($row % 2 == 0) {
                    $table .= "($result)";
                } else {
                    $table .= "[$result]";
                }
            } else {
                $table .= $result;
            }
        }
        $table .= PHP_EOL;
    }
    return $table;
}
function task6($name)
{
    $fp = fopen($name, "r");
    if (!$fp) {
        return false;
    }
    $result = "";
    while (!feof($fp)) {
        $result .= fgets($fp, 1024);
    }
    fclose($fp);
    return $result;
}