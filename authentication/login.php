<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>User Login</h2>

    <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red;'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }

        if (isset($_SESSION['success'])) {
            echo "<p style='color:green;'>" . $_SESSION['success'] . "</p>";
            unset($_SESSION['success']);
        }
    ?>

    <form action="processLogin.php" method="POST">

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">

    </form>
</body>
</html>