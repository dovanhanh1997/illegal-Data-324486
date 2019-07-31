<?php


class Calculator

{
    public $firstNumber;
    public $secondNumber;

    public function setNumber($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function addCalculate()
    {
        return $this->firstNumber + $this->secondNumber;
    }

    public function minusCalculate()
    {
        return $this->firstNumber - $this->secondNumber;
    }

    public function multiCalculate()
    {
        return $this->firstNumber * $this->secondNumber;
    }

    public function splitCalculate()
    {
        return $this->firstNumber / $this->secondNumber;
    }

}