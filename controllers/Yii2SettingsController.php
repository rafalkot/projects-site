<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\Site;

class Yii2SettingsController extends Controller
{

    public $layout = 'project';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionExample()
    {
        $site = new Site();

        return $this->render('example', [
            'site' => $site
        ]);
    }
}
