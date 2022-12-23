<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Create new Student</h1>

<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($student, 'name'); ?>

    <?= $form->field($student, 'surname'); ?>

    <?= $form->field($student, 'patronymic'); ?>

    <?= Html::submitButton('Submit', [
            'class' => 'btn btn-primary my-3',
]); ?>

<?php ActiveForm::end(); ?>