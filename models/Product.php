<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $foto
 * @property int $categoty_id
 * @property int $price
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name',  'categoty_id', 'price'], 'required'],
            [['categoty_id', 'price'], 'integer'],
            //[['categoty_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product_category::className(), 'targetAttribute' => ['categoty_id' => 'id']],
            [['name'], 'string', 'max' => 35],
            [['foto'], 'file', 'extensions'=>['png','jpg','gif']],
            [['status'], 'string', 'max' => 10],
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
            'foto' => Yii::t('app', 'Foto'),
            'categoty_id' => Yii::t('app', 'Categoty ID'),
            'price' => Yii::t('app', 'Price'),
        ];
    }
    public function getProduct_category()
    {
        return $this->hasOne(Product_category::className(), ['id' => 'categoty_id']);
    }
}
