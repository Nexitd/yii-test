<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Update author #ID: <?php echo $model->id;  ?></h1>

<?php $from = ActiveForm::begin(); ?>

<?php echo $from->field($model, 'name'); ?>

<?php echo $from->field($model, 'surname'); ?>
<?php echo $from->field($model, 'patronymic'); ?>

<?php   echo Html::submitButton('Save', [
    'class' => 'btn btn-primary my-3',
]); ?>

<?php ActiveForm::end(); ?>
