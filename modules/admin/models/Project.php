<?php

namespace app\modules\admin\models;

use Yii;
use app\models\Image;
use GuzzleHttp\Psr7\Query;
use yii\helpers\VarDumper;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property int $status_id
 * @property int $category_id
 * @property string $name
 * @property string $img
 * @property string|null $keyword
 * @property string|null $description
 *
 * @property Category $category
 * @property Status $status
 */
class Project extends \yii\db\ActiveRecord
{

    public $image;

    public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_id', 'category_id'], 'integer'],
            [['category_id', 'name', 'price'], 'required'],
            [['price'], 'number'],
            [['name', 'keyword', 'description'], 'string', 'max' => 255],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::class, 'targetAttribute' => ['status_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
            [['image'], 'file', 'extensions' => ['png', 'jpg', 'jpeg'], 'skipOnError' => false, 'skipOnEmpty' => true, 'maxSize' => 10*1024*1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => "ID Проекта",
            'status_id' => 'Статус',
            'category_id' => 'Категория',
            'price' => "Цена дизайна",
            'name' => "Имя дизайна",
            'image' => "Картинка",
            'keyword' => "Ключевые слова",
            'description' => 'Описание',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::class, ['id' => 'status_id']);
    }

    public function getImages()
    {
        return $this->hasOne(Image::class, ['itemId' => 'id']);
    }

    public function upload(){

        if($this->validate()){
            if( $this->image ){
                $path = 'upload/store/';
                $im = $this->image->baseName . '.' . $this->image->extension;
                $this->image->saveAs($path . $im);                
            }
            if( $this->save(false) ){ 
                if( $this->image ){
                    if(!is_dir($path . 'Projects/Project' . $this->id)){
                        mkdir($path . 'Projects/Project' . $this->id);
                    }
                    copy($path . $im, $path . 'Projects/Project' . $this->id . '/'. $im);
                    // $this->attachImage($path);
                    // unlink( 'upload/store/' . $oldImage);
                    @unlink($path . $im);
                    
                    $image = ($this->images)? $this->images : new Image();

                    $oldImage = $image->filePath;
                    
                    $image->filePath = 'Projects/Project' . $this->id . '/'. $im;
                    if( !$image->id ){
                        $image->itemId = $this->id;
                        $image->isMain = 1;
                        $image->modelName = 'Project';                        
                    }
                    // VarDumper::dump($oldImage,10,true);die;
                    if( $oldImage ){
                        unlink('upload/store/' . $oldImage);
                    }
                    $image->save();
                }

                return true;
            }
        }
        return false;
    }
}
