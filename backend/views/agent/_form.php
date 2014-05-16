<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Agent $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="agent-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'DateStart')->textInput() ?>

    <?= $form->field($model, 'custno')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'custname')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'Address1')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'address2')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'address3')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'person_contact')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'telephone1')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'telephone2')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'fax')->textInput(['maxlength' => 15]) ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => 4]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
