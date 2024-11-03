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

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
$ID_number = $_POST["ID_number"]; 
$email = $_POST["email"];


$mysqli = require __DIR__ . '/database.php';

$checkEmailQuery = $mysqli->prepare("SELECT * FROM user WHERE email = ?");
$checkEmailQuery->bind_param("s", $email);
$checkEmailQuery->execute();
$result = $checkEmailQuery->get_result();

if ($result->num_rows > 0) {
    echo "<script> 
    alert('Email already exists.')
    alert('Redirecting to Signin page...')
    window.location.href = '../Signup.html'
    </script>";
    exit;
}

$checkIDQuery = $mysqli->prepare("SELECT * FROM user WHERE ID_number = ?");
$checkIDQuery->bind_param("s", $ID_number);
$checkIDQuery->execute();
$result = $checkIDQuery->get_result();

if ($result->num_rows > 0) {
    echo "<script> 
    alert('School ID already exists.')
    alert('Redirecting to Signin page...')
    window.location.href = '../Signup.html'
    </script>";
    exit;
}

$sql = "INSERT INTO user (name, email, position, password_hash, ID_number) VALUES (?, ?, ?, ?, ?)";
$stmt = $mysqli->stmt_init();

if (!$stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssssi", $_POST["name"], $_POST["email"], $_POST["position"], $password_hash, $ID_number);

if ($stmt->execute()) {
    echo "<script> 
    alert('Signup Successfully!')
    alert('Redirecting to Signin page...')
    window.location.href = '../Signin.html'
    </script>";
} else {
    die($mysqli->error . " " . $mysqli->errno);
}
function logMessage($message) {
    $logFile = 'logs/app.log';
    if (!file_exists('logs')) {
        mkdir('logs', 0777, true);
    }
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

logMessage("User attempted to sign up with email: " . $_POST["email"]);
logMessage("User attempted to sign up with School ID: " . $_POST["ID_number"]);
?>
