<?php
include 'function.php'
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
        try {
            if (checkNum($firstNumber, $secondNumber)) {
                $calculator->setNumber($firstNumber, $secondNumber);
                echo $firstNumber . '+' . $secondNumber . '=' . calculator();
            }
        }
        catch (Exception $e){
            echo $e->getMessage();
        }

    }
    ?>

</div>


</body>
</html>