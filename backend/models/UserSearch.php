<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\User;

/**
 * UserSearch represents the model behind the search form of `backend\models\User`.
 */
class UserSearch extends User
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'identify_expTime', 'age', 'is_follow', 'follow_time', 'coupon'], 'integer'],
            [['mobile', 'credential', 'from', 'type', 'status', 'provide_type', 'provide_id', 'last_time', 'last_wechat_time', 'identify', 'access_token', 'nickname', 'gender', 'portrait', 'trade', 'location', 'create_time', 'update_time', 'username', 'password_reset_token', 'auth_key', 'password_hash', 'admin_status'], 'safe'],
            [['user_money', 'pay_money', 'red_money'], 'number'],
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
        $query = User::find();

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
            'last_time' => $this->last_time,
            'last_wechat_time' => $this->last_wechat_time,
            'identify_expTime' => $this->identify_expTime,
            'age' => $this->age,
            'is_follow' => $this->is_follow,
            'follow_time' => $this->follow_time,
            'create_time' => $this->create_time,
            'coupon' => $this->coupon,
            'user_money' => $this->user_money,
            'update_time' => $this->update_time,
            'pay_money' => $this->pay_money,
            'red_money' => $this->red_money,
        ]);

        $query->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'credential', $this->credential])
            ->andFilterWhere(['like', 'from', $this->from])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'provide_type', $this->provide_type])
            ->andFilterWhere(['like', 'provide_id', $this->provide_id])
            ->andFilterWhere(['like', 'identify', $this->identify])
            ->andFilterWhere(['like', 'access_token', $this->access_token])
            ->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'portrait', $this->portrait])
            ->andFilterWhere(['like', 'trade', $this->trade])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password_reset_token', $this->password_reset_token])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'admin_status', $this->admin_status]);

        return $dataProvider;
    }
}
