<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

class indexTest extends TestCase
{
    public $expected;
    public function testBasicRateCount()
    {
        $objBasicRate = new BasicRate(5, 60);
        $objBasicRate->setGps();
        $objBasicRate->getPrice();
        $this->expected = 5 * $objBasicRate->countDistance + 60 * $objBasicRate->countMinutes + 15;
        $this->assertEquals($this->expected, $objBasicRate->amountRub);
        $objBasicRate = new BasicRate(3, 59);
        $objBasicRate->setGps();
        $objBasicRate->setDriver();
        $objBasicRate->getPrice();
        $this->expected = 3 * $objBasicRate->countDistance + 59 * $objBasicRate->countMinutes + 100;
        $this->assertEquals($this->expected, $objBasicRate->amountRub);
        $objBasicRate = new BasicRate(10, 122);
        $objBasicRate->setGps();
        $objBasicRate->deleteGps();
        $objBasicRate->setGps();
        $objBasicRate->setDriver();
        $objBasicRate->setDriver();
        $objBasicRate->getPrice();
        $this->expected = 10 * $objBasicRate->countDistance + 122 * $objBasicRate->countMinutes + 100 + 45;
        $this->assertEquals($this->expected, $objBasicRate->amountRub);
    }
    public function testHourRateCount()
    {
        $objHourRate = new HourRate(242);
        $objHourRate->setGps();
        $objHourRate->getPrice();
        $this->expected = 5 * $objHourRate->countHours + 15 * 5;
        $this->assertEquals($this->expected, $objHourRate->amountRub);
        $objHourRate = new HourRate(30);
        $objHourRate->setGps();
        $objHourRate->setDriver();
        $objHourRate->getPrice();
        $this->expected = 1 * $objHourRate->countHours + 100;
        $this->assertEquals($this->expected, $objHourRate->amountRub);
        $objHourRate = new HourRate(60);
        $objHourRate->setGps();
        $objHourRate->deleteGps();
        $objHourRate->setGps();
        $objHourRate->setDriver();
        $objHourRate->setDriver();
        $objHourRate->getPrice();
        $this->expected = 1 * $objHourRate->countHours + 100 + 15;
        $this->assertEquals($this->expected, $objHourRate->amountRub);
    }
    public function testStudentRateCount()
    {
        $objStudentRate = new StudentRate(6, 15);
        $objStudentRate->setGps();
        $objStudentRate->getPrice();
        $this->expected = 6 * $objStudentRate->countDistance + 15 * $objStudentRate->countMinutes;
        $this->assertEquals($this->expected, $objStudentRate->amountRub);
    }
}