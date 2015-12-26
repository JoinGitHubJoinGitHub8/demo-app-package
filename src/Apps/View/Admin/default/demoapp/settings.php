<?php
use Ffcms\Core\Helper\Url;

/** @var $this Ffcms\Core\Arch\View */
/** @var $model Apps\Model\Admin\Demoapp\FormSettings */
/** @var $tplPath string */

$this->title = __('Settings');

// set breadcrumbs as key->value array (url > text)
$this->breadcrumbs = [
    Url::to('main/index') => __('Main'),
    Url::to('application/index') => __('Applications'),
    Url::to('demoapp/index') => __('Demo app'),
    __('Settings')
];

echo $this->render('_tabs', null, $tplPath);

?>
<h1><?=__('Demoapp settings')?></h1>
<hr />
<p><?= __('This page is example to use application configurations') ?></p>
<?php $form = new \Ffcms\Core\Helper\HTML\Form($model, ['class' => 'form-horizontal', 'method' => 'post']) ?>

<?= $form->field('textCfg', 'text', ['class' => 'form-control'], __('Test helper for %s%', ['s' => 'textCfg'])) ?>
<?= $form->field('intCfg', 'text', ['class' => 'form-control'], __('Test helper for %s%', ['s' => 'intCfg'])) ?>
<?= $form->field('boolCfg', 'checkbox', null, __('Test helper for %s%', ['s' => 'boolCfg'])) ?>

<?= $form->submitButton(__('Save'), ['class' => 'btn btn-default']) ?>

<?= $form->finish() ?>

