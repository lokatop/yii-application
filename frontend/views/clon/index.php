<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html; ?>

<div class="clon-index">
    <h1 class="display-4"><?php echo $title ?></h1>
    <p class="lead"><?php echo $desc ?></p>

    <div class="row justify-content-center">

        <?php $form = ActiveForm::begin(['id' => 'title-desc-form']); ?>

        <?= $form->field($model, 'title')->hint('Enter title') ?>

        <?= $form->field($model, 'desc')->hint('Enter Desc of title') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'title-desc-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>

    <div class="row justify-content-center">
        <form id="ajax_form" action="" method="post" class="m-3 border-top">
            <label class="m-2" for="title">Get Random Number</label>

            <div class="form-inline">
                <input name="amount"    required type="text" class="m-2 form-control" id="amount" placeholder="amount of nums">
                <input name="min"       required type="text" class="m-2 form-control" id="min" placeholder="min value of once num">
                <input name="max"       required type="text" class="m-2 form-control" id="max" placeholder="max value of once num">
                <button id="btn" type="submit" class="m-2 btn btn-primary">Submit</button>
            </div>
            <div class="form-check">
                <input name="checkbox" type="checkbox" class="form-check-input" id="withWord">
                <label class="form-check-label" for="withWord">with random word</label>
            </div>
        </form>
    </div>
    <div class="row justify-content-center">
        <p id="result_form"></p>
    </div>
</div>
