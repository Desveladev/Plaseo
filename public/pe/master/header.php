<?php

global $page, $CONFIG, $country, $lang;

$home = "";
$product = "";
$blog = "";
$contact = "";

if($page == "home") {

    $home = "active";
} elseif($page == "product") {

    $product = "active";
} elseif($page == "blog") {

    $blog = "active";
} elseif($page == "contact") {

    $contact = "active";
}
?>
<header class="navbar navbar-expand-md bg-dark navbar-dark header-fixed" id="header">
    <div class="container-fluid">
        <a href="<?= $CONFIG['actual_url']; ?>/" class="logo navbar-brand p-0">PLASEO</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item <?= $home; ?>">
                    <a class="nav-link" href="<?= $CONFIG['actual_url']; ?>/">Home</a>
                </li>
                <li class="nav-item <?= $product; ?>">
                    <a class="nav-link " href="<?= $CONFIG['actual_url']; ?>/product">Product</a>
                </li>
                <li class="nav-item <?= $blog; ?>">
                    <a class="nav-link" href="<?= $CONFIG['actual_url']; ?>/blog">Blog</a>
                </li>
                <li class="nav-item <?= $contact; ?>">
                    <a class="nav-link" href="<?= $CONFIG['actual_url']; ?>/contact">Contact</a>
                </li>
            </ul>
            <div class="dropdown ml-auto">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="country_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Peru - <?= strtoupper($lang); ?>
                </button>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-md-right dropdown-collapse" aria-labelledby="country_button">
                    <h6 class="dropdown-header">Pais</h6>
                    <a class="dropdown-item" href="<?= $CONFIG['base_url'] ?>/cl/">Chile</a>
                    <a class="dropdown-item" href="<?= $CONFIG['base_url'] ?>/pe/">Peru</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Idioma</h6>
                    <a class="dropdown-item" href="<?= $CONFIG['country_url']; ?>/es/">ES</a>
                </div>
            </div>
        </div>
    </div>
</header>
