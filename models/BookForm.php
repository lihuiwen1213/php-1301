<?php

namespace app\models;

use Yii;
use yii\base\Model;

class BookForm extends Model
{
    public $name;
    public $author;

    public function rules()
    {
        return [
            [['name','author'],'required']
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