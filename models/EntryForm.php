<?php

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email']
        ];
    }
}

// 错误验证
// $model = new EntryForm();
// $model->name = 'Qiang';
// $model->email = 'bad';
// if($model->validate()){
//     // 成功
// }else{
//     // 失败
//     // 使用$model->getErrors()获取错误详情
// }