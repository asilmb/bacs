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
        $gallery = \App::$domain->finance->gallery->all();

        $sendForm = new SendForm();
        $sendForm1 = new SendForm();
        $sendForm2 = new SendForm();
        return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
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
        $gallery = \App::$domain->finance->gallery->all();

        $sendForm = new SendForm();
        $sendForm1 = new SendForm();
        $sendForm2 = new SendForm();

        $body = Yii::$app->request->getBodyParam($sendForm->formName());
        $sendForm->load($body, '');
        $sendForm->validate();

        if ($sendForm->hasErrors()) {
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

        $mailRequest = Yii::$app->mailer->compose()
            ->setFrom('manager@mybaks.kz')
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
                $mailRequest->attach(Yii::getAlias('@frontend/web') . '/' . $sendForm->file->baseName . '.' . $sendForm->file->extension);
            }
        }
        $mailResponse = $mailRequest->send();
        if (!empty($sendForm->file)) {
            unlink(Yii::getAlias('@frontend/web') . '/' . $sendForm->file->baseName . '.' . $sendForm->file->extension);
        }
        if ($mailResponse) {
            return $this->redirect('/');
        } else {
            $sendForm->addError('email', 'send is failed');
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

    }

    /**
     *
     * @var UploadedFile $sendForm ->file
     * @return string
     */
    public function actionSend1()
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
        $gallery = \App::$domain->finance->gallery->all();

        $sendForm = new SendForm();
        $sendForm1 = new SendForm();
        $sendForm2 = new SendForm();


        $body = Yii::$app->request->getBodyParam($sendForm1->formName());
        $sendForm1->load($body, '');
        $sendForm1->validate();

        if ($sendForm1->hasErrors()) {
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

        $mailRequest = Yii::$app->mailer->compose()
            ->setFrom('manager@mybaks.kz')
            ->setTo($sendForm1->email)
            ->setSubject('Информация с сайта')
            ->setHtmlBody(
                '<p>' . $sendForm1->name . '</p>',
                '<p>' . $sendForm1->surname . '</p>',
                '<p>' . $sendForm1->orgName . '</p>',
                '<p>' . $sendForm1->email . '</p>',
                '<p>' . $sendForm1->contactFace . '</p>',
                '<p>' . $sendForm1->phone . '</p>');
        $sendForm1->file = UploadedFile::getInstance($sendForm1, 'file');
        if (!empty($sendForm1->file)) {
            if ($sendForm1->upload()) {
                $mailRequest->attach(Yii::getAlias('@frontend/web') . '/' . $sendForm1->file->baseName . '.' . $sendForm1->file->extension);
            }
        }
        $mailResponse = $mailRequest->send();
        if (!empty($sendForm1->file)) {
            unlink(Yii::getAlias('@frontend/web') . '/' . $sendForm1->file->baseName . '.' . $sendForm1->file->extension);
        }
        if ($mailResponse) {
            return $this->redirect('/');
        } else {
            $sendForm1->addError('email', 'send is failed');
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

    }

    /**
     *
     * @var UploadedFile $sendForm ->file
     * @return string
     */
    public function actionSend2()
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
        $gallery = \App::$domain->finance->gallery->all();

        $sendForm = new SendForm();
        $sendForm1 = new SendForm();
        $sendForm2 = new SendForm();
        $body = Yii::$app->request->getBodyParam($sendForm2->formName());
        $sendForm2->load($body, '');
        $sendForm2->validate();

        if ($sendForm2->hasErrors()) {
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

        $mailRequest = Yii::$app->mailer->compose()
            ->setFrom('manager@mybaks.kz')
            ->setTo($sendForm2->email)
            ->setSubject('Информация с сайта')
            ->setHtmlBody(
                '<p>' . $sendForm2->name . '</p>',
                '<p>' . $sendForm2->surname . '</p>',
                '<p>' . $sendForm2->orgName . '</p>',
                '<p>' . $sendForm2->email . '</p>',
                '<p>' . $sendForm2->contactFace . '</p>',
                '<p>' . $sendForm2->phone . '</p>');
        $sendForm2->file = UploadedFile::getInstance($sendForm2, 'file');
        if (!empty($sendForm2->file)) {
            if ($sendForm2->upload()) {
                $mailRequest->attach(Yii::getAlias('@frontend/web') . '/' . $sendForm2->file->baseName . '.' . $sendForm2->file->extension);
            }
        }
        $mailResponse = $mailRequest->send();
        if (!empty($sendForm2->file)) {
            unlink(Yii::getAlias('@frontend/web') . '/' . $sendForm2->file->baseName . '.' . $sendForm2->file->extension);
        }
        if ($mailResponse) {
            return $this->redirect('/');
        } else {
            $sendForm2->addError('email', 'send is failed');
            return $this->render('index', compact('travelCollection', 'menCollection', 'womenCollection', 'stocks', 'sendForm', 'sendForm1', 'sendForm2', 'gallery'));
        }

    }
}