<?php
use Ffcms\Core\Arch\View;
use Ffcms\Core\Helper\Url;

/** @var $tplPath string */
/** @var $model Apps\Model\Admin\Demoapp\FormDemo */
// set global meta-title as apply dynamic property for {$this} object
$this->title = __('Demo form');

// set breadcrumbs as key->value array (url > text)
$this->breadcrumbs = [
    Url::to('main/index') => __('Main'),
    Url::to('application/index') => __('Applications'),
    Url::to('demoapp/index') => __('Demo app'),
    __('Demo form')
];

// in object initiation views you shall not able to use $this->render or you get deadlock of memory cache
echo (new View('_tabs', null, $tplPath))->render();

?>
<h1><?= __('Demo form') ?></h1>
<hr />
<p><?= __('This is example of form usage') ?>.</p>
<?php $form = new \Ffcms\Core\Helper\HTML\Form($model, ['class' => 'form-horizontal', 'method' => 'post']); ?>

<?= $form->field('textProp', 'text', ['class' => 'form-control'], __('Example helper for form text')) ?>
<?= $form->field('selectProp', 'select', ['class' => 'form-control', 'options' => ['Test 1', 'Test 2']], __('Example helper for form select options')) ?>
<?= $form->field('checkboxProp', 'checkbox', null, __('Example helper for form checkbox')) ?>

<?= $form->submitButton(__('Send'), ['class' => 'btn btn-primary']) ?>

<?= $form->finish() ?>
