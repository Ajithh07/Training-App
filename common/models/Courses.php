<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $id
 * @property string $course_name
 * @property string $course_description
 * @property string $created_date
 * @property int $created_by
 * @property string $logo
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_name', 'course_description', 'created_date', 'created_by', 'logo'], 'required'],
            [['created_date'], 'safe'],
            [['created_by'], 'integer'],
            [['course_name'], 'string', 'max' => 50],
            [['course_description'], 'string', 'max' => 300],
            [['logo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_name' => 'Course Name',
            'course_description' => 'Course Description',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'logo' => 'Logo',
        ];
    }
}
