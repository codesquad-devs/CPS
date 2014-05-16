<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\search\AgentSearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="agent-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'custno') ?>

    <?= $form->field($model, 'custname') ?>

    <?= $form->field($model, 'Address1') ?>

    <?= $form->field($model, 'address2') ?>

    <?= $form->field($model, 'address3') ?>

    <?php // echo $form->field($model, 'telephone1') ?>

    <?php // echo $form->field($model, 'telephone2') ?>

    <?php // echo $form->field($model, 'fax') ?>

    <?php // echo $form->field($model, 'person_contact') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'DateStart') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
