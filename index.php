<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FontAwsome -->
    <script src="https://kit.fontawesome.com/65f6b022d7.js" crossorigin="anonymous"></script>

    <!-- Stylesheet links -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/geo-1" type="text/css" />

    <?php
    include('config/db_config.php');
    ?>

</head>

<body>
    <header>
        <?php
        include('public/navbar.php');
        ?>
    </header>
    <?php
    $link = isset($_GET['link']) ? $_GET['link'] : 'home';
    if ($link == 'home') {
        include 'public/home.php';
    } else if ($link == 'vakantiehuizen') {
        include 'public/vakantiehuizen.php';
    } else if ($link == 'admin') {
        include 'public/admin.php';
    }
    ?>
</body>

</html>