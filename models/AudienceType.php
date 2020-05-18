<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audience_type".
 *
 * @property int $id
 * @property string $name_of_type
 *
 * @property Audience[] $audiences
 */
class AudienceType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audience_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_of_type'], 'required'],
            [['name_of_type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_of_type' => 'Тип аудитории',
        ];
    }

    /**
     * Gets query for [[Audiences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAudiences()
    {
        return $this->hasMany(Audience::class, ['audience_type_id' => 'id']);
    }
}
