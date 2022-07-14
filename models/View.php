<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;



class View extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    public static function tableName(){
        return 'status';
    }

    public function getProjects(){
        return $this->hasMany(Project::class, ['status_id' => 'id']);
    }

}
