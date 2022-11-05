<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="css/style.css"/>
<body>
    <div class="heading">
        <h1>EJAY SIMPLE CALCULATOR</h1>
        <div class="form">
            <form action="">
                <input type="text" name="num1" placeholder="Number 1">
                <input type="text" name="num2" placeholder="Number 2">

                <select name="operator">
                    <option>None</option>
                    <option>Add</option>
                    <option>Subtract</option>
                    <option>Multiply</option>
                    <option>Divide</option>
                </select>
                <br>
                <button name="submit" value="submit">Calculate</button>
                <p>Display Answer here:</p>
                <?php
                    if(isset($_GET['submit'])){
                        $result1 = $_GET['num1'];
                        $result2 = $_GET['num2'];
                        $operator = $_GET['operator'];
                        switch ($operator){
                            case 'none':
                                echo 'ERROR, no arithmetic operator selected';
                                break;
                            case 'Add':
                                echo $result1 + $result2;
                                break;
                            case 'Subtract':
                                echo $result1 - $result2;
                                break;
                            case 'Multiply':
                                echo $result1 * $result2;
                                break;
                            case 'Divide':
                                echo $result1 / $result2;
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>