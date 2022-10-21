<?php

final class ResidentialWay extends HighWay
{
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }


    public function addVehicle(Vehicle $vehicle): array
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard) || ($vehicle instanceof Car)) {
            $this->currentVehicles[] = $vehicle;
        }
        return $this->currentVehicles;
    }
}
