<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gequ".
 *
 * @property int $gequ_id
 * @property int $user_id
 * @property string $song_name
 * @property string $singer 歌手
 * @property string $album 专辑
 * @property string $release_time
 *
 * @property User $user
 * @property GequRelation[] $gequRelations
 */
class Gequ extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gequ';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['song_name', 'singer', 'album', 'release_time'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'gequ_id' => 'Gequ ID',
            'user_id' => 'User ID',
            'song_name' => 'Song Name',
            'singer' => 'Singer',
            'album' => 'Album',
            'release_time' => 'Release Time',
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
        return $this->hasMany(GequRelation::className(), ['gequ_id' => 'gequ_id']);
    }
}
