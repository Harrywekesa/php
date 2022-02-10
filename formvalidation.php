<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .error {color: #FF0001;}
    </style>
    <title>Form Validation</title>
</head>
<body>
<?php
// define variables to empty values
$nameErr = $emailErr = $mobilenoErr = $genderErr = "";
$name = $email = $mobileno = $gender = "";

//Input fields validation
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //String Validation
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = input_data($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only alphabets and white space are allowed";
        }
    }

    //Email Validation
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = input_data($_POST["email"]);
        // check that the e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    //Number Validation
    if (empty($_POST["mobileno"])) {
        $mobilenoErr = "Mobile no is required";
    } else {
        $mobileno = input_data($_POST["mobileno"]);
        // check if mobile no is well-formed
        if (!preg_match ("/^[0-9]*$/", $mobileno) ) {
            $mobilenoErr = "Only numeric value is allowed.";
        }
        //check mobile no length should not be less and greater than 10
        if (strlen ($mobileno) != 10) {
            $mobilenoErr = "Mobile no must contain 10 digits.";
        }
    }

    //Empty Field Validation
    if (empty ($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = input_data($_POST["gender"]);
    }

}
function input_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
?>

<h2>Registration Form</h2>
<span class = "error">* required field </span>
<br><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
    Name:
    <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?> </span>
    <br><br>
    E-mail:
    <input type="text" name="email">
    <span class="error">* <?php echo $emailErr; ?> </span>
    <br><br>
    Mobile No:
    <input type="text" name="mobileno">
    <span class="error">* <?php echo $mobilenoErr; ?> </span>
    <br><br>
    Gender:<span class="error">* <?php echo $genderErr; ?> </span><br>
    <input type="radio" name="gender" value="male"> Male
    <br>
    <input type="radio" name="gender" value="female"> Female
    <br>
    <input type="radio" name="gender" value="other"> Other
    <br><br>
    <input type="submit" name="submit" value="Submit">
    <br><br>
</form>

<?php
if(isset($_POST['submit'])) {
    if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == "") {
        echo "<h3 color = #FF0001> <b>You have successfully registered.</b> </h3>";
        echo "<h2>Your Input:</h2>";
        echo "Name: " .$name;
        echo "<br>";
        echo "Email: " .$email;
        echo "<br>";
        echo "Mobile No: " .$mobileno;
        echo "<br>";
        echo "Gender: " .$gender;
    } else {
        echo "<h3> <b>You didn't fill up the form correctly.</b> </h3>";
    }
}
?>
</body>
</html>