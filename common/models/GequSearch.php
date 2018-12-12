<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Gequ;

/**
 * GequSearch represents the model behind the search form of `common\models\Gequ`.
 */
class GequSearch extends Gequ
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gequ_id', 'user_id'], 'integer'],
            [['song_name', 'singer', 'album', 'release_time'], 'safe'],
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
        $query = Gequ::find();

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
            'gequ_id' => $this->gequ_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'song_name', $this->song_name])
            ->andFilterWhere(['like', 'singer', $this->singer])
            ->andFilterWhere(['like', 'album', $this->album])
            ->andFilterWhere(['like', 'release_time', $this->release_time]);

        return $dataProvider;
    }
}
