<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : 
        $Username = $_POST['name']; ?>
    <!-- <p>Hello <?php //echo trim($Username); ?> </p> -->
    <?php //var_dump(trim($Username)); ?>
    <p>Hello <?php echo $_POST['email']; ?> </p>
    <?php endif; ?>
    
    <!-- <p>Hello <?php //echo $_GET['name']; ?> </p> -->

</body>
</html>