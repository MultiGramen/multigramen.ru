<?php $url = $_SERVER['REQUEST_URI'];
require_once 'connection.php';
?>

<nav class="navbar-fixed-button navbar-expand-lg navbar-light bg-light" style="z-index: 1">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 50%;">
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/index.php") {echo 'active';}?>" aria-current="page" href="/index.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='1'"); foreach ($result as $row); {echo $row['name'];}?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/skills.php") {echo 'active';}?>" href="skills.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='2'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/goal.php") {echo 'active';}?>" href="goal.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='3'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/projects.php") {echo 'active';}?>" href="projects.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='4'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/documents.php") {echo 'active';}?>" href="documents.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='5'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/services.php") {echo 'active';}?>" href="services.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='6'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($url == "/contacts.php") {echo 'active';}?>" href="contacts.php"><?php $result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='7'"); foreach ($result as $row); {echo $row['name'];} ?></a>
                </li>
            </ul>
            <!--<button class="btn btn-primary me-2" onclick="document.location='login.php'"><?php /*$result = $connection->query("SELECT `name` FROM `menu` WHERE `id`='8'"); foreach($result as $row); {echo $row['name'];} */?></button>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Найти</button>
            </form>-->
        </div>
    </div>
</nav>