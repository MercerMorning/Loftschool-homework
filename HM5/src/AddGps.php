<?php
trait AddGps
{
        protected $onGps = false;
        public function setGps(){
            $this->onGps = true;
        }
        public function deleteGps(){
            if ($this->onDriver == true) {
                $this->amountRub -= 100;
            }
            $this->onGps = false;
        }
}