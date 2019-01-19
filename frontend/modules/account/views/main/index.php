<?php

/* @var $this yii\web\View */

use yii\bootstrap\Html;

$this->title = t('account/main', 'title');

?>
<style>
    .sidebar-module_item {
        padding: 10px 20px;
    }

    .modal-window {
        display: none;
        height: 100%;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 100;
    }
    
    .modal-window .container {
        background-color: #fff;
    }

    #active-type-modal {
        display: none;
        height: auto;
        width: auto;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 101;
        padding-top: 100px;
    }

    #close {
        color: white;
        opacity: 1;
        float: right;
    }

    /* loader spiner */
    .spiner-preloader {
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        position: fixed;
        z-index: 1099;
        opacity: 0.7;
        display: none;
    }

    .loader10 {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        position: relative;
        animation: loader10 0.9s ease alternate infinite;
        animation-delay: 0.36s;
        top: 365px;
        left: 25%;
        position: absolute;
        z-index: 1100;
    }

    .loader10::after, .loader10::before {
        content: '';
        position: absolute;
        width: 28px;
        height: 28px;
        border-radius: 50%;
        animation: loader10 0.9s ease alternate infinite;
    }

    .loader10::before {
        left: -40px;
        animation-delay: 0.18s;
    }

    .loader10::after {
        right: -40px;
        animation-delay: 0.54s;
    }

    @keyframes loader10 {
        0% {
            box-shadow: 0 28px 0 -28px #0052ec;
        }
        100% {
            box-shadow: 0 28px 0 #0052ec;
        }
    }
</style>
<script>
	function addActive() {
		$.ajax({
			url: '<?php echo Yii::$app->request->baseUrl . '/account/typeList' ?>',
			//url: '/card/bank-list',
			type: 'GET',
            //datatype: 'json',
			beforeSend: function () {
				$('.spiner-preloader').css('display', 'block');
			},
			success: function (data) {
				$(".active-type-overlay").css('display', 'block');
				$("#active-type-modal").css('display', 'block');
				$("#active-type-modal .data").html(data);
			},
			complete: function () {
				$('.spiner-preloader').css('display', 'none');
			}
		});
	}
</script>

<div class="row account-window">
    <div class="spiner-preloader">
        <div class="loader10"></div>
    </div>
    <div class="col-sm-9">
		<?php if (empty($activeList)) { ?>
            <p>У вас пока нет привязанных счетов</p>
            <p>Для начала добавьте платежную карточку</p>
		<?php } else {
			foreach ($activeList as $active) { ?>
					<?= $this->render('activeItem', ['active' => $active]) ?>
			<?php }
		} ?>
    </div>
    <div class="col-sm-3">
		<?= Html::Button(t('active/main', 'add_active'), [
			'class' => 'btn btn-success',
			'onclick' => 'addActive()',
			'style' => 'width:100%',
		]) ?>
        <div class="sidebar-module sidebar-module-inset"
             style='background-color: #f5f5f5;   border-radius: 4px;  margin-top: 20px;  '>
            <div class="sidebar-module_item">
                <p><?= t('active/main', 'balance') ?></p>
                <p><?= Yii::$app->account->auth->getBalance()->active ?></p>
            </div>
            <div class="sidebar-module_item">
                <p><?= t('active/main', 'salemPay_wallet') ?></p>
                <p><?= Yii::$app->account->auth->getBalance()->active ?></p>
            </div>
            <div class="sidebar-module_item">
                <p><?= t('active/main', 'active_balance') ?></p>
                <p><?= Yii::$app->account->auth->getBalance()->active ?></p>
            </div>
            <div class="sidebar-module_item">
                <p><?= t('active/main', 'bonus_balance') ?></p>
                <p><?= Yii::$app->account->auth->getBalance()->active ?></p>
            </div>
            <div class="sidebar-module_item"
                 style='background-color: #999;   border-radius: 4px; padding: 15px; text-align: center; width:100%;'>
				<?= Html::a(t('account/main', 'transactions'), '#', ['style' => 'color:white']) ?>
            </div>
        </div>
    </div>
</div>

<div class="active-type-overlay modal-window" onclick='closeModals()' id="active-type-modal">
    <div class="container">
        <?= Html::a('X', '#', ['id' => 'close', 'onclick' => 'closeModals()','style'=>'background:black']) ?>
        <div class="data"></div>
    </div>
</div>




