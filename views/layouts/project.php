<?php
/* @var $this \yii\web\View */
use yii\bootstrap\Nav;
use yii\helpers\Html;

/* @var $content string */
$this->beginContent('@app/views/layouts/main.php');
?>
<h1><?php echo Html::encode($this->title); ?></h1>
<div class="row">
    <div class="col-md-3">
        <?php echo Nav::widget([
            'items' => $this->params['menu'],
            'options' => ['class' =>'nav-stacked nav-pills'],
        ]); ?>
    </div>
    <div class="col-md-9">
        <?php echo $content; ?>
    </div>
</div>
<?php
$this->endContent();