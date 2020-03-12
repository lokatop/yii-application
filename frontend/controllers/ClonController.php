<?php


namespace frontend\controllers;


use frontend\models\TitleDescForm;
use Yii;
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
            $title = $model->title;
            $desc = $model->title;
            return $this->render('index', ['model'=>$model,
                                    'title'=>$title,
                                    'desc'=>$desc]);
        }else {
            $model->title = '';
            $model->desc = '';
            return $this->render('index', ['model'=>$model]);
        }
    }
}