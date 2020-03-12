<?php
namespace frontend\models;

use yii\base\Model;

class TitleDescForm extends Model
{
    public $title;
    public $desc;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['title', 'desc'], 'required'],
        ];
    }
}