<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Yii2-settings';
$this->params['menu'] = [
    ['label' => 'Documentation', 'url' => ['/yii2-settings/index']],
    ['label' => 'Example', 'url' => ['/yii2-settings/example']],
    ['label' => 'Source', 'url' => 'https://github.com/rafalkot/yii2-settings']
];


use rafalkot\yii2settings\SettingsForm;

echo SettingsForm::widget([
    'object' => $site
]);

echo '<pre>';
echo Html::encode(print_r($site->getSetting(), true));
echo '</pre>';