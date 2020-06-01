<?php
function readJson($resource, &$array)
{
    if (!$resource) {
        return false;
    }
    while (!feof($resource)) {
        $array = json_decode(fgets($resource, 4096), true);
    }
    fclose($resource);
    return $array;
}