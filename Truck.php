<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private $storage;
    private $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storage = $storage;
    }



    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    public function getload(): int
    {
        return $this->load;
    }

    public function setload(int $load): void
    {
        $this->load = $load;
    }


    public function lading(): string
    {
        if (($this->storage)< ($this->load)) {
        return "in filling";
        } else { return "full";
        }

    }

    public function start()
    {
        $this->currentSpeed = 1;
        return "Let's Go Truck !";
    }

}