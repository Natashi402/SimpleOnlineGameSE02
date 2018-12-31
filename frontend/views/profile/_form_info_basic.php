<?php
use yii\widgets\ActiveForm;

/* @var $model \common\models\User */
?>

<?php $form = ActiveForm::begin(); ?>
<div class="table">
    <div class="table-row">
        <div class="table-cell"><?php echo Yii::t('vi', 'Username') ?></div>
        <div class="table-cell"><?php echo $form->field($model, 'username')->textInput()->label(false) ?></div>
    </div>
    <div class="table-row">
        <div class="table-cell"><?php echo Yii::t('vi', 'Ngày sinh') ?></div>
        <div class="table-cell"><?php echo $form->field($model, 'birthday')->textInput()->label(false) ?></div>
    </div>
    <div class="table-row">
        <div class="table-cell"><?php echo Yii::t('vi', 'Giới tính') ?></div>
        <div class="table-cell"><?php echo $form->field($model, 'sex')->radioList([
                0 => 'Nam',
                1 => 'Nữ',
            ])->label(false) ?></div>
    </div>
    <div class="table-row">
        <div class="table-cell"><?php echo Yii::t('vi', 'Email') ?></div>
        <div class="table-cell"><?php echo $form->field($model, 'email')->textInput()->label(false) ?></div>
    </div>
</div>
<?php ActiveForm::end(); ?>
