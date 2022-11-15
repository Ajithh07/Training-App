<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course_description".
 *
 * @property int $id
 * @property string $title
 * @property int $course_id
 * @property string $description
 * @property string $video_url
 * @property string $image_url
 * @property string $created_at
 * @property string $author
 */
class CourseDescription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'course_description';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'course_id', 'description', 'video_url', 'image_url', 'created_at', 'author'], 'required'],
            [['course_id'], 'integer'],
            [['created_at'], 'safe'],
            [['title', 'video_url', 'image_url'], 'string', 'max' => 200],
            [['description'], 'string', 'max' => 3000],
            [['author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'course_id' => 'Course ID',
            'description' => 'Description',
            'video_url' => 'Video Url',
            'image_url' => 'Image Url',
            'created_at' => 'Created At',
            'author' => 'Author',
        ];
    }
}
