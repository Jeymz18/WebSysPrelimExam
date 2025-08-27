<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, select, button { margin: 5px; padding: 5px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
   
    <div class="calculator">
        <form method="POST">
            <input type="number" placeholder="Quiz Score" required>
            <select name="operation">
            </select>
            <input type="number" placeholder=" Assignment Score" required>
            <select name="operation">
            </select>
            <input type="number" placeholder=" Exam Score " required>
            <button type="submit">Calculate</button>
        </form>
       
        <?php
            if ($_POST) {
                $Quiz = $_POST['Quiz'];
                $Assignment = $_POST['Assignment'];
                $Exam = $_POST['Exam'];
               
                switch ($operation) {
                    case '+':
                        $result = ($num1 * 0.30) + ($num2 * 0.30) + ($num3 * 0.40);
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $error = "Cannot divide by zero!";
                        }
                        break;
  
                }
                    $finalGrade = ($quiz * 0.30) + ($assignment * 0.30) + ($exam * 0.40);

                if ($result >= 90) {
                    $letterGrade = "A";
                } elseif ($average >= 80) {
                    $letterGrade = "B";
                } elseif ($average >= 70) {
                    $letterGrade = "C";
                } elseif ($average >= 60) {
                    $letterGrade = "D";
                } else {
                    $letterGrade = "F";
                }
                    echo "Average: = $result<br>";
                    echo "Grade: = $letterGrade";
            }
        ?>
    </div>
</body>
</html>
