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

if(isset($SEO['image']) && $SEO['image'] != "") {

    $img = $SEO['image'];
} else {

    $img = $HEAD['default']['image'];
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
<?php

if(isset($SEO['url']) && $SEO['url'] != "") {

    print '<link rel="canonical" href="' . $CONFIG['country_url'] . $url . '"/>';
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" href="<?= $CONFIG['static_url']; ?>/img/favicon.png">

<!-- OG -->
<meta property="og: locate" content="<?= $lang . "_" . $country['code'] ?>">
<meta property="og: type" content="<?= $type; ?>">
<meta property="og: url" content="<?= $CONFIG['base_url'] . $url; ?>">
<meta property="og: site_name" content="<?= $site_name; ?>">
<meta property="og: title" content="<?= $title; ?>">
<meta property="og: description" content="<?= $description; ?>">
<meta property="og: image" content="<?= $CONFIG['static_url'] . $img; ?>">

<!-- TWITTER -->
<meta name="twitter: card" content="<?= $card; ?>">
<meta name="twitter: title" content="<?= $title; ?>">
<meta name="twitter: description" content="<?= $description; ?>">
<meta name="twitter: image" content="<?= $CONFIG['static_url'] . $img; ?>">

<!-- FontAwesome -->
<script src="https://kit.fontawesome.com/9b00a7e038.js" crossorigin="anonymous"></script>

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $CONFIG['analytics']['google']; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', '<?= $CONFIG['analytics']['google']; ?>');
</script>


