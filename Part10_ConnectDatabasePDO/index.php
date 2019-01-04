<?php
    include_once 'includes/dbh.inc.php';
    include_once 'includes/user.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDO Connection</title>
</head>
<body>

<?php
    /*print_r(PDO::getAvailableDrivers());
    $object = new Dbh;
    $object->connect();*/

    $object = new User;
    //echo $object->getAllUsers();
    echo $object->getUsersWithCountCheck();
?>
    
</body>
</html>