<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partsordersapplication".
 *
 * @property int $application_id
 * @property int $quickly
 * @property string $status
 * @property int $sum
 * @property string $one_part
 * @property string $two_part
 * @property string $three_part
 */
class Partsordersapplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'partsordersapplication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quickly', 'status', 'sum'], 'required'],
            [['status'], 'string'],
            [['sum'], 'integer'],
            [['quickly'], 'string'],
            [['one_part', 'two_part', 'three_part'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'application_id' => 'Номер заказа',
            'quickly' => 'Срочность',
            'status' => 'Статус',
            'sum' => 'Общая сумма',
            'one_part' => 'Деталь один',
            'two_part' => 'Деталь два',
            'three_part' => 'Деталь три',
        ];
    }
}
