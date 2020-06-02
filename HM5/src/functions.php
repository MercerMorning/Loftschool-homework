<?php
function roundPrice($price)
{
    if (is_double($price / 60)) {
        return ceil($price / 60);
    }
    return $price / 60;
}