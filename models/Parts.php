<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parts".
 *
 * @property int $part_id
 * @property int $brand_id
 * @property string $brand_name
 * @property string $part_name
 * @property string $part_art
 * @property int $quantity
 * @property int $purchase_price
 * @property int $realization_price
 * @property string $text
 */
class Parts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brand_id'], 'required'],
            [['brand_id', 'quantity', 'purchase_price', 'realization_price'], 'integer'],
            [['text'], 'string'],
            [['brand_name'], 'string', 'max' => 255],
            [['part_name', 'part_art'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'part_id' => 'Part ID',
            'brand_id' => 'Brand ID',
            'brand_name' => 'Наименование бренда',
            'part_name' => 'Наименование запчасти',
            'part_art' => 'Артикул запчасти',
            'quantity' => 'Количество',
            'purchase_price' => 'Закупочная цена',
            'realization_price' => 'Цена реализации',
            'text' => 'Доп описание',
        ];
    }
}
