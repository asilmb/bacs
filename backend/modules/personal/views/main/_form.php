<?php

use domain\v4\active\helpers\ActiveHelper;

use dpodium\colorpicker\ColorPickerAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
ColorpickerAsset::register($this);

?>

<div class="active-type-form row">
	
	<?php $form = ActiveForm::begin(); ?>
    <div class="col-xs-6">
	    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
	
	    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
	
	    <?= $form->field($model, 'bik')->textInput(['maxlength' => true]) ?>
        
	    <?= $form->field($model, 'type_id')->dropDownList(ActiveHelper::getTypes(),['readOnly' => true]); ?>
        
	    <?= $form->field($model, 'api_sign')->textInput(['maxlength' => true]) ?>
        <div class="form-group">
		    <?= Html::submitButton(t('bonus/main', 'Approve') , ['class' => 'btn btn-success' ]) ?>
        </div>
    </div>
    
    <div class="col-xs-6">
    
		<?= $form->field($model, 'background_color')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
		
		<?= $form->field($model, 'font_color')->textInput(['maxlength' => true]) ?>


    </div>

    
	
	<?php ActiveForm::end(); ?>

</div>

<?php

$this->registerJs("$('#providerform-background_color').ColorPicker({
       		color: '" . $model->background_color . "',
			onSubmit: function(hsb, hex, rgb, el) {
				$(el).val(hex);
				$(el).ColorPickerHide();
			},
       });
    ");
?>