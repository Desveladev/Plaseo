<?php

global $CONFIG;

$main_class = "";
if(isset($CONFIG['header_fixed']) && $CONFIG['header_fixed'] === true) {

    $main_class .= "main-header-fixed ";
}

?>
<main class="<?= $main_class; ?>">
    <div class="container mt-5 pt-5">
        <div class="row">
            <label class="logo navbar-brand p-0 w-100 text-center">Lorem<span>ipsum</span></label>
            <h1 class="text-center w-100">Repellendus suscipit vero voluptate</h1>
        </div>
    </div>
</main>
