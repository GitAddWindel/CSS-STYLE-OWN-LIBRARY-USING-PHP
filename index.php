<?php
include 'library.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library PHP</title>
    <style>
        body {<?php echo $textColor->get_color(); ?>}
        p {<?php echo $elem_Color->get_color(); ?>}
        .navbar-container {<?php echo $navColor->get_navColor(); ?>}
    </style>
</head>

<body>
    <nav class="navbar-container">
        <ul>
            <li><a href="#">Home</a></li>
        </ul>
    </nav>
    <p>Hello PHP Library for styling elements to CSS - Windel</p>
</body>

</html>
