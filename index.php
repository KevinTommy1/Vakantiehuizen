<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

    <!-- FontAwsome -->
    <script src="https://kit.fontawesome.com/65f6b022d7.js" crossorigin="anonymous"></script>

    <!-- Stylesheet links -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-breakpoint.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/geo-1" type="text/css"/> 

    <?php
    include('config/db_config.php');
    ?>

</head>

<body>
    <header>
        <?php
        include('content/navbar.php');
        ?>
    </header>
    <?php
    $link = isset($_GET['link']) ? $_GET['link'] : 'home';
    if ($link == 'home') {
        include 'content/home.php';
    } else if ($link == 'vakantiehuizen') {
        include 'content/vakantiehuizen.php';
    } else if ($link == 'contact') {
        include 'content/contact.php';
    }
    ?>
</body>

</html>