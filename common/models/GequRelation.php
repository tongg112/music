<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gequ_relation".
 *
 * @property int $id
 * @property int $gedan_id
 * @property int $gequ_id
 *
 * @property Gedan $gedan
 * @property Gequ $gequ
 */
class GequRelation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gequ_relation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gedan_id', 'gequ_id'], 'integer'],
            [['gedan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gedan::className(), 'targetAttribute' => ['gedan_id' => 'gedan_id']],
            [['gequ_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gequ::className(), 'targetAttribute' => ['gequ_id' => 'gequ_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gedan_id' => 'Gedan ID',
            'gequ_id' => 'Gequ ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGedan()
    {
        return $this->hasOne(Gedan::className(), ['gedan_id' => 'gedan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGequ()
    {
        return $this->hasOne(Gequ::className(), ['gequ_id' => 'gequ_id']);
    }
}
