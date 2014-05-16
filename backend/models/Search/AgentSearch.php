<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Agent;

/**
 * AgentSearch represents the model behind the search form about `app\models\Agent`.
 */
class AgentSearch extends Agent
{
    public function rules()
    {
        return [
            [['custno', 'custname', 'Address1', 'address2', 'address3', 'telephone1', 'telephone2', 'fax', 'person_contact', 'area', 'DateStart'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Agent::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DateStart' => $this->DateStart,
        ]);

        $query->andFilterWhere(['like', 'custno', $this->custno])
            ->andFilterWhere(['like', 'custname', $this->custname])
            ->andFilterWhere(['like', 'Address1', $this->Address1])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'address3', $this->address3])
            ->andFilterWhere(['like', 'telephone1', $this->telephone1])
            ->andFilterWhere(['like', 'telephone2', $this->telephone2])
            ->andFilterWhere(['like', 'fax', $this->fax])
            ->andFilterWhere(['like', 'person_contact', $this->person_contact])
            ->andFilterWhere(['like', 'area', $this->area]);

        return $dataProvider;
    }
}
