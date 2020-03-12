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
            ['title', 'required'],
            ['title', 'string', 'min'=>3],
            ['desc', 'required'],
            ['desc', 'string', 'min'=>10]
        ];
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDesc(){
        return $this->desc;
    }

}