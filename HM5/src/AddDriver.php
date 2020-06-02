<?php
trait AddDriver
{
    protected $onDriver = false;
    public function setDriver(){
        $this->onDriver = true;
    }
    public function deleteDriver(){
        if ($this->onDriver == true) {
            $this->sum -= 100;
        }
        $this->onDriver = false;
    }
}