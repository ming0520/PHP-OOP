<?php
//comment
 include 'includes\parentclass.inc.php';
 include 'includes\newclass.inc.php';

$object = new NewClass;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creating Object</title>
</head>
<body>

<?php
    echo $object->name();
?>

</body>
</html>
