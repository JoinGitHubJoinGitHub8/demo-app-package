<?php

namespace Apps\Controller\Front;

use Apps\ActiveRecord\Demo;
use Extend\Core\Arch\FrontAppController as Controller;
use Ffcms\Core\App;
use Ffcms\Core\Arch\View;
use Ffcms\Core\Exception\ForbiddenException;
use Ffcms\Core\Helper\FileSystem\File;


class Demoapp extends Controller
{

    private $appRoot;
    private $tplDir;

    public function before()
    {
        parent::before();

        // define application root diskpath and tpl native directory
        $this->appRoot = realpath(__DIR__ . '/../../../');
        $this->tplDir = realpath($this->appRoot . '/Apps/View/Front/default/demoapp/');
        // load internalization package for current lang
        $langFile = $this->appRoot . '/I18n/Front/' . App::$Request->getLanguage() . '/Demoapp.php';
        if (App::$Request->getLanguage() !== 'en' && File::exist($langFile)) {
            App::$Translate->append($langFile);
        }
    }

    /**
     * Index page action
     * @return string
     * @throws \Ffcms\Core\Exception\SyntaxException
     */
    public function actionIndex()
    {
        // select * from prefix_demo
        $records = Demo::all();

        // render viewer and pass records inside as $records
        return App::$View->render('index', [
            'records' => $records
        ], $this->tplDir);
    }

    /**
     * Example of passing 2 params inside action
     * @param string $id
     * @param string|null $add
     * @return string
     */
    public function actionPass($id, $add = null)
    {
        return 'Incoming data: id=' . App::$Security->strip_tags($id) . ', add=' . App::$Security->strip_tags($add);
    }

    public function actionAuth()
    {
        if (!App::$User->isAuth()) {
            throw new ForbiddenException('This page available only for authorized users');
        }

        return (new View('auth', null, $this->tplDir))->render();
    }

}