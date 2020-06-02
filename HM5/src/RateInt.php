<?php
/**
 * описание метода подсчета цены, метода добавления услуги
 */
interface RateInt
{
    public function getPrice();
    /**
     * передаем сюда объект доп услуги
     */
    public function addService($service);
}