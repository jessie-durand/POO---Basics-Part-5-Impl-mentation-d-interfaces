<?php 

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy ;
    private int $energyLevel; 
    //private bool $hasParkBrake=true;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function switchOn() 
    {
        return true;
    }

    public function switchOff() 
    {
        return false;
    }

    public function getParkBrake():string
    {
       if($this->hasParkBrake === true)
       {
           return "Le frein à main est serré";
       } else 
       return "Le frein à main est desséré";
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start()
    {
        if($this->hasParkBrake === true)
        {
            throw new Exception ("Le frein à main est desséré.");
        }
        $this->currentSpeed = 1;
        return "La voiture démarre !";
    }

    public function getEnergy(): string
    {
        return $this->getEnergy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }
   

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}