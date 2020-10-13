<?php

global $CONFIG;

$main_class = "";
if(isset($CONFIG['header_fixed']) && $CONFIG['header_fixed'] === true) {

    $main_class .= "main-header-fixed ";
}

?>
<main class="<?= $main_class; ?>">
    <section class="container pb-5">
    perfect
</main>
