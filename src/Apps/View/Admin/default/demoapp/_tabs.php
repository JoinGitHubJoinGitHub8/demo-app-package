<?php
use Ffcms\Core\Helper\HTML\Bootstrap\Nav;
?>

<?= Nav::display([
    'property' => ['class' => 'nav-tabs nav-justified'],
    'items' => [
        ['type' => 'link', 'text' => __('Demo index'), 'link' => ['demoapp/index']],
        ['type' => 'link', 'text' => __('Demo form'), 'link' => ['demoapp/form']],
        ['type' => 'link', 'text' => __('Settings'), 'link' => ['demoapp/settings']]
    ],
    'activeOrder' => 'action'
]);?>