<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
$this->beginContent('@frontend/views/layouts/base.php');
?>
    <main class="d-flex">

        <?php if(!Yii::$app->user->isGuest){?>
            <?php $this->beginContent('@app/views/layouts/_sidebar.php'); ?>
            <?=$content;?>
            <?php $this->endContent();?>
        <?php } ?>



        <div class="content-wrapper p-3">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
<?php $this->endContent() ?>