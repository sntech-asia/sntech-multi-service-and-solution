<html>
<?php include('./header.php') ?>

<?php include('./../db_connnection.php') ?>
<?php
session_start();
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $services = $_POST['service'];
    $image = $_POST['image'];
    $sql = "INSERT INTO services (title,image,service) VALUES('$title','$image','$services')";
    if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
    }else {
        echo "ERROR: Could not able to execute $sql. ". mysqli_error($conn);
    }
    mysqli_close($conn);
    
}
?>

<body>
    <form id="service-get" action="" method="POST">
        <h2 class="align-center">Title:<input type="text" name="title">
            <br><br>
            Services:<input type="text" name="service">
            <br><br>
            Image:<input type="file" name="image">
            <br><br>
            <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>