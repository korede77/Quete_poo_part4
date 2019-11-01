<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';
class Bicycle extends Vehicle implements LightableInterface
{

    public function changeWheel()
    {
        // TODO: Implement changeWheel() method.
    }
    public function switchOn():string
    {
        if(parent::setCurrentSpeed($this->currentSpeed) > 10)
        {
           return true;
        }
        else
        {
            return false;
        }

    }
    public function switchOff(): string
    {
        return false;
    }
}