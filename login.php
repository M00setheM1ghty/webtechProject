<?php
session_start();

$users = [
    'thomas' => ['password' => 'thomas1', 'email' => 'thomas@example.com', 'name' => 'thomas'],
    'markus' => ['password' => 'markus1', 'email' => 'markus@example.com', 'name' => 'markus'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['login'])) {
        // Login logic
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$username]) && $users[$username]['password'] === $password) {
            $_SESSION['username'] = $username;
        } else {
            $loginError = 'Falscher username oder passwort';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<style>
    .error {
        color: #FF0000;
    }
</style>

<head>
    <?php include("head.php"); ?>
</head>

<body>
    <?php include("nav.php"); ?>
    <main>
        <?php include("login_form.php"); ?>
    </main>
</body>

</html>