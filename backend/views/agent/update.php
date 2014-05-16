<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var app\models\Agent $model
 */

$this->title = 'Update Agent: ' . ' ' . $model->custno;
$this->params['breadcrumbs'][] = ['label' => 'Agents', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->custno, 'url' => ['view', 'id' => $model->custno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agent-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
