<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gedan".
 *
 * @property int $gedan_id
 * @property int $user_id
 * @property string $list_name 歌单名
 * @property string $description 描述
 * @property string $created 创建时间
 * @property string $updated 更新时间
 *
 * @property User $user
 * @property GequRelation[] $gequRelations
 */
class Gedan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gedan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['list_name', 'description', 'created', 'updated'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gedan_id' => '歌单ID',
            'user_id' => '用户ID',
            'list_name' => '歌单名称',
            'description' => '简介',
            'created' => '创建时间',
            'updated' => '更新时间',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGequRelations()
    {
        return $this->hasMany(GequRelation::className(), ['gedan_id' => 'gedan_id']);
    }
}
