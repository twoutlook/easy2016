<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ddl010;

/**
 * Ddl010Search represents the model behind the search form about `app\models\Ddl010`.
 */
class Ddl010Search extends Ddl010
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'SEQ'], 'integer'],
            [['A'], 'safe'],
            [['B', 'C'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ddl010::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'SEQ' => $this->SEQ,
            'B' => $this->B,
            'C' => $this->C,
        ]);

        $query->andFilterWhere(['like', 'A', $this->A]);

        return $dataProvider;
    }
}
