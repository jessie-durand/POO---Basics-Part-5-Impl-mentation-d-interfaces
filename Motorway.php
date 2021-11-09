<?php

require_once 'Highway.php';

final class Motorway extends Highway {
    protected int $nbLane=2;
    protected int $maxSpeed=90;

    public function addVehicle(Vehicle $vehicle)
    {
        if(!$vehicle instanceof Bicycle && !$vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $vehicle;
        }
        
    }


}