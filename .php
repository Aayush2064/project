<!-- date_subtraction.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Date Subtraction</title>
</head>
<body>
    <h1>Date Subtraction</h1>
    <form method="post">
        <label for="user_date">Enter a date (YYYY-MM-DD):</label>
        <input type="date" id="user_date" name="user_date" oninput="this.form.submit()" required>
    </form>
    <div id="result">
        <?php
        function calculateAndDisplayDifference()
        {
            if (!empty($_POST['user_date']) && preg_match('/\d{4}-\d{2}-\d{2}/', $_POST['user_date'])) {
                $currentDate = new DateTime();
                $userDate = new DateTime($_POST['user_date']);
                $interval = $currentDate->diff($userDate);

                echo "<p>Current Date: " . $currentDate->format('Y-m-d') . "</p>";
                echo "<p>User-provided Date: " . $_POST['user_date'] . "</p>";
                echo "<p>Difference: " . $interval->format('%y years, %m months, %d days') . "</p>";
            } else {
                echo "<p>Please enter a valid date in the format (YYYY-MM-DD).</p>";
            }
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            calculateAndDisplayDifference();
        }
        ?>
    </div>
</body>
</html>
