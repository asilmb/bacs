<?php

use yii\bootstrap\ActiveForm;


?>
<div id="container">

	<?php if(empty($currentTable)): ?>
        <h1>Формат таблицы для загрузки</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Событие</th>
                <th scope="col">Дата</th>
                <th scope="col">Квартал</th>
                <th scope="col">Сумма</th>
                <th scope="col">Категория</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Заработная плата сотрудников</td>
                <td>25.01.18</td>
                <td>1</td>
                <td>350000</td>
                <td>зп</td>

            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Транспортировка топлива</td>
                <td>10.01.18</td>
                <td>1</td>
                <td>36000</td>
                <td>транспортировка</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Транспортировка топлива</td>
                <td>19.01.18</td>
                <td>1</td>
                <td>13520</td>
                <td>транспортировка</td>
            </tr>

            </tbody>
        </table>
	<?php endif; ?>

    <div style="float: left">
		<?php $form = ActiveForm::begin();
		$form->method = "post";
		?>
		<?= $form->field($model, 'imageFile')->fileInput()->label('Загрузить отчет') ?>
        <input type="submit" value="Загрузить"><br>
		<?php ActiveForm::end(); ?>
    </div>

	<?php if(!empty($currentTable)): ?>
        <div style="float: right">
			<?php $form = ActiveForm::begin();
			$form->action = "/reports/calc";
			$form->method = "post";
			?>
            <input type="hidden" value='<?= json_encode($currentTable->toArray()) ?>' name="entityCollection">
            <input type="submit" value="Проанализировать"><br>
			<?php ActiveForm::end(); ?>
        </div>
	<?php endif; ?>

	<?php if(!empty($currentTable)): ?>
        <div style="float: left; width: 100%">
            <h1>Текущий отчет</h1>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Событие</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Квартал</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Категория</th>
                </tr>
                </thead>
                <tbody>
				<?php /** @var \frontend\modules\reports\entities\ActionEntity $categoryItem */
				foreach($currentTable as $key => $item):
					$item = $item->toArray();
					?>
                    <tr>
                        <th scope="row"><?= $key ?></th>
                        <td><?= $item['name'] ?> </td>
                        <td><?= $item['date'] ?></td>
                        <td><?= $item['period'] ?></td>
                        <td><?= $item['amount'] ?></td>
                        <td><?= $item['category'] ?></td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
	<?php endif; ?>
</div>



