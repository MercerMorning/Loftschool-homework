<?php

function task1($strings, $isMerge = 0)
{
    if ($isMerge) {
        $result = '';
        foreach ($strings as $string) {
             $result .= $string;
        }
        return $result;
    } else {
        foreach ($strings as $string) {
            echo "<p>$string</p>";
        }
    }
}

function task2(...$args)
{
    if (is_string($args[0])) {

        if (($args[0]) == '*' || ($args[0]) == '/') {
            $result = 1;
        } else {
            $result = 0;
        }

        for ($i = 1; $i < sizeof($args); $i++) {
            if (is_int($args[$i]) || is_double($args[$i])) {
                switch ($args[0]) {
                    case '+':
                        $result += $args[$i];
                        break;
                    case '-':
                        $result -= $args[$i];
                        break;
                    case '*':
                        $result *= $args[$i];
                        break;
                    case '/':
                        $result /= $args[$i];
                        break;
                    default:
                        return;
                }

            } else {
                return;
            }
        }
    } else {
        return;
    }
    echo $result;
}

function task3($val1, $val2)
{
    if (is_int($val1) && is_int($val2)) {
        echo "<table>";
        $p = 0;
        for ($i = 1; $i <= $val1; $i++) {
            $p++;
            echo "<tr>";
            for ($q = 1; $q <= $val2; $q++) {
                echo "<td>";
                echo $q * $p;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo 'Параметры функции не являются целочисленными';
    }
}