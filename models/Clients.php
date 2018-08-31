<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clients".
 *
 * @property int $client_id Client ID
 * @property string $full_name Full name of Client
 * @property string $phone_number Phone number of client
 */
class Clients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['full_name', 'phone_number'], 'required'],
            [['full_name'], 'string', 'max' => 300],
            [['phone_number'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'client_id' => 'Client ID',
            'full_name' => 'Имя Клиента',
            'phone_number' => 'Телефон Клиента',
        ];
    }
    public function modelka(){
        $a=Clients::findOne(['full_name'=>'Зариф']);
        return $a['full_name'].":".$a['phone_number'].":".$a['client_id'];
    
}
}

