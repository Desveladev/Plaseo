<?php

global $CONFIG;

$main_class = "";
if(isset($CONFIG['header_fixed']) && $CONFIG['header_fixed'] === true) {

    $main_class .= "main-header-fixed ";
}

?>
<main class="<?= $main_class; ?>">
    <section class="row py-5">
        <div class="container text-center">
            <h1 class="text-center">Lorem<span style="color: var(--color-4)">!</span></h1>
            <h1 class="text-center w-100">Repellendus suscipit vero voluptate</h1>
        </div>
    </section>
</main>
