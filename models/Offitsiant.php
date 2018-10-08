<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offitsiant".
 *
 * @property int $id
 * @property string $name
 * @property string $login
 * @property string $pasword
 */
class Offitsiant extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'offitsiant';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'login', 'pasword'], 'required'],
            [['name', 'login', 'pasword'], 'string', 'max' => 20],
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
            'login' => Yii::t('app', 'Login'),
            'pasword' => Yii::t('app', 'Pasword'),
        ];
    }
    public function getAllOffitsiant()
    {
        return static::find()->all();
    }
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['offitisiant_id' => 'id']);
    }
}
