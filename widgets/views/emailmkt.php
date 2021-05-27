<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field ($model ,'nome') ?>

<?= $form->field($model, 'e_mail') ?>

<div class "form-group">
    <?= Html::submitbutton('Enter', ['class' => 'btn-btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>