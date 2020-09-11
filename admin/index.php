<html>

<head>
    <meta charset="UTF-8">
    <title>registration form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="css/style.css">

    <?php
    include('../db_connnection.php');
    session_start();
    if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $pass = $_POST['Password'];
        $sql = "SELECT * from admin";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['status'] = 'logedin';
            header('Location: dashboard.php');
        } else {
            echo "<script>alert('Username/[password invalid');</script> ";
            echo "<script>window.location='index.php'</script>";
        }
    }
    ?>
</head>

<body>
    <p> <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" /></p>
    <h1"> WELCOME TO ADMIN PANEL</h1>
        <form name="login" action="" method="POST">
            <h2 align="center">Username:<input type="text" name="username">
                <br><br>
                Password:<input type="password" name="password">
                <br><br>
                <input type="submit" name="submit" value="LOGIN">
        </form>
        </div>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

</body>

</html>