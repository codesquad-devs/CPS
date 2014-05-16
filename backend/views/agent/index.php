<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\search\AgentSearch $searchModel
 */

$this->title = 'Agents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agent-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Agent', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'custno',
            'custname',
            'area',
            'person_contact',
            'telephone1',
            //'Address1',
            //'address2',
            //'address3',

            // 'telephone2',
            // 'fax',


            // 'DateStart',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
