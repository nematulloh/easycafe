<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int $offitsiant_id
 * @property int $field_id
 * @property string $start_time
 * @property string $stop_time
 * @property int $status
 * @property int $tarif_id
 * @property int $total_summa
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
            [['offitsiant_id', 'field_id', 'start_time', 'stop_time', 'status', 'tarif_id', 'total_summa'], 'required'],
            [['offitsiant_id', 'field_id', 'status', 'tarif_id', 'total_summa'], 'integer'],
            [['start_time', 'stop_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'offitsiant_id' => Yii::t('app', 'Offitsiant ID'),
            'field_id' => Yii::t('app', 'Field ID'),
            'start_time' => Yii::t('app', 'Start Time'),
            'stop_time' => Yii::t('app', 'Stop Time'),
            'status' => Yii::t('app', 'Status'),
            'tarif_id' => Yii::t('app', 'Tarif ID'),
            'total_summa' => Yii::t('app', 'Total Summa'),
        ];
    }
    public function getOffitsiant()
    {
        return $this->hasOne(Offitsiant::className(), ['id' => 'offitsiant_id']);
    }
    public function getTarif()
    {
        return $this->hasOne(Tarif::className(), ['id' => 'tarif_id']);
    }
    public function getField()
    {
        return $this->hasOne(Field::className(), ['id' => 'field_id']);
    }
}
