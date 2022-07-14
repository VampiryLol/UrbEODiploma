<?php

namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\Html;
use yii\helpers\VarDumper;

class Cart extends ActiveRecord{

    public function addToCart($project){
        $price = $project->price;

        if( !$_SESSION['cart'][$project->id] ){
            $_SESSION['cart'][$project->id] = [
                'image' => Html::img("@web/upload/store/{$project->image->filePath}", ['alt' => $project['name'], 'height' => 150]),
                'project_id' => $project->id,
                'name' => $project->name,
                'price' => $project->price,
                'category_id' => $project->category->type,
            ];
            $_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ? $_SESSION['cart.sum'] + $price : $price;
            return true;
        }

        return false;
    }

    public function recalc($id){
        if(!isset($_SESSION['cart'] [$id])) return false;
        
        $sumMinus = $_SESSION['cart'] [$id] ['price'];
        $_SESSION['cart.sum'] = $_SESSION['cart.sum'] - $sumMinus;

        unset($_SESSION['cart'] [$id]);
    }
}