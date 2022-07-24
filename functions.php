<?php
function title() {
    require 'components/connection.php';

    $url = $_SERVER['REQUEST_URI'];

    $query = $connection->query("SELECT `name`,`file` FROM `menu`");

    $result = NULL;

    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['name'];
        $file = $row['file'];
        $result[$name] = $file;
    }

    $key = array_search($url, $result);

    if ($key == true) {
        echo $key;
    }
}