<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RfqMaterial;

/**
 * RfqMaterialSearch represents the model behind the search form about `app\models\RfqMaterial`.
 */
class RfqMaterialSearch extends RfqMaterial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'seq'], 'integer'],
            [['material'], 'safe'],
            [['price1', 'price2'], 'number'],
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
        $query = RfqMaterial::find();

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
            'id' => $this->id,
            'price1' => $this->price1,
            'price2' => $this->price2,
            'seq' => $this->seq,
        ]);

        $query->andFilterWhere(['like', 'material', $this->material]);

        return $dataProvider;
    }
}
