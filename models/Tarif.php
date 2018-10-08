<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tarif".
 *
 * @property int $id
 * @property int $name
 */
class Tarif extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tarif';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    public function getAllTarif()
    {
        return static::find()->all();
    }
}
