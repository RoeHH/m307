<?php

function render(array $data)
{
    $title = $data['title'];
    require 'app/Views/app/header.php';
    require 'app/Views/' . $data['view'] . '.view.php';
    require 'app/Views/app/footer.php';
}