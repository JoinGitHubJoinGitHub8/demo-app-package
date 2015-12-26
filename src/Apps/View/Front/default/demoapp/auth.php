<?php
use Ffcms\Core\Helper\Url;

$this->title = __('Demoapp authorized');
$this->breadcrumbs = [
    Url::to('main/index') => __('Home'),
    Url::to('demoapp/index') => __('Demo index'),
    __('Authorized view')
];


?>
<h1>Demoapp - only authorized</h1>
<hr />
<p>Hello! You are authorized user and you can see this page!</p>
<?= \Ffcms\Core\Helper\HTML\Table::display([
    'table' => ['class' => 'table table-bordered'],
    'thead' => [
        'titles' => [
            ['text' => 'Param'],
            ['text' => 'Value']
        ]
    ],
    'tbody' => [
        'items' => [
            [
                ['type' => 'text', 'text' => 'User ID'],
                ['type' => 'text', 'text' => \App::$User->identity()->id]
            ],
            [
                ['type' => 'text', 'text' => 'User email'],
                ['type' => 'text', 'text' => \App::$User->identity()->email]
            ],
            [
                ['type' => 'text', 'text' => 'User Login'],
                ['type' => 'text', 'text' => \App::$User->identity()->login]
            ],
            [
                ['type' => 'text', 'text' => 'Profile DUMP'],
                ['type' => 'text', 'text' => \App::$User->identity()->getProfile()]
            ]
        ]
    ]
]) ?>