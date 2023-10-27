<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php include 'components/navbar_anon.php'; ?>
    <main>
        <div class="container">
            <h1>Hotel Hämmerle</h1>
            <p>Willkommen bei uns im schönen Lech am Arlberg!</p>
        </div>
        <div class="container">
            <h2>News und Aktuelles</h2>
        </div>
        <?php
        require_once('dbaccess.php');
        $db_obj = new mysqli($servername, $username, $password, $database);

        if ($db_obj->connect_error) {
            echo "Connection Error: " . $db_obj->connect_error;
            exit();
        }
        $sql =
            "SELECT * FROM user_data";
        $result = $db_obj->query($sql);
        echo "<pre>" . print_r($result->fetch_array(), true) . "</pre>";
        ; ?>
    </main>
</body>

</html>