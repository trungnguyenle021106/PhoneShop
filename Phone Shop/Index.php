<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="stylesheet" href="CSS/Template.css">
    <title>Document</title>
</head>

<body>
    <div class="page">
        <?php
        require("PAGES/TopMenu.php");
        ?>
        <?php
        require("PAGES/Content.php");
        ?>
    </div>
    <?php
    require("PAGES/Footer.php");
    ?>
</body>

</html>