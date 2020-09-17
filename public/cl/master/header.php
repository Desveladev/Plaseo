<?php

global $page, $CONFIG;

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
        <a href="" class="logo navbar-brand p-0">PLASEO</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item <?= $home; ?>">
                    <a class="nav-link" href="<?= $CONFIG['base_url']; ?>/">Home</a>
                </li>
                <li class="nav-item <?= $product; ?>">
                    <a class="nav-link " href="<?= $CONFIG['base_url']; ?>/product">Product</a>
                </li>
                <li class="nav-item <?= $blog; ?>">
                    <a class="nav-link" href="<?= $CONFIG['base_url']; ?>/blog">Blog</a>
                </li>
                <li class="nav-item <?= $contact; ?>">
                    <a class="nav-link" href="<?= $CONFIG['base_url']; ?>/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</header>
