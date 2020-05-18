<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "audience".
 *
 * @property int $id
 * @property int $audience_number
 * @property int $floor_number
 * @property float $audience_width
 * @property float $audience_length
 * @property int $number_of_seats
 * @property int $audience_type_id
 * @property int $subdivision_id
 *
 * @property AudienceType $audienceType
 * @property Subdivision $subdivision
 */
class Audience extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'audience';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['audience_number', 'floor_number', 'audience_width', 'audience_length', 'number_of_seats', 'audience_type_id', 'subdivision_id'], 'required'],
            [['audience_number', 'floor_number', 'number_of_seats', 'audience_type_id', 'subdivision_id'], 'integer'],
            [['audience_width', 'audience_length'], 'number'],
            [['audience_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => AudienceType::class, 'targetAttribute' => ['audience_type_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::class, 'targetAttribute' => ['subdivision_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'audience_number' => 'Номер аудитории',
            'floor_number' => 'Номер этажа',
            'audience_width' => 'Ширина помещения',
            'audience_length' => 'Длина помещения',
            'number_of_seats' => 'Количество посадочных мест',
            'audience_type_id' => 'ID типа аудитории',
            'subdivision_id' => 'ID подразделения',
        ];
    }

    /**
     * Gets query for [[AudienceType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAudienceType()
    {
        return $this->hasOne(AudienceType::class, ['id' => 'audience_type_id']);
    }

    /**
     * Gets query for [[Subdivision]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivision()
    {
        return $this->hasOne(Subdivision::class, ['id' => 'subdivision_id']);
    }
}
