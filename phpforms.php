<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
<form action="formvalidation.php" method="POST">
    <label for="fname">Full Name</label><br>
    <input type="text" id="fname" name="name"><br>
    <label for="email">Email Address</label><br>
    <input type="email" id="eemail" name="email"><br>
    <label for="gender">Gender</label><br>
    <input type="radio" id="gen1" name="gender" value="Male">Male<br>
    <input type="radio" id="gen2" name="gender" value="Female">Female<br>
    <input type="radio" id="gen3" name="gender" value="Other">Other<br><br>
    <input type="submit" value="Register">
</form>

</body>
</html>

