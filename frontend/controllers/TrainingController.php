<?php

namespace frontend\controllers;

use common\models\Courses;
use common\models\CourseDescription;
use Yii;

use common\models\User;

class TrainingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionLogin()
    {
        $model = new user();
        if ($this->request->ispost) {
            if ($model->load($this->request->post())) {
                $usename = $model->username;
                $pass = $model->password_hash;
                $productdetails = $model->checkusername($usename, $pass);
                if (!empty($productdetails)) {
                    return $this->redirect(['course']);
                } else {
                    echo "Password incorrect";
                }
                exit;
            }
        }

        return  $this->render('login', ['model' => $model]);
    }
    public function actionCourse()
    {
        $model_course_name = new Courses();
        $course_list = $model_course_name::find()->select('course_name,id')->all();
        return  $this->render('course', ['course_list' => $course_list, 'course_mdl' => $model_course_name]);
    }


    public function actionDetails($course = null)
    {
        $course_id = $_REQUEST['course_id'];
        $course_name = $_REQUEST['crs_name'];
        $crs_description_data = CourseDescription::find()
            ->where(['course_id' => $course_id])
            ->all();
        return $this->render('php', ['crs_description' => '', 'crs_description_data' => $crs_description_data, 'crs_name' => $course_name]);
    }

    public function actionDescription()
    {

        $id = $_REQUEST['description_id'];
        $crs_description = CourseDescription::find()
            ->where(['id' => $id])
            ->one();

        $course_id = $crs_description['course_id'];
        $crs_description_data = CourseDescription::find()
            ->where(['course_id' => $course_id])
            ->all();

        return $this->render('php', ['crs_description' => $crs_description, 'crs_description_data' => $crs_description_data]);
    }
}
