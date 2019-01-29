<?php

namespace frontend\modules\baks\controllers;

use domain\v1\finance\enums\CollectionTypeEnum;
use frontend\modules\baks\models\SendForm;
use kartik\alert\Alert;
use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii2lab\domain\data\Query;

class DefaultController extends Controller
{

    public function actionIndex()
    {
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::MEN);
        $menCollection = \App::$domain->finance->collection->all($query);
        $query2 = Query::forge();
        $query2->where('collectionType', CollectionTypeEnum::WOMEN);
        $womenCollection = \App::$domain->finance->collection->all($query2);
        $query3 = Query::forge();
        $query3->where('collectionType', CollectionTypeEnum::TRAVEL);
        $travelCollection = \App::$domain->finance->collection->all($query3);

        $stocks = \App::$domain->finance->stock->all();

        \App::$domain->navigation->alert->create('yyyy2w', Alert::TYPE_SUCCESS);
        $sendForm = new SendForm();
        return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm'));
    }

    /**
     *
     * @var UploadedFile $sendForm ->file
     * @return string
     */
    public function actionSend()
    {
        $query = Query::forge();
        $query->where('collectionType', CollectionTypeEnum::MEN);
        $menCollection = \App::$domain->finance->collection->all($query);
        $query2 = Query::forge();
        $query2->where('collectionType', CollectionTypeEnum::WOMEN);
        $womenCollection = \App::$domain->finance->collection->all($query2);
        $query3 = Query::forge();
        $query3->where('collectionType', CollectionTypeEnum::TRAVEL);
        $travelCollection = \App::$domain->finance->collection->all($query3);
        $stocks = \App::$domain->finance->stock->all();


        $sendForm = new SendForm();
        $body = Yii::$app->request->getBodyParam($sendForm->formName());
        $sendForm->load($body, '');
        $sendForm->validate();

        if ($sendForm->hasErrors()) {
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm'));
        }

        $mailRequest = Yii::$app->mailer->compose()
            ->setFrom('manager@mybaks.kz')
//            ->setTo('asilbekmubarakov@mail.ru')
            ->setTo($sendForm->email)
            ->setSubject('Информация с сайта')
            ->setHtmlBody(
                '<p>' . $sendForm->name . '</p>',
                '<p>' . $sendForm->surname . '</p>',
                '<p>' . $sendForm->orgName . '</p>',
                '<p>' . $sendForm->email . '</p>',
                '<p>' . $sendForm->contactFace . '</p>',
                '<p>' . $sendForm->phone . '</p>');
        $sendForm->file = UploadedFile::getInstance($sendForm, 'file');
        if (!empty($sendForm->file)) {
            if ($sendForm->upload()) {
                $mailRequest->attach( Yii::getAlias('@frontend/web') . '/'. $sendForm->file->baseName . '.' . $sendForm->file->extension);
            }
        }
        $mailResponse = $mailRequest->send();
        if (!empty($sendForm->file)) {
            unlink( Yii::getAlias('@frontend/web') . '/' . $sendForm->file->baseName . '.' . $sendForm->file->extension);
        }
        if($mailResponse){
            return $this->redirect('/');
        } else{
            $sendForm->addError('email', 'send is failed');
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm'));
        }

    }
}