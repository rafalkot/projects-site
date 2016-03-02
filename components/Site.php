<?php

namespace app\components;

use rafalkot\yii2settings\SettingsTrait;
use yii\jui\DatePicker;

class Site
{
    use SettingsTrait;

    public function getSettingsCategory()
    {
        return 'site';
    }

    public function getSettingsFormConfig()
    {
        return [
            // text input
            'title' => [
                'input' => 'text',
                'label' => 'Site Title'
            ],
            // dropdown list
            'comments' => [
                'input' => 'dropdown',
                'label' => 'Are comments enabled?',
                'options' => [1 => 'Yes', 0 => 'No'],
                'default' => 1
            ],
            // checkboxes
            'languages' => [
                'input' => 'checkboxList',
                'options' => ['en' => 'English', 'pl' => 'Polish']
            ],
            // custom input
            'custom_input' => [
                'input' => function ($model, $key) {
                    return DatePicker::widget(['model' => $model, 'attribute' => $key]);
                },
                'label' => 'Some label'
            ]
        ];
    }
}