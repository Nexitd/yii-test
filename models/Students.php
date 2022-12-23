<?php

namespace app\models;

use yii\base\Model;
use Yii;

class Students extends \yii\db\ActiveRecord
{  
    public static function tableName()
    {
        return '{{students}}';
    }

    public function rules()
    {
        return [
            [['name', 'surname', 'patronymic'], 'required'],
            [['id'], 'integer'],
            [['name', 'surname', 'patronymic'], 'string', 'max' => 50],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic'
        ];
    }
}