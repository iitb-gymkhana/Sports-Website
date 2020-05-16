<?php
namespace frontend\controllers;

use Yii;
use ZipArchive;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\helpers\VarDumper;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\CertificateForm;

/**
 * Site controller
 */
class CertificateController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new CertificateForm;
        if (!Yii::$app->request->get('template')) {
            return $this->render('index');
        }
        return $this->render('form', [ 'model' => $model, 'template' => Yii::$app->request->get('template') ]);
    }

    /**
     * .
     * Generate certificate using CSV and template
     * @return mixed
     */
    public function actionGenerate()
    {
        $request = Yii::$app->request;
        if($request->isPost){
            $model = new CertificateForm;
            // Load values from POST into model and set csv_file to UploadedFile instance
            if(!$model->load($_POST) || ($model->csv_file = UploadedFile::getInstance($model, 'csv_file')) === FALSE)
                throw new InvalidParamException;
            $zip = new \ZipArchive;
            $zip->open(Yii::getAlias('@app').'/test.zip',ZipArchive::CREATE|ZipArchive::OVERWRITE);
            if(($zip = $model->generate($zip)) === FALSE)
                throw new InvalidParamException;
            $zip->close();
            return Yii::$app->response->sendFile(Yii::getAlias('@app').'/test.zip', 'test.zip');
        }
    }

    /**
     * .
     * Generate sample certificate (inline PDF) using CSV and template
     * @return mixed
     */
    public function actionSample()
    {
        $request = Yii::$app->request;
        if($request->isPost){
            $model = new CertificateForm;
            // Load values from POST into model and set csv_file to UploadedFile instance
            if(!$model->load($_POST) || ($model->csv_file = UploadedFile::getInstance($model, 'csv_file')) === FALSE)
                throw new InvalidParamException;
            $sample = $model->generateSingle();

            if($sample == null)
                throw new InvalidParamException;
            return Yii::$app->response->sendContentAsFile($sample, 'sample.pdf', ['inline'=>true]);
        }
    }
}
