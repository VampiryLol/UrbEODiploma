<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use app\components\MenuWidget;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Project */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'status_id')->dropDownList([ '1' => 'Завершен', '2' => 'В процессе', '3' => 'В разработке']) ?>

    <div class="form-group field-project-category_id required">
        <label for="project-category_id">Категория</label>
        <select id="project-category_id" class="form-control" name="Project[category_id]">
            <?= MenuWidget::widget(['tpl' => 'select', 'model' => $model])?>
        </select>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput(['accept' => '.jpg, .jpeg, .png']) ?>

    <?= $form->field($model, 'keyword')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Готово', ['class' => 'btn btn-outline-primary m-1 active']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
