<?php

final class PedestrianWay extends HighWay

{
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }


    public function addVehicle(Vehicle $vehicle): array
    {
        if (($vehicle instanceof Bike) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
        return $this->currentVehicles;
    }
}
