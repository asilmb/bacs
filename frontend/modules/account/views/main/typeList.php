<?php

/* @var $this yii\web\View
 * @var $activeType TypeEntity
 * @var $activeTypes array
 */


use domain\v4\active\entities\TypeEntity;
use yii\bootstrap\Html;

$this->title = t('account/main', 'title');

?>
<style>
    .active-list{
        display:flex;
   
    }

    .active-list  .active-list__item{
        height:80px;
        width:200px;
        padding: 15px;
        text-decoration: none;
        color:black;
        border-radius: 15px;
        background: white;

    }
    .active-list  .active-list__item:hover{
        opacity: 0.8;
    }
    .active-list__item .logo{
        height:50px;
        width:50px;
        border-radius: 100px;
        margin-right: 30px;
        background: black;
        float: left;
    }
    .active-list__item .logo {
        height:50px;
        width:50px;
    }
    .active-list__item .title{
        font-weight: 600;
    }

</style>
<div class="active-list">
    <?php //foreach ($typesList as $type){
    //   echo $this->render('typeListItem', ['type' => $type]) ;
    //}?>
    <a class="active-list__item" href='/card/bank-list'>
        <div class="logo"> </div>
        <p class="title">карта</p>
      
    </a>
    <a class="active-list__item" href='/banking'>
        <div class="logo"> </div>
        <p class="title">бангинг</p>

    </a>
</div>
