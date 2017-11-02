<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Travalcomment;

/**
 * TravalcommentSearch represents the model behind the search form about `common\models\Travalcomment`.
 */
class TravalcommentSearch extends Travalcomment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['travalcommentid', 'travalid', 'uid', 'createtime', 'updatetime'], 'integer'],
            [['travalcontent'], 'safe'],
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
        $query = Travalcomment::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>['pageSize'=>8],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'travalcommentid' => $this->travalcommentid,
            'travalid' => $this->travalid,
            'uid' => $this->uid,
            'createtime' => $this->createtime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'travalcontent', $this->travalcontent]);

        return $dataProvider;
    }
}