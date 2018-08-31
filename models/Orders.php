<?php

namespace app\models;
use Clients;
use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property string $mkdate
 * @property int $order_number
 * @property string $client_name
 * @property int $client_id
 * @property string $client_number
 * @property string $work_name
 * @property string $status
 * @property string $date_zabrali
 * @property string $remont_type
 * @property string $Errors
 * @property string $worker_name
 * @property int $worker_id
 * @property string $works_list
 * @property string $part1
 * @property int $part1_price
 * @property string $part2
 * @property int $part2_price
 * @property string $part3
 * @property int $part3_price
 * @property int $pars_price
 * @property int $works_price
 * @property int $cost
 * @property int $selfcoast себестоимость
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mkdate', 'client_name', 'client_id', 'client_number', 'work_name', 'remont_type','worker_name', 'worker_id'], 'required'],
            [['client_id', 'worker_id', 'part1_price', 'part2_price', 'part3_price', 'pars_price', 'works_price', 'cost', 'selfcoast'], 'integer'],
            [['status', 'remont_type'], 'string'],
            [['mkdate', 'worker_name'], 'string', 'max' => 100],
            [['client_name', 'work_name', 'date_zabrali'], 'string', 'max' => 300],
            [['client_number'], 'string', 'max' => 20],
            [['Errors'], 'string', 'max' => 500],
            [['works_list'], 'string', 'max' => 3000],
            [['part1', 'part2', 'part3'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    
    public function fields()
{
    return [
        // здесь имя поля совпадает с именем атрибута
        'mkdate'=>function ($a){return $a=date("d:m:Y");},
    ];
}
    
    
    
    
    
    
    public function attributeLabels()
    {
        return [
            'mkdate' => 'Дата создания',
            'order_number' => '№',
            'client_name' => 'Клиент',
            'client_id' => 'Client ID',
            'client_number' => 'Сотовый',
            'work_name' => 'Наименование',
            'status' => 'Статус',
            'date_zabrali' => 'Дата когда забрали',
            'remont_type' => 'Тип Ремонта',
            'Errors' => 'Заявленные неисправности',
            'worker_name' => 'Мастер',
            'worker_id' => 'Worker ID',
            'works_list' => 'Список работ',
            'part1' => 'Зап. Часть 1',
            'part1_price' => 'Количество',
            'part2' => 'Зап. Часть 2',
            'part2_price' => 'Кличество',
            'part3' => 'Зап. Часть 3',
            'part3_price' => 'Количество',
            'pars_price' => 'Общая стоимость запчастей',
            'works_price' => 'Стоимость работ',
            'cost' => 'Общая стоимость',
            'selfcoast' => 'Себестоимость',
        ];
    }
}