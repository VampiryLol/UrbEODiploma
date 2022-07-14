<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $id
 * @property string $status
 * @property string|null $keywords
 * @property string|null $description
 *
 * @property Project[] $projects
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::className(), ['status_id' => 'id']);
    }
}
