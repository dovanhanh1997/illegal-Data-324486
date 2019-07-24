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

;
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
}

$calculator = new Calculator();

?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
<div id="content">
    <h3>Simple Calculator</h3>
    <form method="post">
        <label>First operand</label>
        <input type="number" name="firstNumber"/><br><br>
        <label>Operator</label>
        <select name="typeCalculator">
            <option value="add">Add</option>
            <option value="minus">Minus</option>
            <option value="multi">Multi</option>
            <option value="split">Split</option>
        </select><br><br>
        <label>Second Operand</label>
        <input type="number" name="secondNumber"><br><br>
        <button type="submit">Calculator</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstNumber = $_POST['firstNumber'];
        $secondNumber = $_POST['secondNumber'];
        $operator = $_POST['typeCalculator'];
        $calculator->setNumber($firstNumber, $secondNumber);
        echo $firstNumber.'+'.$secondNumber.'='.calculator();

    }
    ?>

</div>


</body>
</html>