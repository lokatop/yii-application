<?php


namespace frontend\controllers;


use frontend\models\TitleDescForm;
use Yii;
use yii\helpers\VarDumper;
use yii\web\Controller;

class ClonController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new TitleDescForm();
        if($model->load(Yii::$app->request->get())&& $model->validate()){
            //VarDumper::dump($model);
            $title = $model->getTitle();
            $desc = $model->getDesc();
            return $this->render('index', ['model'=>$model,
                                    'title'=>$title,
                                    'desc'=>$desc]);
        }else {

            $title = $model->getTitle();
            $desc = $model->getDesc();
            $model->title = '';
            $model->desc = '';
            return $this->render('index', ['model'=>$model,
                'title'=>$title,
                'desc'=>$desc]);
        }
    }
}