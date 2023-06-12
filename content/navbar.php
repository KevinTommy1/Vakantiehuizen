<?php
$link = isset($_GET['link']) ? $_GET['link'] : 'home';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand ps-2 pe-2" href="?link=home"><img class="logo" src="img/logo.png" alt="Logo"></a>
    <button class="navbar-toggler ms-2 me-2" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link ps-2 pe-2 <?php
                if ($link == "home") {
                    echo "active";
                } ?>" href="?link=home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ps-2 pe-2 <?php
                if ($link == "vakantiehuizen") {
                    echo "active";
                } ?>" href="?link=vakantiehuizen">Vakantiehuizen</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ps-2 pe-2 <?php
                if ($link == "admin") {
                    echo "active";
                } ?>" href="?link=admin">Login</a>
            </li>
        </ul>
    </div>
</nav>