<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="wellcome.php" method="post">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" require>
        <h2>Wellcome</h2>
        <?php echo $_POST["username"]; ?>
    </form>
</body>

</html>