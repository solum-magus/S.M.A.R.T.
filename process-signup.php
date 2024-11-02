<?php 
if (empty($_POST["name"])) {
    die('Please enter your name.');
}

if (empty($_POST["email"])) {
    die('Please enter your email.');
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die('Please enter a valid email address.');
}

if (empty($_POST["position"])) {
    die('Please enter your position.');
}

if (empty($_POST["password"])) {
    die('Please enter your password.');
}

if (strlen($_POST["password"]) < 6) {
    die('Password must be at least 6 characters.');
}

if (strlen($_POST["password"]) > 20) {
    die('Password must be less than 20 characters.');
}

if (!preg_match('/[a-z]/i', $_POST["password"])) {
    die('Password must contain at least one letter.');
}

if (!preg_match('/[0-9]/i', $_POST["password"])) {
    die('Password must contain at least one number.');
}

if ($_POST["password"] !== $_POST["confirm_password"]) {
    die('Passwords do not match.');
}

if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die('Email is not valid.');
}

if ($_POST["position"] !== "Student" && $_POST["position"] !== "Maintenance Staff" && $_POST["position"] !== "Teacher" && $_POST["position"] !== "Admin") {
    die('Position is not valid.');
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . '/database.php';

$email = $_POST["email"];
$checkEmailQuery = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
$checkEmailQuery->bind_param("s", $email);
$checkEmailQuery->execute();
$result = $checkEmailQuery->get_result();

if ($result->num_rows > 0) {
    die('Email already exists.'); 
}


$sql = "INSERT INTO user (name, email, position, password_hash) VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss", $_POST["name"], $_POST["email"], $_POST["position"], $password_hash);

if ($stmt->execute()) {
    
    echo "Signup Successfully!";

} else {
    
    if ($mysqli->errno === 1062) {
        die('Email already exists.');
    }
    else{
        die($mysqli->error . " " . $mysqli->errno);
    }
}

print_r($_POST);
var_dump($password_hash);
?>
