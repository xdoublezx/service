<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workers".
 *
 * @property int $worker_id
 * @property string $worker_email
 * @property string $worker_phone
 * @property string $worker_name
 * @property string $workers_login
 */
class Workers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['workers_login'], 'required'],
            [['worker_email', 'worker_phone', 'worker_name'], 'string', 'max' => 300],
            [['workers_login'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'worker_id' => 'Worker ID',
            'worker_email' => 'E-mail сотрудника',
            'worker_phone' => 'Телефон сотрудника',
            'worker_name' => 'Имя сотрудника',
            'workers_login' => 'Workers Login',
        ];
    }
}
