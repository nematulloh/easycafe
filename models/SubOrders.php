<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sub_orders".
 *
 * @property int $id
 * @property int $offitsiant_id
 * @property int $order_id
 * @property string $start_time
 * @property string $stop_time
 * @property int $status
 */
class SubOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['offitsiant_id', 'order_id', 'start_time', 'stop_time', 'status'], 'required'],
            [['offitsiant_id', 'order_id', 'status'], 'integer'],
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
            'order_id' => Yii::t('app', 'Order ID'),
            'start_time' => Yii::t('app', 'Start Time'),
            'stop_time' => Yii::t('app', 'Stop Time'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
