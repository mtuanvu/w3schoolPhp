<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>

<body>
    <form action="wellcome.php" method="get">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" require>
        <h2>Wellcome</h2>
        <?php echo $_GET["username"]; ?>

    </form>
</body>

</html>