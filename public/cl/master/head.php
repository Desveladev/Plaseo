<?php

global $country, $lang, $HEAD, $section, $page, $CONFIG;

$SEO = $HEAD[$section][$page];
if(isset($SEO['title']) && $SEO['title'] != "") {

    $title = $SEO['title'];
} else {

    $title = $HEAD['default']['title'];
}

if(isset($SEO['description']) && $SEO['description'] != "") {

    $description = $SEO['description'];
} else {

    $description = $HEAD['default']['description'];
}

if(isset($SEO['type']) && $SEO['type'] != "") {

    $type = $SEO['type'];
} else {

    $type = $HEAD['default']['type'];
}

if(isset($SEO['img']) && $SEO['img'] != "") {

    $img = $SEO['img'];
} else {

    $img = $HEAD['default']['img'];
}

if(isset($SEO['card']) && $SEO['card'] != "") {

    $card = $SEO['card'];
} else {

    $card = $HEAD['default']['card'];
}

if(isset($SEO['url']) && $SEO['url'] != "") {

    $url = $SEO['url'];
} else {

    $url = $HEAD['default']['url'];
}

if(isset($SEO['site_name']) && $SEO['site_name'] != "") {

    $site_name = $SEO['site_name'];
} else {

    $site_name = $HEAD['default']['site_name'];
}

?>
<title><?= $title; ?></title>
<meta name="description" content="<?= $description; ?>">

<!-- OG -->
<meta property="og: locate" content="<?= $lang . "_" . $country['name'] ?>">
<meta property="og: type" content="<?= $type; ?>">
<meta property="og: url" content="<?= $url; ?>">
<meta property="og: site_name" content="<?= $site_name; ?>">
<meta property="og: title" content="<?= $title; ?>">
<meta property="og: description" content="<?= $description; ?>">
<meta property="og: image" content="<?= $img; ?>">

<!-- TWITTER -->
<meta name="twitter: card" content="<?= $card; ?>">
<meta name="twitter: title" content="<?= $title; ?>">
<meta name="twitter: description" content="<?= $description; ?>">
<meta name="twitter: image" content="<?= $img; ?>">

<!-- CSS -->
<?php

if($CONFIG['debug'] === true) {

    print '
    <link rel="stylesheet" href="' . $CONFIG['static_url'] . '/css/bootstrap.min.css">
    <link rel="stylesheet" href="' . $CONFIG['static_url'] . '/css/main.css">';
} else {

    print '<link rel="stylesheet" href="' . $CONFIG['static_url'] . '/css/main.min.css">';
}

?>
<script src=""></script>
<!-- JavaScript -->
<?php

if($CONFIG['debug'] === true) {

    print '
    <script src="' . $CONFIG['static_url'] . '/js/jquery-3.5.1.min.js"></script>
    <script src="' . $CONFIG['static_url'] . '/js/popper.min.js"></script>
    <script src="' . $CONFIG['static_url'] . '/js/bootstrap.min.js"></script>
    <script src="' . $CONFIG['static_url'] . '/js/main.js"></script>';

} else {

    print '<script src="' . $CONFIG['static_url'] . '/js/main.min.js"></script>';
}

?>


