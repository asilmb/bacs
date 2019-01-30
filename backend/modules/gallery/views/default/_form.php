<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii2mod\markdown\MarkdownEditor;

?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'title')->textInput(); ?>
<?= $form->field($model, 'desc')->textInput(); ?>
<div class="form-group">
    <?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>
<?= $form->field($model, 'image')->hiddenInput()->label(''); ?>
<?php ActiveForm::end(); ?>
