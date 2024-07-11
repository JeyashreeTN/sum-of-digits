<html>
<head>
    <title>Sum of Digits</title>
</head>
<body>
    <h1>
        <?php
        function sumOfDigits($number) {
            $sum = 0;
            while ($number != 0) {
                $digit = $number % 10;
                $sum += $digit;
                $number = (int)($number / 10);
            }
            return $sum;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST['no'];
            $sum = sumOfDigits($num);
            echo "The sum of digits of $num is: $sum";
        }
        ?>
    </h1>
</body>
</html>
