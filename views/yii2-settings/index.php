<?php

/* @var $this yii\web\View */

use kartik\markdown\Markdown;

$this->title = 'Yii2-settings';
$this->params['menu'] = [
    ['label' => 'Documentation', 'url' => ['/yii2-settings/index']],
    ['label' => 'Example', 'url' => ['/yii2-settings/example']],
    ['label' => 'Source', 'url' => 'https://github.com/rafalkot/yii2-settings']
];

?>
<div class="site-index">
    <div class="body-content">
        <?php echo Markdown::convert(file_get_contents(Yii::getAlias('@vendor/rafalkot/yii2-settings/README.md'))); ?>
    </div>
</div>
