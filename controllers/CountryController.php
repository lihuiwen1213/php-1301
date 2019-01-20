<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use app\models\BookForm;
class CountryController extends Controller
{
    public function actionIndex()
    {
        $posts = Yii::$app->db->createCommand('SELECT * FROM book')
            ->queryAll();
        
        return $this->render('index',[
            'posts'=>$posts
        ]);
    }
    public function actionAdd()
    {
        $model = new BookForm;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            // 验证$model收到的数据
            // 做些有意义的事……
            // 增加
            $data = YII::$app->db->createCommand()->insert('book', [
                'book_name' => $model['name'],
                'author' => $model['author'],
            ])->execute();
            return $this->render('success',['model'=>$model]);
        }else{
            return $this->render('add',['model'=>$model]);
        }
    }
    public function actionDelete()
    {
        // 参数
        $request = Yii::$app->request;
        $id = $request->get('id');  

        Yii::trace('start calculating average revenueaaaaaaaaaaaa');

        // 删除
        $data12 = YII::$app->db->createCommand()->delete('book', 'id=:id', ['id' => $id])->execute();
        
        return $this->render('delete');
    }
    public function actionEdit()
    {
        $model = new BookForm;
        // 参数
        $request = Yii::$app->request;
        $id = $request->get('id');

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            // update()更新
            $data11 = YII::$app->db->createCommand()->update('book', [
                'book_name' => $model['name'],
                'author' => $model['author'],
            ], 'id=:id', ['id' => $id])->execute();
            return $this->render('success',['model'=>$model]);
        }else{
            
            $data = Yii::$app->db->createCommand('SELECT * FROM book WHERE id='.$id)
                ->queryOne();

            return $this->render('edit',['model'=>$model,'data'=>$data]);
        }
        

        
        
    }
    public function actionSelect()
    {
        // 参数
        $request = Yii::$app->request;
        $id = $request->get('id');  
        
        $model = Yii::$app->db->createCommand('SELECT * FROM book WHERE id='.$id)
           ->queryOne();
        return $this->render('select',[
            'model'=>$model
        ]);
    }
}
?>