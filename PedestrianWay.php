<?php
require_once 'Highway.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

final class PedestrianWay extends Highway 
{
    protected int $nbLane=1;
    protected int $maxSpeed=20;
    
    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[] = $vehicle;
        }
        
    }

}