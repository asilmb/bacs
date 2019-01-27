<div id="container">
    <h1>Наибольшие потери по категориям</h1>

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
		foreach($inCategoryWorst as $key => $categoryItem):?>

            <tr>
                <th scope="row">1</th>
                <td><?= $categoryItem['name'] ?> </td>
                <td><?= $categoryItem['date'] ?></td>
                <td><?= $categoryItem['period'] ?></td>
                <td><?= $categoryItem['amount'] ?></td>
                <td><?= $categoryItem['category'] ?></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>

    <h1>Наибольшие потери за квартал</h1>

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
		foreach($inPeriodWorst as $key => $periodItem):?>
            <tr>
                <th scope="row">1</th>
                <td><?= $periodItem['name'] ?> </td>
                <td><?= $periodItem['date'] ?></td>
                <td><?= $periodItem['period'] ?></td>
                <td><?= $periodItem['amount'] ?></td>
                <td><?= $periodItem['category'] ?></td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>
    <a class="btn" href="/reports/download">Назад</a>
</div>