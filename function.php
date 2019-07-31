<?php
include 'Calculator.php';
$calculator = new Calculator();

function calculator()
{
    global $operator, $calculator;
    switch ($operator) {
        case 'add':
            return $calculator->addCalculate();
            break;
        case 'minus':
            return $calculator->minusCalculate();
            break;
        case 'multi':
            return $calculator->multiCalculate();
            break;
        case 'split':
            return $calculator->splitCalculate();
            break;
    }
};

function checkNum($numOne,$numTwo){
    if ($numOne == 0 && $numTwo == 0){
        throw new Exception('Number One and Number Two must not equal 0');
    }
    if ($numTwo == 0){
        throw  new Exception("Number Two must not equal 0");
    }

    return true;
}

