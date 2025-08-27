<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grade Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, button { margin: 5px; padding: 5px; width: 100%; }
        .result { font-weight: bold; color: #333; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Simple Grade Calculator</h1>
   
    <div class="calculator">
        <form method="POST">
            <input type="number" name="num1" placeholder="Quiz Score (0-100)" required>
            <input type="number" name="num2" placeholder="Assignment Score (0-100)" required>
            <input type="number" name="num3" placeholder="Exam Score (0-100)" required>
            <button type="submit">Calculate</button>
        </form>

        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];

                // Validation: Ensure all scores are numeric and between 0 and 100
                if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
                    echo "<p class='error'>Please enter valid numeric values for all fields.</p>";
                } elseif ($num1 < 0 || $num1 > 100 || $num2 < 0 || $num2 > 100 || $num3 < 0 || $num3 > 100) {
                    echo "<p class='error'>Scores must be between 0 and 100.</p>";
                } else {
                    // Calculate weighted average
                    $weightedAverage = ($num1 * 0.30) + ($num2 * 0.30) + ($num3 * 0.40);

                    // Determine letter grade
                    if ($weightedAverage >= 90) {
                        $letterGrade = "A";
                    } elseif ($weightedAverage >= 80) {
                        $letterGrade = "B";
                    } elseif ($weightedAverage >= 70) {
                        $letterGrade = "C";
                    } elseif ($weightedAverage >= 60) {
                        $letterGrade = "D";
                    } else {
                        $letterGrade = "F";
                    }

                    // Display the results
                    echo "<p class='result'>Weighted Average: $weightedAverage</p>";
                    echo "<p class='result'>Grade: $letterGrade</p>";
                }
            }
        ?>
    </div>
</body>
</html>
