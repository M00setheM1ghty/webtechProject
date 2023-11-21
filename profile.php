<?php
session_start();
$users = [
    'thomas' => ['password' => 'thomas1', 'email' => 'thomas@example.com', 'name' => 'thomas'],
    'markus' => ['password' => 'markus1', 'email' => 'markus@example.com', 'name' => 'markus'],
];
// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

// Retrieve user data based on the logged-in username
$loggedInUser = $users[$_SESSION['username']];

// Handle logout if the logout button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header('Location: login.php');
    exit;
}

// change password logic
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['change-password'])) {
    // Validate the current password
    $currentPassword = $_POST['current-password'];
    $newPassword = $_POST['new-password'];
    $newPasswordCheck = $_POST['new-password-check'];

    $loggedInUsername = $_SESSION['username'];

    // Password spell check
    if ($newPassword !== $newPasswordCheck) {
        $passwordChangeError = 'Passwörter stimmen nicht überein';
    } elseif (isset($users[$loggedInUsername]) && $users[$loggedInUsername]['password'] === $currentPassword) {
        // Update the password
        $users[$loggedInUsername]['password'] = $newPassword;
        // Display a success message or redirect to a different page
        $passwordChangeSuccess = true;
    } else {
        $passwordChangeError = 'Falsches Passwort!';
    }
}
?>
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Profile</title>
    <?php include("head.php"); ?>
</head>

<body>
    <div class="container">
        <h2>Welcome,
            <?php echo $loggedInUser['name']; ?>!
        </h2>
        <p>Email:
            <?php echo $loggedInUser['email']; ?>
        </p>
        <!-- logout form-->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <button type="submit" name="logout">Logout</button>
        </form>

        <!-- change password form-->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="current-password">Password:</label>
            <input type="password" name="current-password" required>

            <label for="new-password">Neues Passwort:</label>
            <input type="password" name="new-password" required>
            
            <label for="new-password-check">neues Passwort bestätigen:</label>
            <input type="password" name="new-password-check" required>

            <button type="submit" name="change-password">Passwort ändern</button>
        </form>
        <?php
        // Display success message or error message
        if (isset($passwordChangeSuccess)) {
            echo '<p>Password wurde geändert!</p>';
        } elseif (isset($passwordChangeError)) {
            echo '<p>Error: ' . $passwordChangeError . '</p>';
        }
        ?>
    </div>

</body>

</html>