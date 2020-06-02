<?php
namespace NV\Traits;
trait AddDriver
{
    protected $onDriver = false;
    public function setDriver(){
        $this->onDriver = true;
    }
    public function seleteDriver(){
        $this->onDriver = false;
    }
}