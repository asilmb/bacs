<?php

use yii\bootstrap\ActiveForm;


?>
<div id="container">


    <?php $form = ActiveForm::begin();
    $form->method = "post";
    ?>
    
    <?= $form->field($model, 'image')->fileInput()->label('Загрузить Картинку') ?>
    <input type="submit" value="Загрузить"><br>
    <?php ActiveForm::end(); ?>
    <img src="<?=$model->image?>" alt="">

</div>



