<html>
<head>
    <title>Find Greatest Number</title>
</head>
<body>

<h2>Enter Three Numbers to Find the Greatest Number</h2>


<form method="POST" action="">
    <label for="num1">Number 1:</label>
    <input type="number" name="num1" required><br><br>

    <label for="num2">Number 2:</label>
    <input type="number" name="num2" required><br><br>

    <label for="num3">Number 3:</label>
    <input type="number" name="num3" required><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

<?php
// NESTED IF IFELSE
// wap check gretest number given beetwen 3 number
// syntex
// if(exp)
//     if(exp)
//     statement;
//         else
//         ststement;
//             else if(exp)
//                 ststement;
//                     else
//                     statement;
                    
  
  
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if ($num1 >= $num2) {
        if ($num1 >= $num3) {
            echo "Num1 Is The Greatest: " . $num1;
        } else {
            echo "Num3 Is The Greatest: " . $num3;
        }
    } else {
        if ($num2 >= $num3) {
            echo "Num2 Is The Greatest: " . $num2;
        } else {
            echo "Num3 Is The Greatest: " . $num3;
        }
    }
}
?>

</body>
</html>
