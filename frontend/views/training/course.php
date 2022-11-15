<?php

use yii\bootstrap5\Html;
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/TrainingApp/frontend/views/training/course.css" />
</head>

<body>
    <div class="course-container">
        <h2 class="course-title">COURSE LIST</h2>
        <div class="buttons-list">
            <?php
            foreach ($course_list as $crslist) {
                $crs_name = $crslist['course_name'];
                $crs_id = $crslist['id'];
                echo Html::a($crs_name, ['details', 'course_id' => $crs_id,'crs_name' =>$crs_name], ['class' => 'btn_course']);
            }
            ?>

        </div>
    </div>
</body>

</html>