<?php

namespace app\controllers;

use Yii;

use yii\web\Controller;
use app\models\Students;


class StudentsController extends Controller
{
	public function actionIndex() {
		$studentsList = Students::find()->all();
        
		return $this->render('index', [
			'students' => $studentsList
		]);
	}

	public function actionCreate()
    {
        $model = new Students();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success','Student added');
			
			return $this->redirect(['students/index']);
        }
		
		return $this->render('create', ['student' => $model]);

    }

	public function actionUpdate($id)
    {
        $model= Students::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success','Student has been updated ');

            return $this->redirect(['students/index']);
        }
		
        return $this->render('update', [
            'model'=>$model,
        ]);
    }

	public function actionDelete($id)
    {
        $model= Students::findOne($id);

		$model->delete();
		
        Yii::$app->session->setFlash('success','Student has been deleted ');
		
		return $this->render('delete');
    }
}