<?php
class StudentRate extends Rate
{
    use AddGps;
    use AddDriver;
    const GPS_PRICE_FOR_HOUR = 15;
    public $countDistance = 4;
    public $countMinutes = 1;
    public function getPrice()
    {
        parent::getPrice();
        if ($this->onDriver) {
            $this->sum += 100;
        }
        if ($this->time >= 60) {
            if ($this->onGps) {
                $this->sum += self::GPS_PRICE_FOR_HOUR * roundPrice($this->time);
            }
        }
    }
}
