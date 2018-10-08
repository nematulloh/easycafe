<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product_category".
 *
 * @property int $id
 * @property int $name
 */
class Product_category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_category';
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
    public function getAllProduct_category()
    {
        return static::find()->all();
    }
    public function getProduct()
    {
        return $this->hasMany(Product::className(), ['categoty_id' => 'id']);
    }
}
