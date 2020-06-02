<?php
trait AddDriver
{
    protected $onDriver = false;
    public function setDriver(){
        $this->onDriver = true;
    }
    public function deleteDriver(){
        if ($this->onDriver == true) {
            $this->amountRub -= 100;
        }
        $this->onDriver = false;
    }
}