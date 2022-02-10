<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions</title>
</head>
<body>
<?php
$_SESSION["user"] = "Harrison Wekesa";
echo "Session information is set successfully.<br>";
?>
<a href="sessios2.php">To Session 2</a>
</body>
</html>
