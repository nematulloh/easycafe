<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "field".
 *
 * @property int $id
 * @property int $name
 * @property string $status
 */
class Field extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'field';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status'], 'required'],
            [['name'], 'string'],
            [['status'], 'string', 'max' => 20],
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
            'status' => Yii::t('app', 'Status'),
        ];
    }
    public function getTarif()
    {
        return $this->hasOne(Tarif::className(), ['id' => 'status']);
    }
    public function getAllField()
    {
        return static::find()->all();
    }
}
