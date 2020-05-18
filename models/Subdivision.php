<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subdivision".
 *
 * @property int $id
 * @property string $name
 * @property int $building_id
 *
 * @property Audience[] $audiences
 * @property Building $building
 */
class Subdivision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subdivision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'building_id'], 'required'],
            [['building_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['building_id'], 'exist', 'skipOnError' => true, 'targetClass' => Building::class, 'targetAttribute' => ['building_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название подразделения',
            'building_id' => 'ID здания',
        ];
    }

    /**
     * Gets query for [[Audiences]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAudiences()
    {
        return $this->hasMany(Audience::class, ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Building]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuilding()
    {
        return $this->hasOne(Building::class, ['id' => 'building_id']);
    }
}
