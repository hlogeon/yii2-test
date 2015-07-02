<?php
/**
 * Created by PhpStorm.
 * User: hlogeon
 * Date: 7/2/15
 * Time: 5:22 PM
 */

namespace app\controllers;


use app\models\Book;
use app\models\BookForm;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BookController extends Controller{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['read', 'update', 'delete'],
                'rules' => [
                    [
                        'actions' => ['read', 'update', 'delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        return $this->render('list', [
            'books' => Book::find()->all(),
        ]);
    }

    public function actionRead($id)
    {
        return $this->render('item', [
            'book' => Book::findOne($id),
        ]);
    }

    public function actionUpdate($id)
    {
        /** @var Book $book */
        $book = Book::findOne($id);
        $model = new BookForm();
        $model->loadBook($book);
        if(\Yii::$app->request->isGet)
            return $this->render('form', ['model' => $model]);
        if(\Yii::$app->request->isPost){
            $book->setAttributes(\Yii::$app->request->post('BookForm'), false);
            if($book->save()){
                return $this->goBack();
            }
        }
        return $this->redirect('site/error');
    }

    public function actionDelete($id)
    {
        Book::findOne($id)->delete();
        return $this->goBack();
    }

}