<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- HTTP method -->
    <?php //if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <!-- <h1>Hello <?php //echo $_POST['name']; ?> </h1> -->
    <?php //endif; 
    ?>

    <?php
    if (isset($_POST['name'])) { ?>
        <h1>Hello <?php echo $_POST['name']; ?> </h1>
    <?php
    }
    ?>

    <form action="" method="post">
        Email: <input type="email" name="email"> <br>
        Name: <input type="text" name="name"> <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>