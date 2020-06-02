<?php
include "functions.php";
/**
 * Трейты
 */
include "AddGps.php";
include "AddDriver.php";
/**
 * Интерфейсы
 */
include "AdditionalService.php";
include "RateInt.php";
/**
 * Классы
 */
include "Rate.php";
include "BasicRate.php";
include "HourRate.php";
include "StudentRate.php";
/**
 * Функции
 */
$objBasicRate = new BasicRate(5, 60);
$objBasicRate->setGps();
$objBasicRate->getPrice();
echo $objBasicRate->amountRub, "</br>";
$objStudentRate = new StudentRate(3, 60);
$objStudentRate->setDriver();
$objStudentRate->setGps();
$objStudentRate->getPrice();
echo $objStudentRate->amountRub, "</br>";
$objHourRate= new HourRate(3, 60);
$objHourRate->setDriver();
$objHourRate->setGps();
$objHourRate->getPrice();
echo $objHourRate->amountRub, "</br>";





