<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <h1>Prime Number Checker</h1>

    <?php
    // Function to check if a number is prime
    function isPrime($number) {
        if ($number <= 1) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    // Check if a number is submitted through a form
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $userInput = $_POST['number'];

        if (is_numeric($userInput)) {
            $result = isPrime((int)$userInput)
                ? "$userInput is a prime number."
                : "$userInput is not a prime number.";
        } else {
            $result = "Please enter a valid number.";
        }
    }
    ?>

    <form action="prime.php" method="post">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <button type="submit">Check Prime</button>
    </form>

    <?php if (isset($result)) : ?>
        <p><?php echo $result; ?></p>
    <?php endif; ?>
</body>
</html>
