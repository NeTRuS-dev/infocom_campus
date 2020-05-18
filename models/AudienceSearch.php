<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Audience;

/**
 * AudienceSearch represents the model behind the search form of `app\models\Audience`.
 */
class AudienceSearch extends Audience
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'audience_number', 'floor_number', 'number_of_seats', 'audience_type_id', 'subdivision_id'], 'integer'],
            [['audience_width', 'audience_length'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Audience::find();

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
            'audience_number' => $this->audience_number,
            'floor_number' => $this->floor_number,
            'audience_width' => $this->audience_width,
            'audience_length' => $this->audience_length,
            'number_of_seats' => $this->number_of_seats,
            'audience_type_id' => $this->audience_type_id,
            'subdivision_id' => $this->subdivision_id,
        ]);

        return $dataProvider;
    }
}
