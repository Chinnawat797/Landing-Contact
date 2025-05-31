<?php
    require_once __DIR__ . "/config/config.php";
    require_once __DIR__ . "/core/FormHandler.php";

    $handler = new FormHandler();
    $result = null;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $result = $handler->sendContact($_POST);
    }

    include "views/header.php";
    include "views/product.php";
    include "views/material.php";
    include "views/product-detail.php";
    include "views/contact.php";
    include "views/footer.php";
?>