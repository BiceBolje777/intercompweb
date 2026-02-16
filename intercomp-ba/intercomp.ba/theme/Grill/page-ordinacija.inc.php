<?php
if (!defined('IN_GS')) {
    die('you cannot load this page directly.');
}
/****************************************************
*
* @File:      page-ordinacija.inc.php
* @Package:   Grill Theme for GetSimple
* @Action:    Modernized page structure
*****************************************************/
?>

<section class="container-fluid plavi page-section first-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php get_component('checkord'); ?>
            </div>
        </div>
    </div>
</section>

<section class="container page-section">
    <div class="row">
        <div class="col-12">
            <?php get_page_content(); ?>
        </div>
    </div>
</section>
