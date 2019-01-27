<?php
/**
 * @var $this yii\web\View
 * @var $model yii\base\Model
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii2mod\markdown\MarkdownEditor;

?>

<?php $form = ActiveForm::begin(); ?>


<?= $form->field($model, 'desc')->textInput(); ?>

<?= $form->field($model, 'brand')->textInput(); ?>
<?= $form->field($model, 'color')->textInput(); ?>
<?= $form->field($model, 'brandCountry')->textInput(); ?>
<?= $form->field($model, 'madeIn')->textInput(); ?>
<?= $form->field($model, 'collection')->textInput(); ?>
<?= $form->field($model, 'collectionType')->dropDownList([\App::$domain->finance->collection->getCollectionTypeList()]); ?>
<?= $form->field($model, 'size')->textInput(); ?>
<?= $form->field($model, 'price')->textInput(); ?>


<div class="form-group">
	<?= Html::submitButton(Yii::t('action', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
