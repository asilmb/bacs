<?php

$specification = $active->type->handler->controller . '/view?active_id='.$active->id;
if ($active->type->id == 2){
	$specification= '#';
}
?>
<a class="ag-card ag-card--card white bank" href='<?= $specification ?>'
   style="background-color: #0f7496; color: black">
    <?= $active->provider->title ?>
</a>