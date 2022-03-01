<?php


class Car
{
    public function __construct(
        private string $color = '',
        private string $currentSpeed = '0 km/h',
        private float  $millage = 20,
        private int    $tankSize = 50
    )
    {
        $this->currentGasolineAmount = 0;
    }

    public function fillGasoline(float $amount): void
    {
        if ($amount > 0 &&
            $this->currentGasolineAmount >= 0 &&
            ($this->currentGasolineAmount + $amount) <= $this->tankSize
        ) {
            $this->currentGasolineAmount += $amount;
        } else {
            throw new Exception(message: 'Kilo klaida pildant baka');
        }
    }

    public function getColor(): string
    {
        ...
    }

    public function getCurrentSpeed(string $surrentSpeed): void
    {
        ...
    }

    public function getMillage(): float
    {
        ...
    }

    public function drive(float $distance)
    {
        $this->millage += $distance;
    }

}

?>
