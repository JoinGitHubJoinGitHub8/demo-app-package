<?php
use Ffcms\Core\Helper\Url;
use Ffcms\Core\Helper\HTML\Table;

/** @var $records Apps\ActiveRecord\Demo */

// set page meta title
$this->title = __('Demo app');
// set breadcrumbs
$this->breadcrumbs = [
    Url::to('main/index') => __('Home'),
    __('Demo index')
];

?>

<h1><?= __('Demo app index') ?></h1>
<hr />
<p><?= __('This is a front-end page demoapp package. Here you can see some examples of usage.') ?></p>
<p><?= __('Example of usage ActiveRecord result rendering in table') ?>:</p>
<?php
// build items from sql query (activerecord usage)
$items = [];
foreach ($records as $row) {
    $items[] = [
        ['text' => $row->id],
        ['text' => $row->text]
    ];
}
// display table with specified structure
echo Table::display([
    'table' => ['class' => 'table table-bordered'],
    'thead' => [
        'titles' => [
            ['text' => 'id'],
            ['text' => 'text']
        ]
    ],
    'tbody' => [
        'items' => $items
    ]
]);
?>
<p>Other pages example:</p>
<?= \Ffcms\Core\Helper\HTML\Listing::display([
    'type' => 'ul',
    'id' => 'example-listing',
    'items' => [
        ['type' => 'link', 'link' => ['demoapp/pass', '123', 'test'], 'text' => 'Pass id=123, add=test to action'],
        ['type' => 'link', 'link' => ['demoapp/auth'], 'text' => 'Only for authorized users page']
    ]
]); ?>