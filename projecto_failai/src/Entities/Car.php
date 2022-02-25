<?php

class Car
{

    private float $currentGasolineAmount;

    public function __construct(
        private string $color = '',
        private string $currentSpeed = '0km/h',
        private float $millage = 20,
        private int $tankSize = 50
    ) {
        $this->currentGasolineAmount = 0;
    }

    public function fillGasoline(float $amount): void
    {
        if ($amount > 0 &&
        &this->$this->currentGasolineAmount >= 0 &&
        ($this->currentGasolineAmount + $amount)
