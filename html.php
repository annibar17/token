<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    <nav>

    <h?php

    <?php

if ($_GET['page'] == 1) {
    echo "
    <a class='active' href='index.php?page=1'>Home</a>
    <a class='' href='index.php?page=2'>About me</a>
    <a class='' href='index.php?page=3'>Shop</a>
    ";
    require_once 'page1.php';
}

if ($_GET['page'] == 2) {
    echo "
    <a class='' href='index.php?page=1'>Home</a>
    <a class='active' href='index.php?page=2'>About me</a>
    <a class='' href='index.php?page=3'>Shop</a>
    ";
    require_once 'page2.php';
}

if ($_GET['page'] == 3) {
    echo "
    <a class='' href='index.php?page=1'>Home</a>
    <a class='' href='index.php?page=2'>About me</a>
    <a class='active' href='index.php?page=3'>Shop</a>
    ";
    require_once 'page3.php';
}
    
</body>
</html>