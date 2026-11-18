<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My PHP Page</title>
</head>
<body>
    <h1>Welcome Back</h1>
    <?php echo "This line is written by PHP <br>"; ?>
    <h1>This heading is plain HTML</h1>
    <?php
    $name = "kader";
    $age = 20;
    $course = "Web Development";

    echo "My name is $name <br>";
    print("I am $age years old <br>");
    print_r("I study $course <br>");

    $numbers = [10, 20, 30];
    print_r($numbers);
    ?>
</body>
</html>