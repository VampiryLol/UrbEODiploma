<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{

    public static function tableName(){
        return 'category';
    }

}
