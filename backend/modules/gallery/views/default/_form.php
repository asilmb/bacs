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
<?= $form->field($model, 'descPresent')->textInput(); ?>
<?= $form->field($model, 'descFull')->textInput(); ?>

<?= DatePicker::widget([
'model' => $model,
'attribute' => 'date',
'options' => ['placeholder' => 'укажите дату'],
'pluginOptions' => [
'autoclose'=>true
]
]);
?>
<?= $form->field($model, 'stockType')->dropDownList([\App::$domain->finance->stock->getstockTypeList()]); ?>



<div class="form-group">
	<?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
