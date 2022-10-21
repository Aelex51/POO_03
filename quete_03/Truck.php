<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $currentLoading =0;

    
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentLoading()
    {
        $this->currentLoading;
    }

    public function setCurrentLoading(int $currentLoading)
    {
        $this->currentLoading = $currentLoading;
    }

    public function getStorageCapacity()
    {
        return $this->storageCapacity;
    }
   
    public function setStorageCapacity($storageCapacity)
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function isFull()
    {   
        if ($this->currentLoading === $this->storageCapacity) {
            return 'full';
        } 
        else {
            return 'in filling';
        }
    }
} 



