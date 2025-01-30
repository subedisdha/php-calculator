<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator App</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: lightyellow;
        }
        .main-container {
            width: 60%;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            color: white;
        }
        .php-calculator {
            width: 45%;
            background-color: #444;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }
        .input-section {
            width: 45%;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input, select, button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
        }
        button {
            background-color: yellow;
            color: black;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="php-calculator">
            <h2>PHP Calculator</h2>
            <p>
                <?php
                    if(isset($_POST['submit'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $operation = $_POST['operation'];
                        
                        if(is_numeric($num1) && is_numeric($num2)) {
                            switch($operation) {
                                case "add":
                                    $result = $num1 + $num2;
                                    break;
                                case "subtract":
                                    $result = $num1 - $num2;
                                    break;
                                case "multiply":
                                    $result = $num1 * $num2;
                                    break;
                                case "divide":
                                    $result = ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
                                    break;
                                default:
                                    $result = "Invalid operation";
                            }
                            echo "Result: $result";
                        } else {
                            echo "Please enter valid numbers.";
                        }
                    }
                ?>
            </p>
        </div>
        <form method="POST">
            <div class="input-section">
                <input type="number" placeholder="Enter first number" name="num1" required>
                <input type="number" placeholder="Enter second number" name="num2" required>
                <select name="operation">
                    <option value="add">Add</option>
                    <option value="subtract">Subtract</option>
                    <option value="multiply">Multiply</option>
                    <option value="divide">Divide</option>
                </select>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
 