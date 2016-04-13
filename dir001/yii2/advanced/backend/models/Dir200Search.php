<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dir200;

/**
 * Dir200Search represents the model behind the search form about `app\models\Dir200`.
 */
class Dir200Search extends Dir200
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dept_id', 'prj_id'], 'integer'],
            [['job_title', 'empe_name', 'ext_num', 'cell_num', 'mailbox'], 'safe'],
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
        $query = Dir200::find();

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
            'dept_id' => $this->dept_id,
            'prj_id' => $this->prj_id,
        ]);

        $query->andFilterWhere(['like', 'job_title', $this->job_title])
            ->andFilterWhere(['like', 'empe_name', $this->empe_name])
            ->andFilterWhere(['like', 'ext_num', $this->ext_num])
            ->andFilterWhere(['like', 'cell_num', $this->cell_num])
            ->andFilterWhere(['like', 'mailbox', $this->mailbox]);

        return $dataProvider;
    }
}
