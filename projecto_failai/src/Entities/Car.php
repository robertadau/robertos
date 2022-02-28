<?php

class Car
{
    public function __construct(
        private string $color = '',
        private string $currentSpeed = '8 km/h',
        private float $millage = 20,
    ) { }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setCurrentSpeed(string $currentSpeed): void
    {
       $this->currentSpeed = trim($currentSpeed);
    }

    public function getMillage(): float
    {
        return $this->millage;
    }

    public function drive(float $distance)
    {
        $this->millage += $distance;
    }

    public function getCurrentSpeed(): string
    {
        return $this->currentSpeed;
    }

    public function changeColor(string $color)
    {
        echo 'Just changed car color to: ' . $color . '<br>';
    }
}